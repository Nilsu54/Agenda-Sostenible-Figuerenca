<?php
    function dashboardController($request,$response,$container){
        // $users=$container->users();
        // $users->list();
        // $response->set("users",$users);
        $response->setTemplate("adminpanel.php");
        return $response;
    }
