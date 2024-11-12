<?php

class Events
{
    private PDO $sql;

    public function __construct(PDO $sql)
    {
        $this->sql = $sql;
    }
    public function add($title,$latitude){
        $query= "insert into events (title,latitude) values ('{$title}','{$latitude}');";
        // print_r($query);
        // die();
        $stm = $this->sql->prepare($query);
        $stm->execute();
        
    }

    // public function add($title,){
    //     $query= "insert into events (title)values ('{$title}')";
    //     $stm = $this->sql->prepare($query);
    //     $stm->execute();
        
    // }

     //listat per al dashboard d'admin
     public function list(){
        $query="select * from events;";
        $events=[];
        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $event){
            $events[$event["id"]]=$event;
        }
        return $events;
    }

}