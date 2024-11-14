<?php
function favoritsController($request,$response,$container){
    $response->setTemplate("favorits.php");
    return $response;
}
?>