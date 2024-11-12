<?php
function adminnewsController($request,$response,$container){
    $response->setTemplate("adminanuncis.php");
    return $response;
}
?>