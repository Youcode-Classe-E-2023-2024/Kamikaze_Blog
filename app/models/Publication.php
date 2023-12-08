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

    public function get_publicatin_byId($id){
     $this->db->query("SELECT publication.title , publication.prix , publication.description, publication.imgUrl, publication.created_at, publication.category_Id, users.fullName, category.name, city.name
     FROM publication, users, category , city
     WHERE   publication.category_Id = category.id AND publication.cityId = city.id 
     AND publication.userId = users.id AND publication.id = :id  ;");
     $this->db->bind('id' , $id);
     $publication = $this->db->single();
     return $publication;
    }

    public function get_publication_category($category_Id){
        $this->db->query("SELECT * FROM publication WHERE category_Id =:category_Id");
        $this->db->bind('category_Id' , $category_Id);
        $publication_category = $this->db->resultSet();
        return $publication_category;
    }
}