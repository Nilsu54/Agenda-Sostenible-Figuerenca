<?php

function showEventController($request,$response,$container){
    $events = $container->Events();
    $id= $request->get(INPUT_GET, "idEvent");
    $event = $events->getbyId($id);

    $response->set("event", $event);
    $response->setTemplate("esdeveniment.php");
    return $response;



}
