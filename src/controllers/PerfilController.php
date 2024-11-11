<?php
class PerfilController {
    private $db;

    // Constructor que recibe una instancia de la base de datos y la almacena en la propiedad $db.
    public function __construct($db) {
        $this->db = $db;
    }

    // Función para actualizar los datos del perfil de un usuario.
    public function updateProfile($userId, $data) {
        try {
            // Validar que los campos esenciales (nombre, apellido, correo electrónico) no estén vacíos.
            if (empty($data['firstName']) || empty($data['lastName']) || empty($data['email'])) {
                throw new Exception("Todos los campos son obligatorios");
            }

            // Procesar la imagen de perfil si se ha subido una nueva.
            if (isset($_FILES['profileImage']) && $_FILES['profileImage']['error'] === 0) {
                $imagePath = $this->processProfileImage($_FILES['profileImage']);
                // Actualizar la ruta de la imagen de perfil en la base de datos.
                $this->updateProfileImage($userId, $imagePath);
            }

            // Actualizar los datos del perfil en la base de datos.
            $stmt = $this->db->prepare("
                UPDATE users 
                SET first_name = ?, last_name = ?, email = ?, username = ? 
                WHERE id = ?
            ");

            // Ejecutar la actualización con los datos proporcionados.
            $stmt->execute([
                $data['firstName'],
                $data['lastName'],
                $data['email'],
                $data['username'],
                $userId
            ]);

            // Retornar un mensaje de éxito.
            return ['success' => true, 'message' => 'Perfil actualizado correctamente'];
        } catch (Exception $e) {
            // En caso de error, retornar el mensaje de la excepción.
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    // Función privada para procesar la imagen de perfil subida.
    private function processProfileImage($file) {
        $targetDir = "public/img/profiles/"; // Directorio de destino para las imágenes de perfil.
        $fileName = uniqid() . '_' . basename($file['name']); // Crear un nombre único para la imagen.
        $targetPath = $targetDir . $fileName; // Ruta completa donde se guardará la imagen.

        // Validar que el tipo de archivo sea una imagen permitida.
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        if (!in_array($file['type'], $allowedTypes)) {
            throw new Exception("Tipo de archivo no permitido"); // Lanzar excepción si el tipo no es válido.
        }

        // Intentar mover el archivo desde el directorio temporal a la ubicación deseada.
        if (!move_uploaded_file($file['tmp_name'], $targetPath)) {
            throw new Exception("Error al subir la imagen"); // Lanzar excepción si no se puede mover el archivo.
        }

        // Retornar la ruta de la imagen procesada.
        return $targetPath;
    }

    // Función privada para actualizar la imagen de perfil en la base de datos.
    private function updateProfileImage($userId, $imagePath) {
        // Preparar la consulta SQL para actualizar la ruta de la imagen de perfil en la base de datos.
        $stmt = $this->db->prepare("
            UPDATE users 
            SET profile_image = ? 
            WHERE id = ?
        ");
        // Ejecutar la consulta de actualización.
        $stmt->execute([$imagePath, $userId]);
    }
}
