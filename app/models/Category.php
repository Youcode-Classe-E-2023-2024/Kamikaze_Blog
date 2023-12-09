<?php 
class Category{
    private $db;

    public function __construct(){
      $this->db = new Database;
    
    }
    public function getCategory(){
        
        $this->db->query('SELECT * FROM category ');
        if($this->db->execute()){
           return $this->db->resultSet();
        }else{
            die("Error in countPublications");
        }

    

    }
}