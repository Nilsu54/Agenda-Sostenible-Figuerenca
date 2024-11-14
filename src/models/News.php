<?php
class News{
    private PDO $sql;

    // Constructor that receives the PDO connection to interact with the database.
    public function __construct(PDO $sql)
    {
        $this->sql = $sql;
    }
    public function createAnunci($titol, $descripcio, $categoria){
        $query = "insert into advertisements (title, description, state, category) 
        values ('{$titol}', '{$descripcio}', 'pending', '{$categoria}')";
        $stm = $this->sql->prepare($query);
        $stm->execute();
    }
}
?>