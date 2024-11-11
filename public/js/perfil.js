// Espera a que el DOM esté completamente cargado antes de ejecutar el código
$(document).ready(function() {
    // Maneja la previsualización de la imagen de perfil
    $("#newProfileImage").change(function() {
        const file = this.files[0]; // Obtiene el archivo seleccionado
        if (file) {
            const reader = new FileReader(); // Crea un nuevo lector de archivos
            
            // Cuando el archivo se carga correctamente
            reader.onload = function(e) {
                // Actualiza la imagen de previsualización con el nuevo archivo
                $("#currentProfileImage").attr('src', e.target.result);
            }
            // Lee el archivo como URL de datos
            reader.readAsDataURL(file);
        }
    });

    // Maneja el envío del formulario de perfil
    $("#profileForm").submit(function(e) {
        e.preventDefault(); // Previene el envío tradicional del formulario
        
        // Crea un objeto FormData con los datos del formulario
        const formData = new FormData(this);
        
        // Realiza una petición AJAX para actualizar el perfil
        $.ajax({
            url: '/api/update-profile.php',
            type: 'POST',
            data: formData,
            processData: false, // No procesar los datos
            contentType: false, // No establecer tipo de contenido
            success: function(response) {
                // Maneja la respuesta exitosa
                if (response.success) {
                    alert('Perfil actualizado correctamente');
                } else {
                    alert('Error: ' + response.message);
                }
            },
            error: function() {
                // Maneja errores en la petición
                alert('Error al actualizar el perfil');
            }
        });
    });
}); 