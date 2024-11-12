<?php

// Controlador para mostrar la página de inicio de sesión.
function loginController($request, $response, $container) {
    
    // Establece la plantilla de vista que se utilizará para la página de login.
    $response->setTemplate("login.php");
    
    // Devuelve el objeto de respuesta, que ahora incluye la plantilla de la página de inicio de sesión.
    return $response;
}
