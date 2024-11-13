<?php
function adminUserAddController($request,$response,$container){
   
    $users = $container->Users();
    print_r($_POST);
    die();
    
    $name = $request->get(INPUT_POST, "adminname");
    $surname = $request->get(INPUT_POST, "adminsurname");
    $username = $request->get(INPUT_POST, "adminusername");
    $email = $request->get(INPUT_POST, "adminemail");
    $rol = $request->get(INPUT_POST, "adminrol");

    $password = password_hash($request->get(INPUT_POST, "password"), PASSWORD_BCRYPT);
   
    $users->addAdmin($username, $password, $email, $name, $surname, $rol);
}
?>