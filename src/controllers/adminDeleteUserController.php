<?php
function adminDeleteUserController($request,$response,$container){
    $users = $container->Users();
   
    $users->deleteUser($request->get(INPUT_POST, "id"));
}
?>