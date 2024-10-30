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

