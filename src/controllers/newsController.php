<?php
function newsController($request,$response,$container){
    $response->setTemplate("anuncis.php");
    return $response;
}
?>