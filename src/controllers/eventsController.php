<?php
function eventsController($request,$response,$container){
    $response->setTemplate("esdeveniments.php");
    return $response;
}
?>
