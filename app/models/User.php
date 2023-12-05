<?php
  class user {
    private $db;

    public function __construct(){
      $this->db = new Database;
    
    }

  // Regsiter user
  public function register($data){
    
    

    // Rest of the registration logic
    $this->db->query('INSERT INTO users (fullname, city, email, password, confirmation_token,  imgUrl, roleId) VALUES(:fullname, :city, :email, :password, :confirmation_token , :imgUrl, :roleId)');

    // Bind values
    $this->db->bind(':fullname', $data['fullname']);
    $this->db->bind(':city', $data['city']);
    $this->db->bind(':email', $data['email']);
    $this->db->bind(':password', $data['password']);
    $this->db->bind(':imgUrl', 'img.png');
    $this->db->bind('confirmation_token', $data['token']);
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

  public function login($email, $password){
    $this->db->query('SELECT * FROM users WHERE email = :email and is_confirmed = 1');
    $this->db->bind(':email', $email);

    $row = $this->db->single();
    //check if user is confirmed
    if($row){
     
      $hashed_password = $row->password;
      if(password_verify($password, $hashed_password)){
        return $row;
      } else {
        return false;
      }
    }else{
      return false;
    }
    
  }

  public function searchUserByToken($token) {
    $this->db->query('SELECT * FROM users WHERE confirmation_token = :token');
    $this->db->bind(':token', $token);

    $row = $this->db->single();

    return ($row) ? true : false;

  }
  public function updateConfirmationToken($token){
    $this->db->query('UPDATE users SET is_confirmed = 1 WHERE confirmation_token = :token ;');
    $this->db->bind(':token', $token);

    if($this->db->execute()){
      return true;
    } else {
        return false;
    }

  }

  public function getRolePermissions($roleId){
    $this->db->query('SELECT permissions.name FROM permissions_role , permissions WHERE role_id = :roleId AND permissions.id = permissions_role.permission_id');
    $this->db->bind(':roleId', $roleId);
    if($this->db->execute()){
      return $this->db->resultSet();
    }else{
      die("error in exc getRolePermissions");
    }
  }

  public function countUsers(){
    $this->db->query('SELECT id FROM users where roleId = 2 ');
    if($this->db->execute()){
       return $this->db->rowCount();
    }else{
        die("Error in countPublications");
    }


  }

  public function getManagers(){
    $this->db->query('SELECT id , fullName , email from users where roleId =1 OR roleId = 3  ');
    //1 admin role , 3 moderators role 
    
    if($this->db->execute()){
      $managers = $this->db->resultSet();
    }else{
      die("Error in getManagers");
    }
    return $managers;

  }

  public function getUsers(){
    $this->db->query('SELECT id , fullName , email from users  where roleId =2 ');
    // 2 client role 
    if($this->db->execute()){
      $users = $this->db->resultSet();
    }else{
      die("Error in getusers");
    }
    return $users;
  }

}
