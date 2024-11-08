<?php

function loginAction($request,$response,$container){
    $users=$container->users();
    $username=$request->get(INPUT_POST,"username");
    $password=$request->get(INPUT_POST,"password");

    $currentUser=$users->getUser($username);

    $passwordequal= password_verify($password,$currentUser["password"]);
    if($currentUser["role"]=="admin"){
        $response->setSession("user",$currentUser);
        $response->setSession("isLogged",true);
        $response->redirect("location:index.php");
    }
    else if($currentUser && $passwordequal){
        $response->setSession("user",$currentUser);
        $response->setSession("isLogged",true);
        $response->redirect("location:index.php");
    }
    else {
        /**
         * a la hora de iniciar sesion y no inicarla correctamente redigirir 
         * a la pagina de login y con una variable por get para indicar al usuario que no se ha iniciado sesion correctamente
         */
        $response->redirect("location:index.php?r=login&logged=1");
    }

    return $response;


}