<?php
function loginController($request, $response,$container){
     $response->setTemplate("login.php");
     return $response;
}