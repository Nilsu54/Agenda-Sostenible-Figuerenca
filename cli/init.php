<?php
include "../src/config.php";

$db = $config["db"]["name"];
echo "Creant la base de dades : {$db} \n";
$dsn = "mysql:dbname={$config['db']['name']};host={$config['db']['host']}";

$user = $config["db"]["user"];
$password = $config["db"]["pass"];
try {
    $sql = new PDO($dsn, $user, $password);
} catch (\PDOException $e) {
    die('Ha fallat la connexió: ' . $e->getMessage());
}