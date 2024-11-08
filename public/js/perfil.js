$(document).ready(function() {
    // Previsualización de la imagen
    $("#newProfileImage").change(function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                $("#currentProfileImage").attr('src', e.target.result);
            }
            reader.readAsDataURL(file);
        }
    });

    // Envío del formulario
    $("#profileForm").submit(function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        
        $.ajax({
            url: '/api/update-profile.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.success) {
                    alert('Perfil actualizado correctamente');
                } else {
                    alert('Error: ' + response.message);
                }
            },
            error: function() {
                alert('Error al actualizar el perfil');
            }
        });
    });
}); 