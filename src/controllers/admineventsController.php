<?php
function adminEventsController($request,$response,$container){
    $response->setTemplate("adminEvents.php");
    return $response;
}
