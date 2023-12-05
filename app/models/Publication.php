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
    public function getCities() {
        // Query
        $this->db->query("SELECT DISTINCT city FROM publication");
    
        if($this->db->execute()){
            $cities = $this->db->resultSet();
        }else{
            die("eror n getcitir");
        }

        return $cities;
    }

    public function getCategories() {
        // Query
        $this->db->query("SELECT DISTINCT name FROM category");
    
        if($this->db->execute()){
            $categories = $this->db->resultSet();
        }else{
            die("eror n get");
        }

        return $categories;
    }
}