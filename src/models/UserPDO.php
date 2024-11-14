<?php

// UserPDO class to handle user operations in the database using PDO.
class UserPDO
{
    // Private property to store the PDO connection.
    private PDO $sql;

    // Constructor that receives the PDO connection to interact with the database.
    public function __construct(PDO $sql)
    {
        $this->sql = $sql;
    }

    // Method to add a new user to the database.
    public function add($username, $password, $email, $img, $name, $surname)
    {
        // SQL query to insert a new user into the 'users' table.
        $query = "insert into users (username, password, email, role, img, name, surname) 
                  values ('{$username}', '{$password}', '{$email}', 1, '{$img}', '{$name}', '{$surname}')";
        
        // Prepare and execute the query.
        $stm = $this->sql->prepare($query);
        $stm->execute();
    }
    public function addAdmin($username, $password, $email, $name, $surname, $role)
    {
        // SQL query to insert a new user into the 'users' table.
        $query = "insert into users (username, password, email, role, name, surname) 
                  values ('{$username}', '{$password}', '{$email}', '{$role}', '{$name}', '{$surname}')";
        
        // Prepare and execute the query.
        $stm = $this->sql->prepare($query);
        $stm->execute();
    }

    // Method to delete a user from the database by their ID.
    public function delete($id)
    {
        // SQL query to delete a user based on their ID.
        $query = "delete from users where id={$id};";
        
        // Prepare and execute the query.
        $stm = $this->sql->prepare($query);
        $stm->execute();
    }

    // Method to get a list of users, used in the admin panel.
    public function list()
    {
        // SQL query to fetch users with basic information.
        $query = "select id, name, username, email, role, creation_date from users;";
        $users = [];
        
        // Execute the query and iterate through the results.
        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $user) {
            // Save users in an associative array where the key is the user's ID.
            $users[$user["id"]] = $user;
        }
        
        // Return the list of users.
        return $users;
    }

    // Method for regular users to edit their profile information.
    public function edit($name, $email, $id, $username, $surname)
    {
        $query = "update users set username='{$username}', name='{$name}', email='{$email}', surname='{$surname}' where id={$id};";
        $stm = $this->sql->prepare($query);
        $stm->execute();
    }

    // Method to update a user's profile image.
    public function editimg($img, $id)
    {
        $query = "update users set img='{$img}' where id={$id};";
        $stm = $this->sql->prepare($query);
        $stm->execute();
    }

    // Method for the admin to edit user information, allowing role change for adding new admins if needed.
    public function editAdmin($name, $password, $role, $email, $id)
    {
        $pass = password_hash($password, PASSWORD_BCRYPT);  
        $query = "update users set name='{$name}', password='{$pass}', role='{$role}', email='{$email}' where id={$id};";
        $stm = $this->sql->prepare($query);
        $stm->execute();
    }

    // Method to retrieve a user's information based on their username.
    public function getUser($username)
    {
        $query = "select id, username, password, role, img, name, surname, email from users where username = '{$username}'";
        $stm = $this->sql->prepare($query);
        $stm->execute();
        
        // Fetch the result as an associative array.
        $result = $stm->fetch(PDO::FETCH_ASSOC);
        
        // Return the result.
        return $result;
    }
}
