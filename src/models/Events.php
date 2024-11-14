<?php

class Events
{
    private PDO $sql;

    public function __construct(PDO $sql)
    {
        $this->sql = $sql;
    }
    // public function add($title,$latitude,$longitude,$description,$type,$starting_date,$duration,$starting_hour){
    //     $query= "insert into events (title,latitude) values ('{$title}',CAST('{$latitude}' as DECIMAL(10,8));";
    //     $stm = $this->sql->prepare($query);
    //     $stm->execute();
        
    // }
    public function add($title,$latitude,$longitude,$description,$type,$starting_date,$starting_hour,$duration){
        $query= "insert into events (title,latitude,longitude,event_description,event_type,starting_date,starting_hour,duration,num_visualization) 
        values ('{$title}','{$latitude}','{$longitude}', '{$description}','{$type}','{$starting_date}','{$starting_hour}','{$duration}',0);";
        $stm = $this->sql->prepare($query);
        $stm->execute();
        $lastInsertId = $this->sql->lastInsertId(); // para conseguir el id
        return $lastInsertId;
        
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

    public function listIndex(){
        $query="select * from events order by starting_date asc;";
        $events=[];
        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $event){
            $events[$event["id"]]=$event;
        }
        return $events;
    }

    public function edit($id,$title,$starting_date,$starting_hour,$duration,$description){
        $query= "update events set title='{$title}, starting_date='{$starting_date}',starting_hour='{$starting_hour}',duration='{$duration}',description='{$description} where id={$id}';";
        $stm= $this ->sql->prepare($query);
        $stm->execute();
    }

    //function to delete event given the id
    public function delete($id){
    
        $query="delete from events where id={$id}";
        $stm = $this->sql->prepare($query);
        $stm->execute();

    }

}