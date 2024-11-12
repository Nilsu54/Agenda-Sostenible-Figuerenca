<?php
function advertsController($request,$response,$container){
    $response->setTemplate("anuncis.php");
    return $response;
}