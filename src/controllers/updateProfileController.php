<?php

function updateProfileController($request, $response,$container){
    $users =$container->Users();
    $name=$request->get(INPUT_POST,"firstname");
    $surname=$request->get(INPUT_POST,"lastName");
    $username=$request->get(INPUT_POST,"username");
    $email=$request->get(INPUT_POST,"email");
    $id=$request->get(INPUT_POST,"iduser");
    $users->edit($name,$email,$id,$username,$surname);
    $_SESSION["user"]["username"]=$username;

    $response->redirect("location:index.php?r=profile");
    return $response;
}