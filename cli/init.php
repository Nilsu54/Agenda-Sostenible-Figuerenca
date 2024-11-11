<?php
// Incluye el archivo de configuración que contiene las credenciales de la base de datos
include "../src/config.php";

// Obtiene el nombre de la base de datos desde la configuración
$db = $config["db"]["name"];

// Muestra un mensaje indicando que se está creando la base de datos
echo "Creant la base de dades : {$db} \n";

// Construye la cadena de conexión DSN (Data Source Name) con los datos de configuración
$dsn = "mysql:dbname={$config['db']['name']};host={$config['db']['host']}";

// Obtiene el usuario de la base de datos desde la configuración
$user = $config["db"]["user"];

// Obtiene la contraseña de la base de datos desde la configuración
$password = $config["db"]["pass"];

try {
    // Intenta establecer una conexión PDO con la base de datos usando las credenciales
    $sql = new PDO($dsn, $user, $password);
} catch (\PDOException $e) {
    // Si la conexión falla, muestra el mensaje de error y termina la ejecución
    die('Ha fallat la connexió: ' . $e->getMessage());
}