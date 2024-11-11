<?php

// Clase UserPDO para manejar las operaciones de los usuarios en la base de datos usando PDO.
class UserPDO
{
    // Propiedad privada para almacenar la conexión PDO.
    private PDO $sql;

    // Constructor que recibe la conexión PDO para interactuar con la base de datos.
    public function __construct(PDO $sql)
    {
        $this->sql = $sql;
    }

    // Método para agregar un nuevo usuario a la base de datos.
    public function add($username, $password, $email, $img, $name, $surname)
    {
        // Consulta SQL para insertar un nuevo usuario en la tabla 'users'.
        $query = "insert into users (username, password, email, role, img, name, surname) 
                  values ('{$username}', '{$password}', '{$email}', 1, '{$img}', '{$name}', '{$surname}')";
        
        // Prepara y ejecuta la consulta.
        $stm = $this->sql->prepare($query);
        $stm->execute();
    }

    // Método para eliminar un usuario de la base de datos por su ID.
    public function delete($id)
    {
        // Consulta SQL para eliminar un usuario según el ID.
        $query = "delete from users where id={$id};";
        
        // Prepara y ejecuta la consulta.
        $stm = $this->sql->prepare($query);
        $stm->execute();
    }

    // Método para obtener una lista de usuarios, utilizada en el panel de administración.
    public function list()
    {
        // Consulta SQL para obtener los usuarios con información básica.
        $query = "select id, name, username, email, role, creation_date from users;";
        $users = [];
        
        // Ejecuta la consulta y recorre los resultados.
        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $user) {
            // Guarda los usuarios en un array asociativo donde la clave es el ID del usuario.
            $users[$user["id"]] = $user;
        }
        
        // Devuelve la lista de usuarios.
        return $users;
    }

    // Método para que un usuario edite sus propios datos (perfil).
    public function edit($name, $email, $img, $password, $id)
    {
        // Encripta la nueva contraseña.
        $pass = password_hash($password, PASSWORD_BCRYPT);
        
        // Consulta SQL para actualizar los datos del usuario.
        $query = "update users set name={$name}, password={$pass}, img={$img}, email={$email} where id={$id};";
        
        // Prepara y ejecuta la consulta.
        $stm = $this->sql->prepare($query);
        $stm->execute();
    }

    // Método para que un administrador edite los datos de otros usuarios, incluyendo cambiar el rol.
    public function editAdmin($name, $password, $role, $email, $id)
    {
        // Encripta la nueva contraseña.
        $pass = password_hash($password, PASSWORD_BCRYPT);  
        
        // Consulta SQL para actualizar los datos de un usuario y cambiar su rol (por ejemplo, para convertirlo en admin).
        $query = "update users set name='{$name}', password='{$pass}', role='{$role}', email='{$email}' where id={$id};";
        
        // Prepara y ejecuta la consulta.
        $stm = $this->sql->prepare($query);
        $stm->execute();
    }

    // Método para obtener un usuario a partir de su nombre de usuario (para el login).
    public function getUser($username)
    {
        // Consulta SQL para obtener los datos de un usuario por su nombre de usuario.
        $query = "select id, username, password, role from users where username = '{$username}'";
        
        // Prepara y ejecuta la consulta.
        $stm = $this->sql->prepare($query);
        $stm->execute();
        
        // Recupera el resultado como un array asociativo.
        $result = $stm->fetch(PDO::FETCH_ASSOC);
        
        // Devuelve el resultado.
        return $result;
    }
}
