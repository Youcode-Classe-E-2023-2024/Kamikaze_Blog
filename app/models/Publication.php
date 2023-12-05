<?php

Class Publication {
    private $db;

    public function __construct(){
      $this->db = new Database;
    
    }

    public function countPublications(){
        $this->db->query('SELECT id FROM publication ');
        if($this->db->execute()){
           return $this->db->rowCount();
        }else{
            die("Error in countPublications");
        }


    }
}