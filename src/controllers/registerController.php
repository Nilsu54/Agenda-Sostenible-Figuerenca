<?php
function registerController($request, $response,$container){
    return $response->setTemplate("registerForm.php");
}