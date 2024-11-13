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

    $("#saveEvent").click(function(e){
        e.preventDefault();
    
        var formData = new FormData();
        
      
        formData.append("eventTitle", $("#eventTitle").val());
        formData.append("eventDate", $("#eventDate").val());
        formData.append("eventHour", $("#eventHour").val());
        formData.append("eventDuration", $("#eventDuration").val());
        formData.append("eventLat", $("#eventLat").val());
        formData.append("eventLong", $("#eventLong").val());
        formData.append("eventDesc", $("#eventDesc").val());
        formData.append("eventType", $("#eventType").val());
        
        
        var files = $("#eventImages")[0].files;
        for (var i = 0; i < files.length; i++) {
            formData.append("eventImages[]", files[i]);
        }
    
        $.ajax({
            url: 'index.php?r=addEvent',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false, 
            success: function(response) {
                if (response.success) {
                    alert('Esdeveniment creat correctament!');
                } else {
                    //alert('Error: ' + response.message);
                }
            },
            error: function() {
                alert('Error al enviar los datos.');
            }
        });
    });
    


    // $("#saveEvent").click(function(e){
    //     e.preventDefault();
    //     const formData = {
    //         eventTitle: $("#eventTitle").val(),
    //         eventDate: $("#eventDate").val(),
    //         eventHour:  $("#eventHour").val(),
    //         eventDuration: $("#eventDuration").val(),
    //         eventLat: $("#eventLat").val(),
    //         eventLong: $("#eventLong").val(),
    //         eventDesc: $("#eventDesc").val(),
    //         eventType: $("#eventType").val(),
    //     }
    //     console.log(formData);
    //     $.ajax({
    //         url: 'index.php?r=addEvent',
    //         type: 'POST',
    //         data: formData,
    //         success: function(response) {
    //             if (response.success) {
    //                 console.log(data);
    //                 alert('Perfil actualizado correctamente');
    //             } else {
    //                 console.log(data);
    //                 alert('Error: ' + response.message);
    //             }
    //         },
    //         error: function() {
    //             console.log(data);
    //             alert('Error al actualizar el perfil');
    //         }
    //     });

    // });

    $("#esborraEvent").click(function(e){

        e.preventDefault();
        console.log("+++");
        let id=$(this).attr("esborraEvent").val();
        console.log(id);
        let confirmation= "De veritat que vols esborrar l'event"+ $("#eventName").val();
        if(confirm(confirmation)){

            // $.ajax({
            //     url: 'index.php?r=deleteEvent',
            //     type: 'POST',
            //     data: formData,
            //     success: function (response) {
            //         if (response.success) {
            //             console.log(data);
            //             a$("#event ").remove();
            //         }
            
        }
    });


}); 
