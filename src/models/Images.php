<?php
/***
 * id int primary key AUTO_INCREMENT,
    url VARCHAR(255),
    id_event int,
    id_ad int,
 * 
 * 
 */
class Images
{
    private PDO $sql;

    public function __construct(PDO $sql)
    {
        $this->sql = $sql;
    }

    public function add($id,$files){
        $directory="img/eventImages/";
        // print_r($files["tmp_name"][0]);
        // die();
        foreach($files["tmp_name"] as $k=>$file){
            // print_r($file);
            // print_r("--");  
            // print_r($k);  
            // print_r($file);
            // die();
            if ($files['error'][$k] === UPLOAD_ERR_OK) {

                $img=$directory.$files["name"][$k];
                $query= "insert into images (url,id_event) values ('{$img}',{$id})";
                move_uploaded_file($file,$img);
                $stm = $this->sql->prepare($query);
                $stm->execute();
            } else{
                echo "Error";
            }
    
        }
    }

}