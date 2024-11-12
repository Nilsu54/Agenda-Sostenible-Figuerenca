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


    //funcio que utiliza l'usuari normal per editar el seu perfil i les seves dades
    public function edit($name,$email,$id,$username,$surname){
        $query="update users set username='{$username}',name='{$name}',email='{$email}',surname='{$surname}' where id={$id};";
        $stm=$this->sql->prepare($query);
        $stm->execute();
    }
    public function editimg($img,$id){
        $query="update users set img={$img} where id={$id};";
        $stm=$this->sql->prepare($query);
        $stm->execute();
    }

    //funcio que utilitza l'admin per editar la informació dels usuaris, pot canviar el rol de l'usuari per si es volgues afegir un altre admin
    public function editAdmin($name,$password,$role,$email,$id){
        $pass=password_hash($password,PASSWORD_BCRYPT);  
        $query="update users set name='{$name}',password='{$pass}',role='{$role}',email='{$email}' where id={$id}; ";
        $stm=$this->sql->prepare($query);
        $stm->execute();
    }

    public function getUser($username){
        $query = "select id, username, password, role, img, name, surname, email from users where username = '{$username}'";
        $stm = $this->sql->prepare($query);
        $stm->execute();
        
        // Recupera el resultado como un array asociativo.
        $result = $stm->fetch(PDO::FETCH_ASSOC);
        
        // Devuelve el resultado.
        return $result;
    }
}
