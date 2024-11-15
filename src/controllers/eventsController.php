<?php
function eventsController($request,$response,$container){
    $eventos = $container->events();
    
    // Llama al método `list` del modelo para obtener la lista de usuarios.
    $events = $eventos->listIndex();
    
    // Añade la lista de usuarios al objeto de respuesta para su uso en la vista.
    $response->set("events", $events);
    $response->setTemplate("esdeveniments.php");
    return $response;
}
?>
