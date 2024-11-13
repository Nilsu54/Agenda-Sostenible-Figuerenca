<?php
function admineventsController($request,$response,$container){

    // Obtiene la instancia del modelo de usuarios desde el contenedor de dependencias.
    $eventos = $container->events();

    // Llama al método list del modelo para obtener la lista de usuarios.
    $events = $eventos->list();

    // Añade la lista de usuarios al objeto de respuesta para su uso en la vista.
    $response->set("events", $events);

    $response->setTemplate("adminesdeveniments.php");
    return $response;
}
