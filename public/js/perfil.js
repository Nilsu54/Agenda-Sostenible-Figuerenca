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
    
    $("#editEvent").click(function(e){
        e.preventDefault();
    
        var formData = new FormData();
        
      
        formData.append("EeventTitle", $("#EeventTitle").val());
        formData.append("EeventDate", $("#EeventDate").val());
        formData.append("EeventHour", $("#EeventHour").val());
        formData.append("EeventDuration", $("#EeventDuration").val());
        formData.append("EeventDesc", $("#EeventDesc").val());
    
    
        $.ajax({
            url: 'index.php?r=editEvent',
            type: 'POST',
            data: formData,
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

    $(document).on('click', '#esborraEvent', function(){
        console.log("+++");
        var eventId = $(this).data("id");
        console.log(eventId);
        const formData = {
            id: eventId,
        }
        let confirmation= "De veritat que vols esborrar l'event";

        if(confirm(confirmation)){

            $.ajax({
                url: 'index.php?r=deleteEvent',
                type: 'POST',
                data: formData,
                success: function () {
                        console.log(eventId);
                        $("#event"+eventId).remove();
              }
        
            });
    }
    });



    // document.getElementById('nouEsdevenimentForm').addEventListener('submit', function(event) {
        
    //     var latitude = parseFloat(document.getElementById('latitude').value);
    //     var longitude = parseFloat(document.getElementById('longitude').value);
        
       
    //     if (isNaN(latitude) || latitude < -90 || latitude > 90) {
    //       event.preventDefault();  
    //       alert('Por favor, ingresa una latitud válida entre -90 y 90.');
    //       return;  // Detener ejecución si la latitud no es válida
    //     }
        
       
    //     if (isNaN(longitude) || longitude < -180 || longitude > 180) {
    //       event.preventDefault();  
    //       alert('Por favor, ingresa una longitud válida entre -180 y 180.');
    //       return; 
    //     }
    //   });



    $("#enviarComentari").click(function(e){
        e.preventDefault();
    
        var formData = new FormData();
        
      
        formData.append("comment", $("#comment").val());
        formData.append("userIdC",$("#userIdC").val());
        formData.append("eventIdC",$("#eventIdC").val());
        
        $.ajax({
            url: 'index.php?r=addComment',
            type: 'POST',
            data: formData,

            processData: false,
            contentType: false, 
            success: function () {
               console.log("success");
      }
    })
});


});