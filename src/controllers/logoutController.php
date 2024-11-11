<?php 
function logoutController($request,$response,$container){
    if(isset($_SESSION["user"])){
        $response->unsetSession("user");
        $response->redirect("location:index.php");
    }
    $response->redirect("location:index.php");
    return $response;
}
