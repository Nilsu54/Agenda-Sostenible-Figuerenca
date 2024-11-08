<?php
function registerController($request, $response,$container){
     $response->setTemplate("registerForm.php");
     return $response;
}