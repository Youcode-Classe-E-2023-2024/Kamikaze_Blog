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
        $this->db->query("SELECT DISTINCT * FROM category");
    
        if($this->db->execute()){
            $categories = $this->db->resultSet();
        }else{
            die("eror n get");
        }

        return $categories;
    }

    public function allPublications() {
        $this->db->query("SELECT * FROM publication ");
        if($this->db->execute()){
            $allPublications = $this->db->resultSet();
        }
        else{
            die("error");
        }
        return $allPublications;
    }

    public function filterCategory($category ) {
        // die($category);
        $this->db->query("SELECT * FROM publication WHERE category_Id = :category ");
        $this->db->bind(':category', $category);
        if($this->db->execute()){
            $filterCategory = $this->db->resultSet();
        }
        else{
            die("error");
        }
        return $filterCategory;
    }

    public function filterCity($city ) {
        $this->db->query("SELECT * FROM publication WHERE city_Id = :city ");
        $this->db->bind(':city', $city);
        if($this->db->execute()){
            $filterCity = $this->db->resultSet();
        }
        else{
            die("error");
        }
        return $filterCity;
    }

    public function filterCategoryCity($category, $city) {
        $this->db->query("SELECT * FROM publication WHERE city_Id = :city AND category_Id = :category");
        $this->db->bind(':category', $category);
        $this->db->bind(':city', $city);
    
        if ($this->db->execute()) {
            $filterResults = $this->db->resultSet();
        } else {
            die("Erreur lors de l'exécution de la requête SQL");
        }
    
        return $filterResults;
    }
    

}