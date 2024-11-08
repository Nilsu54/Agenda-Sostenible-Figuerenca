<?php
class PerfilController {
    private $db;
    
    public function __construct($db) {
        $this->db = $db;
    }

    public function updateProfile($userId, $data) {
        try {
            // Validar datos
            if (empty($data['firstName']) || empty($data['lastName']) || empty($data['email'])) {
                throw new Exception("Todos los campos son obligatorios");
            }

            // Procesar la imagen si se ha subido una nueva
            if (isset($_FILES['profileImage']) && $_FILES['profileImage']['error'] === 0) {
                $imagePath = $this->processProfileImage($_FILES['profileImage']);
                // Actualizar la ruta de la imagen en la base de datos
                $this->updateProfileImage($userId, $imagePath);
            }

            // Actualizar datos del perfil
            $stmt = $this->db->prepare("
                UPDATE users 
                SET first_name = ?, last_name = ?, email = ?, username = ?
                WHERE id = ?
            ");

            $stmt->execute([
                $data['firstName'],
                $data['lastName'],
                $data['email'],
                $data['username'],
                $userId
            ]);

            return ['success' => true, 'message' => 'Perfil actualizado correctamente'];
        } catch (Exception $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    private function processProfileImage($file) {
        $targetDir = "public/img/profiles/";
        $fileName = uniqid() . '_' . basename($file['name']);
        $targetPath = $targetDir . $fileName;

        // Validar tipo de archivo
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        if (!in_array($file['type'], $allowedTypes)) {
            throw new Exception("Tipo de archivo no permitido");
        }

        // Mover archivo
        if (!move_uploaded_file($file['tmp_name'], $targetPath)) {
            throw new Exception("Error al subir la imagen");
        }

        return $targetPath;
    }

    private function updateProfileImage($userId, $imagePath) {
        $stmt = $this->db->prepare("
            UPDATE users 
            SET profile_image = ?
            WHERE id = ?
        ");
        $stmt->execute([$imagePath, $userId]);
    }
} 