<?php
  class Users extends Controller {
    private $userModel;
    public function __construct(){
      

      $this->userModel = $this->model('User');
      
    }

    public function register(){
      $data = [];
      // Check for POST
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        // Init data
        $data =[
          
          'fullname' => trim($_POST['fullname']),
          'email' => trim($_POST['email']),
          'password' => trim($_POST['password']),
          'confirm_password' => trim($_POST['confirm_password']),
          'city'=> trim($_POST['city']),
          'fullname_err' => '',
          'email_err' => '',
          'password_err' => '',
          'confirm_password_err' => '',
          'city_err'=>''
        ];
        
        // Validate Email
        if(empty($data['email'])){
          $data['email_err'] = 'Pleae enter email';
        } else {
          // Check email
          if($this->userModel->findUserByEmail($data['email'])){
            $data['email_err'] = 'Email is already taken';
          }
        }

        // Validate fullname
        if(empty($data['fullname'])){
          $data['fullname_err'] = 'Please enter name';
        }

        // Validate city
        if(empty($data['city'])){
          $data['city_err'] = 'Please enter ur city';
        }

        // Validate Password
        if(empty($data['password'])){
          $data['password_err'] = 'Please enter password';
        } elseif(strlen($data['password']) < 6){
          $data['password_err'] = 'Password must be at least 6 characters';
        }

        // Validate Confirm Password
        if(empty($data['confirm_password'])){
          $data['confirm_password_err'] = 'Please confirm password';
        } else {
          if($data['password'] != $data['confirm_password']){
            $data['confirm_password_err'] = 'Passwords do not match';
          }
        }
        
        // Make sure errors are empty
        if(empty($data['email_err']) && empty($data['fullname_err']) && empty($data['city_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])){
          // Validated
          // die('before upld');
          // Hash Password
          $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
          
          // Register User
          if($this->userModel->register($data)){
            // die('inside upld 2');
            $this->view('pages/auth', $data);
          } else {
            // die('Something went wrong');
            echo "err" . $data['error'];
            // die('inside upld 3');
          }
        }
    
      }
      
      $this->view('pages/auth', $data);
        
      }
    
  }

    