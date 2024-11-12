<?php
class PerfilController {
    private $db;

    // Constructor that receives a database instance and stores it in the $db property.
    public function __construct($db) {
        $this->db = $db;
    }

    // Function to update a user's profile data.
    public function updateProfile($userId, $data) {
        try {
            // Validate that essential fields (first name, last name, email) are not empty.
            if (empty($data['firstName']) || empty($data['lastName']) || empty($data['email'])) {
                throw new Exception("All fields are required");
            }

            // Process the profile image if a new one has been uploaded.
            if (isset($_FILES['profileImage']) && $_FILES['profileImage']['error'] === 0) {
                $imagePath = $this->processProfileImage($_FILES['profileImage']);
                // Update the profile image path in the database.
                $this->updateProfileImage($userId, $imagePath);
            }

            // Update profile data in the database.
            $stmt = $this->db->prepare("
                UPDATE users 
                SET first_name = ?, last_name = ?, email = ?, username = ? 
                WHERE id = ?
            ");

            // Execute the update with the provided data.
            $stmt->execute([
                $data['firstName'],
                $data['lastName'],
                $data['email'],
                $data['username'],
                $userId
            ]);

            // Return a success message.
            return ['success' => true, 'message' => 'Profile updated successfully'];
        } catch (Exception $e) {
            // In case of error, return the exception message.
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    // Private function to process the uploaded profile image.
    private function processProfileImage($file) {
        $targetDir = "public/img/profiles/"; // Target directory for profile images.
        $fileName = uniqid() . '_' . basename($file['name']); // Create a unique name for the image.
        $targetPath = $targetDir . $fileName; // Full path where the image will be saved.

        // Validate that the file type is an allowed image type.
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        if (!in_array($file['type'], $allowedTypes)) {
            throw new Exception("File type not allowed"); // Throw exception if the type is invalid.
        }

        // Attempt to move the file from the temporary directory to the desired location.
        if (!move_uploaded_file($file['tmp_name'], $targetPath)) {
            throw new Exception("Error uploading image"); // Throw exception if file cannot be moved.
        }

        // Return the processed image path.
        return $targetPath;
    }

    // Private function to update the profile image path in the database.
    private function updateProfileImage($userId, $imagePath) {
        // Prepare the SQL query to update the profile image path in the database.
        $stmt = $this->db->prepare("
            UPDATE users 
            SET profile_image = ? 
            WHERE id = ?
        ");
        // Execute the update query.
        $stmt->execute([$imagePath, $userId]);
    }
}
