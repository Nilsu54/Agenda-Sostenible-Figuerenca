<?php
function loginController($request, $response,$container){
    return $response->setTemplate("login.php");
}