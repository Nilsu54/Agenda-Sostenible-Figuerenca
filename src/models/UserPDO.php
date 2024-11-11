<?php

class UserPDO
{
    private PDO $sql;

    public function __construct(PDO $sql)
    {
        $this->sql = $sql;
    }

    //afegir nou usuari

    public function add($username,$password,$email,$img,$name,$surname){
        $query= "insert into users (username,password,email,role,img,name,surname) values ('{$username}','{$password}','{$email}',1,'{$img}','{$name}','{$surname}')";
        $stm= $this->sql->prepare($query);
        $stm->execute();
    }
    //esborrar usuari
    public function delete($id){
        $query="delete from users where id={$id};";
        $stm = $this->sql->prepare($query);
        $stm->execute();
    }

    //listat per al dashboard d'admin
    public function list(){
        $query="select id, name, username, email, role, creation_date from users;";
        $users=[];
        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $user){
            $users[$user["id"]]=$user;
        }
        return $users;
    }


    //funcio que utiliza l'usuari normal per editar el seu perfil i les seves dades
    public function edit($name,$email,$img,$password,$id){
        $pass=password_hash($password,PASSWORD_BCRYPT);
        $query="update users set name={$name},password={$pass},img={$img},email={$email} where id={$id};";
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
        $query = "select id, username, password, role, img from users where username = '{$username}'";
        $stm = $this->sql->prepare($query);
        $stm->execute();
        $result = $stm->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    
}