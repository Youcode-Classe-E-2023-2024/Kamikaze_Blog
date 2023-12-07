<?php

Class Publication {
    private $db;

    public function __construct(){
      $this->db = new Database;
    
    }
    // public function addpub($data) {
      
    //     $this->db->query("
    //     INSERT INTO `publication`( `title`, `description`, `imgUrl`, `prix`,  `category_Id`, `userId`)
    //                         VALUES (:name,:desc,:image,:prix,:category,:userId)
    // ");

    // $this->db->bind(':name', $data['name']);
    // $this->db->bind(':image', $data['image']);
    // $this->db->bind(':desc', $data['desc']);
    // $this->db->bind(':prix', $data['prix']);
    // $this->db->bind(':category',$data['category']);
    // $this->db->bind(':userId', 1);

    // $this->db->execute();
    // }
    // public function countPublications(){
    //     $this->db->query('SELECT id FROM publication ');
    //     if($this->db->execute()){
    //        return $this->db->rowCount();
    //     }else{
    //         die("Error in countPublications");
    //     }

    // }
    
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
}