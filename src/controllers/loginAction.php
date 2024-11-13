<?php

// Función que maneja el proceso de autenticación de usuario.
function loginAction($request, $response, $container) {

    // Obtiene el modelo de usuarios desde el contenedor de dependencias.
    $users = $container->users();

    // Obtiene los datos de entrada del formulario de inicio de sesión.
    $username = $request->get(INPUT_POST, "username");
    $password = $request->get(INPUT_POST, "password");

    // Recupera los datos del usuario de la base de datos usando el nombre de usuario.
    $currentUser = $users->getUser($username);

    // Verifica si la contraseña proporcionada coincide con la almacenada en la base de datos.
    $passwordequal = password_verify($password, $currentUser["password"]);

    // Si el usuario es un administrador, establece las sesiones necesarias y redirige al panel de inicio.
    if ($currentUser["role"] == "admin") {
        $response->setSession("user", $currentUser);
        $response->setSession("isLogged", true);
        $response->setSession("isAdmin", true);
        $response->redirect("location:index.php");

    // Si el usuario es válido y la contraseña es correcta, establece las sesiones y redirige a la página de inicio.
    } else if ($currentUser && $passwordequal) {
        $response->setSession("user", $currentUser);
        $response->setSession("isLogged", true);
        $response->redirect("location:index.php");

    // Si la autenticación falla, redirige de nuevo al formulario de login con un parámetro GET indicando el error.
    } else {
        /**Si la sesión no es iniciada correctamente, redirige al login y muestra un mensaje de error.*/
$response->redirect("location:index.php?r=login&logged=1");}

    // Devuelve la respuesta final.
    return $response;
}