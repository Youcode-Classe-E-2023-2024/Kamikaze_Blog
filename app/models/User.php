<?php
  class user {
    private $db;

    public function __construct(){
      $this->db = new Database;
    
    }

  // Regsiter user
  public function register($data){
    
    

    // Rest of the registration logic
    $this->db->query('INSERT INTO users (fullname, city, email, password, imgUrl, roleId) VALUES(:fullname, :city, :email, :password, :imgUrl, :roleId)');

    // Bind values
    $this->db->bind(':fullname', $data['fullname']);
    $this->db->bind(':city', $data['city']);
    $this->db->bind(':email', $data['email']);
    $this->db->bind(':password', $data['password']);
    $this->db->bind(':imgUrl', 'img.png');
    $this->db->bind(':roleId', 2);

    // Execute
    if($this->db->execute()){
        return true;
    } else {
        return false;
    }
}

  public function findUserByEmail($email) {
    $this->db->query('SELECT * FROM users WHERE email = :email');
    $this->db->bind(':email', $email);

    $row = $this->db->single();

    return ($row) ? true : false;
  }
  }
