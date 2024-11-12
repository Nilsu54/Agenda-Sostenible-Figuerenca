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
        
<<<<<<< HEAD
        const formData = {
            firstname: $("#firstName").val(),
            iduser: $("#iduser").val(),
            lastName:$("#lastName").val(),
            email: $("#email").val(),
            username: $("#username").val(),
        }
        console.log(formData)
        // new FormData(this);
=======
        // Crea un objeto FormData con los datos del formulario
        const formData = new FormData(this);
        
        // Realiza una petición AJAX para actualizar el perfil
>>>>>>> a8d1f8c36a0e3b70649bab8898b0573a7119a64e
        $.ajax({
            url: 'index.php?r=updateProfile',
            type: 'POST',
            data: formData,
<<<<<<< HEAD
=======
            processData: false, // No procesar los datos
            contentType: false, // No establecer tipo de contenido
>>>>>>> a8d1f8c36a0e3b70649bab8898b0573a7119a64e
            success: function(response) {
                // Maneja la respuesta exitosa
                if (response.success) {
                    console.log(data);
                    alert('Perfil actualizado correctamente');
                } else {
                    console.log(data);
                    alert('Error: ' + response.message);
                }
            },
            error: function() {
<<<<<<< HEAD
                console.log(data);
=======
                // Maneja errores en la petición
>>>>>>> a8d1f8c36a0e3b70649bab8898b0573a7119a64e
                alert('Error al actualizar el perfil');
            }
        });
    });
}); 