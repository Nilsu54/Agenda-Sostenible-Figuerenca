<?php
// Controlador para gestionar la página de inicio.
function indexController($request, $response, $container) {
    
    // Establece la plantilla de vista que se utilizará para la página de inicio.
    $response->setTemplate("index.php");
    
    // Devuelve el objeto de respuesta, que ahora incluye la plantilla de la página de inicio.
    return $response;
}
