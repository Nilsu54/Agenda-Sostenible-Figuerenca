<?php

class ProjectContainer extends \Emeset\Container {

    public function __construct($config){
        $this->sql = new Db($config);
        $this->config = $config;
    }
    public function UserPDO(){
        return new UserPDO($this->sql->get());
    }
    
};

    
<<<<<<< HEAD
<<<<<<< HEAD
=======

?>
>>>>>>> eb21c731d84772d2a01891bf41f393d95e55f950
=======

?>
>>>>>>> eb21c731d84772d2a01891bf41f393d95e55f950
