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
    $this->db->bind(':roleId', 3);//role id for client

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
    $this->db->query('SELECT * FROM users WHERE email = :email and is_confirmed = 1 and is_deleted <>1');
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

  public function getRolePermissions($userId , $module){
    $this->db->query('SELECT p.name FROM users u JOIN permissions_role rp
     ON u.roleId = rp.role_id JOIN permissions p ON rp.permission_id = p.id WHERE u.id = :userId and p.module = :module');
    $this->db->bind(':userId', $userId);
    $this->db->bind(':module', $module);
    if($this->db->execute()){
      return $this->db->rowCount() >0 ? true : false;
    }else{
      die("error in exc getRolePermissions");
    }
  }

  public function getManagerPermissions(){
        $this->db->query('SELECT distinct permissions.id , permissions.name , permissions.module from users, permissions_role , permissions , role where users.roleId = permissions_role.role_id and permissions_role.role_id = role.id and permissions_role.permission_id = permissions.id and role.id =2;');

        return $this->db->resultSet();
  }

  public function deleteModPermission($permissionId){
        $this->db->query('DELETE FROM permissions_role
         WHERE permissions_role.role_id = :roleid
         and permissions_role.permission_id = :permissionid');
        $this->db->bind(':roleid' , 2);
        $this->db->bind(':permissionid' , $permissionId);

        return $this->db->execute() ;
  }
  public function countUsers(){
    $this->db->query('SELECT id FROM users where roleId = 3 ');
    if($this->db->execute()){
       return $this->db->rowCount();
    }else{
        die("Error in countPublications");
    }


  }

  public function getManagers(){
    $this->db->query('SELECT id , fullName , email from users  where roleId =1 OR roleId = 2  ');
  
    
    if($this->db->execute()){
      $managers = $this->db->resultSet();
    }else{
      die("Error in getManagers");
    }
    return $managers;

  }

  public function getModerators(){
    $this->db->query('SELECT users.id as user_id , fullName , users.imgUrl as profile_img  , role.name as role_name from users , role where roleId = 2 AND roleId = role.id  ');
     
    
    if($this->db->execute()){
      $managers = $this->db->resultSet();
    }else{
      die("Error in getManagers");
    }
    return $managers;

  }

  public function getUsers(){
    $this->db->query('SELECT users.id , fullName , email , role.name as role_name  from users , role  where users.roleId  = role.id and is_deleted<>1 ;');
    // 2 client role 
    if($this->db->execute()){
      $users = $this->db->resultSet();
    }else{
      die("Error in getusers");
    }
    return $users;
  }

  public  function getBannedUsers(){
      $this->db->query('SELECT users.id , fullName , email , role.name as role_name  from users , role  where users.roleId  = role.id and is_deleted = 1 ;');
      // 2 client role
      if($this->db->execute()){
          $users = $this->db->resultSet();
      }else{
          die("Error in getBusers");
      }
      return $users;
  }
  public  function getUserRole(){
        $this->db->query('SELECT * FROM role');
        return $this->db->resultSet();
  }


  public function getPermissions(){
      $this->db->query('SELECT * FROM permissions');
      return $this->db->resultSet();
  }
  public function addPermission($data){
    $this->db->query('INSERT INTO `permissions_role` (`role_id`, `permission_id`)
        VALUES (:userRole, :permissionId);');
    $this->db->bind(':userRole' , $data['roleId'] );
      $this->db->bind(':permissionId' ,$data['permissionId']);
      return $this->db->execute();
  }
  public function getUserById($id){
      $this->db->query('SELECT * FROM users WHERE id = :id;');
      $this->db->bind(':id' , $id);
      if($this->db->execute()){
          $user = $this->db->single();
      }else{
          die("Error in getBusers");
      }
      return $user;
  }

  public function addModerator($data){
    $this->db->query('INSERT INTO users (fullName, email, city , password , is_confirmed , imgUrl, roleId) 
    VALUES(:fullName, :email, :city, :password , :is_confirmed, :imgUrl, :roleId)');

    $password = password_hash('123456', PASSWORD_DEFAULT);
    $isConfirmed = 1;
    $roleId = 2;

    $this->db->bind(':fullName', $data['fullName']);
    $this->db->bind(':email' , $data['email']);
    $this->db->bind(':city', $data['city']);
    $this->db->bind(':password' , $password );
    $this->db->bind(':imgUrl', $data['image']);
    $this->db->bind(':is_confirmed' , $isConfirmed);
    $this->db->bind(':roleId', $roleId);

    $this->db->execute() ? true : false;
  }

  public function deleteUser($id){
        $this->db->query("UPDATE users SET is_deleted = 1 WHERE id = :id");
        $this->db->bind(':id', $id);
        $this->db->execute() ? true : false;
  }

  public function returnUser($id){
      $this->db->query("UPDATE users SET is_deleted = 0 WHERE id = :id");
      $this->db->bind(':id', $id);
      $this->db->execute() ? true : false;
  }

}
