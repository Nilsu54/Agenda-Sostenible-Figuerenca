<?php
// Controlador para gestionar la página de inicio.
function indexController($request, $response, $container) {
    $eventos = $container->events();
    
    // Llama al método `list` del modelo para obtener la lista de usuarios.
    $events = $eventos->listIndex();
    
    // Añade la lista de usuarios al objeto de respuesta para su uso en la vista.
    $response->set("events", $events);
    
    // Establece la plantilla de vista que se utilizará para la página de inicio.
    $response->setTemplate("index.php");
    
    // Devuelve el objeto de respuesta, que ahora incluye la plantilla de la página de inicio.
    return $response;
}
