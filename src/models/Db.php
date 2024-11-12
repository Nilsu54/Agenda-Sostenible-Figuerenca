<?php

// Db class to manage the database connection using PDO.
class Db {

    // Private property to store the PDO connection.
    private PDO $sql;

    // Constructor that establishes the database connection using the configuration parameters.
    public function __construct($config)
    {
        // Build the DSN (Data Source Name) for the MySQL connection using the configuration.
        $dsn = "mysql:dbname={$config['db']['name']};host={$config['db']['host']}";
        
        // Get the username and password from the configuration.
        $user = $config["db"]["user"];
        $password = $config["db"]["pass"];
        
        try {
            // Attempt to establish the connection to the database using PDO.
            $this->sql = new PDO($dsn, $user, $password);
        } catch (\PDOException $e) {
            // If an error occurs, catch the exception and display an error message.
            die('Connection failed: ' . $e->getMessage());
        }
    }

    // Method to get the PDO connection.
    public function get(): PDO {
        return $this->sql;
    }

}
