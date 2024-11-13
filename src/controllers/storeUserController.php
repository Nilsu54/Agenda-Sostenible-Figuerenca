<?php

// Controlador para almacenar un nuevo usuario en la base de datos.
function storeUserController($request, $response, $container) {
    // Directorio para guardar imagenes de usuario
    $directory="/img/users_pfp/";

    // Obtiene el modelo de usuarios desde el contenedor de dependencias.
    $users = $container->Users();

    // Recupera los datos del formulario de registro enviados por POST.
    $name = $request->get(INPUT_POST, "name");
    $surname = $request->get(INPUT_POST, "surname");
    $username = $request->get(INPUT_POST, "username");
    $email = $request->get(INPUT_POST, "email");

    // Encripta la contraseña utilizando el algoritmo BCRYPT.
    $password = password_hash($request->get(INPUT_POST, "password"), PASSWORD_BCRYPT);

    // Variable para la imagen (en este caso no se está utilizando, pero se podría extender para soportar carga de imágenes).
    $r=$request->get("FILES","profile_image");
    $img=$directory.$r["name"];

    // Para depuración: Imprime el valor de la variable "username" (probablemente esto debería ser eliminado en producción).
    //print_r("username");

    // Llama al método para agregar un nuevo usuario en la base de datos con los datos recibidos.
    $users->add($username, $password, $email, $img, $name, $surname);
    // Mueve del directorio temporal a la carpeta 
    move_uploaded_file($r["tmp_name"],"img/users_pfp/".$r["name"]);
    // Redirige al usuario a la página de login con un parámetro "ok" para indicar que el registro fue exitoso.
    $response->redirect("location:index.php?r=login&ok=1");

    // Devuelve la respuesta final.
    return $response;
}
?>