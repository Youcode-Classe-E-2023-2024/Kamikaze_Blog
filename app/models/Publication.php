<?php

Class Publication {
    private $db;

    public function __construct(){
      $this->db = new Database;
    
    }
   
    
  public function addpub($data)
  {
      $this->db->query("
          INSERT INTO `publication`( `title`, `description`, `imgUrl`, `prix`,  `category_Id`, `cityId`, `userId`)
          VALUES (:name,:desc,:image,:prix,:category,:cityId , :userId)
      ");

      $this->db->bind(':name', $data['name']);
      $this->db->bind(':image', $data['image']);
      $this->db->bind(':desc', $data['desc']);
      $this->db->bind(':prix', $data['prix']);
      $this->db->bind(':cityId', $data['city']);
      $this->db->bind(':category', $data['category']);
      $this->db->bind(':userId', $_SESSION['user_id']);

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
     ");
      
      $result = $this->db->resultSet();
      
      return $result;
   }
    


  

    public function get_publicatin_byId($id){

     $this->db->query("SELECT publication.title , category.name as category_name , publication.prix , publication.description, publication.imgUrl, publication.created_at, publication.category_Id, users.fullName, category.name, city.name
     FROM publication, users, category , city
     WHERE   publication.category_Id = category.id AND publication.cityId = city.id 
     AND publication.userId = users.id AND publication.id = :id  ;");
      
     $this->db->bind('id' , $id);
     $publication = $this->db->single();
      
     return $publication;
    }

    public function get_publication_category($category_Id , $id){
        $this->db->query("SELECT * FROM publication WHERE category_Id =:category_Id AND id <> :id");
        $this->db->bind('category_Id' , $category_Id);
        $this->db->bind('id' , $id);
        $publication_category = $this->db->resultSet();
        return $publication_category;
    }

    public function getCities() {
        // Query
        $this->db->query("SELECT DISTINCT * FROM city");
    
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
        $this->db->query("SELECT * FROM publication WHERE cityId = :city ");
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
        $this->db->query("SELECT * FROM publication WHERE cityId = :city AND category_Id = :category");
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