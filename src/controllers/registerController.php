<?php

// Controlador para mostrar el formulario de registro de usuario.
function registerController($request, $response, $container) {
    
    // Establece la plantilla de vista que se utilizará para el formulario de registro.
    $response->setTemplate("registerForm.php");
    
    // Devuelve el objeto de respuesta, que ahora incluye la plantilla del formulario de registro.
    return $response;
}
