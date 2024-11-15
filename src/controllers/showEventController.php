<?php

function showEventController($request,$response,$container){
    $events = $container->Events();
    $images= $container->Images();

    $id= $request->get(INPUT_GET, "idEvent");
    $event = $events->getbyId($id);
    $type="";
 
    switch($event["event_type"]){
        case "interior": $type="Interior";
        break;
        case "outside": $type="Aire lliure";
        break;
        case "talk": $type="Xerrada";
        break;
        case "days": $type="Jornada";
    }
    $duration=explode(":",$event["starting_hour"]);
    $image= $images->getbyId($id);
    $response->set("event", $event);
    $response->set("image",$image);
    $response->set("type",$type);
    $response->set("duration",$duration);
    $response->setTemplate("esdeveniment.php");
    return $response;



}
