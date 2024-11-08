<?php
// frontcontroller
include "../src/config.php";
include "../src/controllers/indexController.php";
include "../src/Emeset/Container.php";
include "../src/Emeset/Request.php";
include "../src/Emeset/Response.php";

$request = new \Emeset\Request();
$response = new \Emeset\Response();
$container = new \Emeset\Container($config);

$r = '';
 if(isset($_REQUEST["r"])){
    $r = $_REQUEST["r"];
 }

if ($r==""){
    $response=indexController($request, $response,$container);
}else if ($r=="registerUser"){
    $response=registerController($request,$response,$container);
}
else if($r=="storeUser"){
    $response=storeUserController($request,$response,$container);
}
else if($r=="login"){
    $response=loginController($request,$response,$container);
}

$response->response();

