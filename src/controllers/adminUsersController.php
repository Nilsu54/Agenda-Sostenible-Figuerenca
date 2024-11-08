<?php
function adminUsersController($request,$response,$container){
        $userss=$container->users();
        $users=$userss->list();
        $response->set("users",$users);
        $response->setTemplate("adminUsers.php");
        return $response;
}