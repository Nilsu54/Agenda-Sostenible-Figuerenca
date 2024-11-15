<?php

class Comments
{
    private PDO $sql;

    public function __construct(PDO $sql)
    {
        $this->sql = $sql;
    }

    public function add($text,$idEvent,$idUser){
        $query="insert into comments (content,state,id_event,id_user) values ('{$text}','pending',{$idEvent},{$idUser})";
        $stm=$this->sql->prepare($query);
        $stm->execute();
    }

    public function changeState($id){
        $query="update comments set state='accepted where id={$id}";
        $stm=$this->sql->prepare($query);
        $stm->execute();
    }

    public function list()
    {
        // SQL query to fetch users with basic information.
        $query = "select* from comments;";
        $comments = [];
        
        // Execute the query and iterate through the results.
        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $comment) {
            // Save users in an associative array where the key is the user's ID.
            $comments[$comment["id"]] = $comment;
        }
        
        // Return the list of users.
        return $comments;
    }

    public function listEvent($idEvent){
         // SQL query to fetch comments with basic information.
         $query = "select* from comments where id_event={$idEvent} and state like 'accepted';";
         $comments = [];
         
         // Execute the query and iterate through the results.
         foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $comment) {
             // Save users in an associative array where the key is the user's ID.
             $comments[$comment["id"]] = $comment;
         }
         
         // Return the list of users.
         return $comments;
    }
}