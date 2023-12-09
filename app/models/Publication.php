<?php

Class Publication {
    private $db;

    public function __construct(){
      $this->db = new Database;
    
    }
   
    
  public function addpub($data)
  {
      $this->db->query("
          INSERT INTO `publication`( `title`, `description`, `imgUrl`, `prix`,  `category_Id`, `userId`)
          VALUES (:name,:desc,:image,:prix,:category,:userId)
      ");

      $this->db->bind(':name', $data['name']);
      $this->db->bind(':image', $data['image']);
      $this->db->bind(':desc', $data['desc']);
      $this->db->bind(':prix', $data['prix']);
      $this->db->bind(':category', $data['category']);
      $this->db->bind(':userId', 1);

      $this->db->execute();
  }

  public function countPublications()
  {
      $this->db->query('SELECT id FROM publication ');
      if ($this->db->execute()) {
          return $this->db->rowCount();
      } else {
          die("Error in countPublications");
      }
  }
    public function homepub(){
        
      $this->db->query("SELECT *
      FROM `publication`
      ORDER BY `created_at` DESC
      LIMIT 4");
      
      $result = $this->db->resultSet();
      
      return $result;
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