<?php

function storeUserController($request,$response,$container){
    $directory="/img/users_pfp/";
    $users =$container->Users();
    $name=$request->get(INPUT_POST,"name");
    $surname=$request->get(INPUT_POST,"surname");
    $username=$request->get(INPUT_POST,"username");
    $email=$request->get(INPUT_POST,"email");
    $password=password_hash(($request->get(INPUT_POST,"password")),PASSWORD_BCRYPT);
    //$img=$request->get($_FILES[""])
    $r=$request->get("FILES","profile_image");
    $img=$directory.$r["name"];
    $users->add($username,$password,$email,$img,$name,$surname);
    move_uploaded_file($r["tmp_name"],"img/users_pfp/".$r["name"]);
    $response->redirect("location:index.php?r=login&ok=1");
    return $response;
}