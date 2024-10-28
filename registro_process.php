<?php
include "./config.php";
$directory="img/users_pfp/";

$db = $config["db"]["name"];
$dsn = "mysql:dbname={$config['db']['name']};host={$config['db']['host']}";

$user = $config["db"]["user"];
$password = $config["db"]["pass"];
try {
    $sql = new PDO($dsn, $user, $password);
} catch (\PDOException $e) {
    die('Ha fallat la connexió: ' . $e->getMessage());
}

$id=2;
if (isset($_POST["username"])){
    $name=$_POST["name"];
    $surname=$_POST["surname"];
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=password_hash($_POST["password"],PASSWORD_BCRYPT);    
    $img="img{$id}.jpg";
    // echo "insert into users values (2,'{$username}',{$password},{$email},1,{$img},{$name},{$surname})";
    // die();
    $sql->query("insert into users (username,password,email,tipo,img,name,surname) values ('{$username}','{$password}','{$email}',1,'{$img}','{$name}','{$surname}')");
    move_uploaded_file($_FILES["profile_image"]["tmp_name"], $directory. $current["info"]);
    
    header("location:login.php?ok=1");
     
}