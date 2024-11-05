<?php

function indexController($request, $response,$container){
  $response->setTemplate("index.php");
  return $response;
}
