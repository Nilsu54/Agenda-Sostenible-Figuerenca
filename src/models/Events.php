<?php

class Events
{
    private PDO $sql;

    public function __construct(PDO $sql)
    {
        $this->sql = $sql;
    }
    public function add($title,$latitude,$longitude,$description,$type,$starting_date,$duration,$starging_hour,$rating,$visualization){
        $query= "insert into events (title,latitude,longtiude,event_description,event_type,staring_date,duration,starting_hour,rating,num_visualization)values ('{$title}',{$latitude},{$longitude},'{$description}', '{$starting_date}','{$duration}','{$starging_hour}',$rating,$visualization)";
        $stm= $this->sql->prepare($query);
        $stm->execute();
        
    }

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