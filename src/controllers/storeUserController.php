<?php

function storeUserController($request,$response,$container){
    $users =$container->UserPDO();
    $name=$request->get(INPUT_POST,"name");
    $surname=$request->get(INPUT_POST,"surname");
    $username=$request->get(INPUT_POST,"username");
    $email=$request->get(INPUT_POST,"email");
    $password=password_hash(($request->get(INPUT_POST,"password")),PASSWORD_BCRYPT);
    //$img=$request->get($_FILES[""])
    $img="";
    $users->add($username,$password,$email,$img,$name,$surname);
    $response->redirect("location:index.php?r=login&ok=1");
    return $response;
   

}