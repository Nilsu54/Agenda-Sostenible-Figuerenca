<?php
// frontcontroller
include "../src/config.php";
include "../src/Emeset/Container.php";
include "../src/Emeset/Request.php";
include "../src/Emeset/Response.php";
include "../src/middleware/auth.php";
include "../src/models/UserPDO.php";
include "../src/models/Db.php";
include "../src/ProjectContainer.php";
include "../src/middleware/adminauth.php";

$request = new \Emeset\Request();
$response = new \Emeset\Response();
$container = new ProjectContainer($config);
$sql = new Db($config);
$users =new UserPDO($sql->get());

$r = '';
if(isset($_REQUEST["r"])){
    $r = $_REQUEST["r"];
}

if ($r==""){
    include "../src/controllers/indexController.php";
    $response=indexController($request, $response,$container);
    
}else if ($r=="registerUser"){
    include "../src/controllers/registerController.php";
    $response=registerController($request,$response,$container);
}
else if($r=="storeUser"){
    include "../src/controllers/storeUserController.php";
    $response=storeUserController($request,$response,$container);
}
elseif($r=="login"){
    include "../src/controllers/loginController.php";
    $response=loginController($request,$response,$container); 
}
else if($r=="loginProcess"){
    include "../src/controllers/loginAction.php";
    $response=loginAction($request,$response,$container);
}
else if($r=="dashboard"){
    include "../src/controllers/dashboard.php";
    $response=adminauth($request,$response,$container,"dashboard");
}

$response->response();

