// Envío del formulario
$("#profileForm").submit(function(e) {
    e.preventDefault();

    const formData = {
        firstname: $("#firstName").val(),
        iduser: $("#iduser").val(),
        lastName:$("#lastName").val(),
        email: $("#email").val(),
        username: $("#username").val(),
    }
    console.log(formData)
    // new FormData(this);
    $.ajax({
        url: 'index.php?r=updateProfile',
        type: 'POST',
        data: formData,
        success: function(response) {
            if (response.success) {
                console.log(data);
                alert('Perfil actualizado correctamente');
            } else {
                console.log(data);
                alert('Error: ' + response.message);
            }
        },
        error: function() {
            console.log(data);
            alert('Error al actualizar el perfil');
        }
    });
});