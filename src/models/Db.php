<?php

// Clase Db para manejar la conexión a la base de datos utilizando PDO.
class Db {

    // Propiedad privada para almacenar la conexión PDO.
    private PDO $sql;

    // Constructor que establece la conexión a la base de datos utilizando los parámetros de configuración.
    public function __construct($config)
    {
        // Construye el DSN (Data Source Name) para la conexión a MySQL utilizando la configuración.
        $dsn = "mysql:dbname={$config['db']['name']};host={$config['db']['host']}";
        
        // Obtiene el usuario y la contraseña desde la configuración.
        $user = $config["db"]["user"];
        $password = $config["db"]["pass"];
        
        try {
            // Intenta establecer la conexión con la base de datos usando PDO.
            $this->sql = new PDO($dsn, $user, $password);
        } catch (\PDOException $e) {
            // Si ocurre un error, captura la excepción y muestra un mensaje de error.
            die('Ha fallat la connexió: ' . $e->getMessage());
        }
    }

    // Método para obtener la conexión PDO.
    public function get(): PDO {
        return $this->sql;
    }

}
