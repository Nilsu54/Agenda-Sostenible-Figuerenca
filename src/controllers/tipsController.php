<?php
function tipsController($request,$response,$container){
    $response->setTemplate("consells.php");
    return $response;
}
?>