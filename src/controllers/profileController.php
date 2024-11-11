<?php

function profileController($request, $response,$container){
    $response->setTemplate("perfil.php");
    return $response;
}