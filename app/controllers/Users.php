<?php
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
  class Users extends Controller {
    private $userModel;
    public function __construct(){
      

      $this->userModel = $this->model('User');
      
    }
    public function index(){
      $data['display'] = 'login';
      $this->view('users/auth' , $data);
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
          $data['token'] = $this->generateToken();
         
          // Register User
          if($this->userModel->register($data)){
            $activationLink = URLROOT . "/users/activate/" . $data['token'];
            $to = $data['email'];
            
            $subject = "Account activation";
            $message = "Click the following link to activate your account: $activationLink";

            $mail = new PHPMailer(true);

              try {
                  $mail->isSMTP();
                  $mail->Host = 'smtp.gmail.com';
                  $mail->Port = 587;
                  $mail->SMTPSecure = 'tls';
                  $mail->SMTPAuth = true;
                  $mail->Username = 'alahcen2000@gmail.com';
                  $mail->Password = 'uyll kafu cmzt omyl'; 

                  $mail->setFrom('alahcen2000@gmail.com', 'Zakariae Ait Lahcen');
                  $mail->addAddress($to);

                  $mail->isHTML(true);
                  $mail->Subject = $subject;
                  $mail->Body = $message;

                  $mail->send();
                  
              } catch (Exception $e) {
                  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                  $data['error1'] = $mail->ErrorInfo;
                  // die($mail->ErrorInfo);
              }
              $data['registered'] = '*Registration complete. Please check your email, then visit the login page.';  
              $data['display'] = 'login';
              $this->view('users/auth', $data);
          } else {
            // die('Something went wrong');
            echo "err" . $data['error'];
            die('inside upld 3');
          }
          
          
         
        }else{
          $data['display'] = 'register';
          $this->view('users/auth', $data);
        }
    
      }else{
        $data['display'] = 'register';
        $this->view('users/auth', $data);
      }
     
      }

    
      public function login(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
          $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        // Init data
          $data =[
            'email' => trim($_POST['email']),
            'password' => trim($_POST['password']),
            'email_err' => '',
            'password_err' => '',      
          ];

          // Validate Email
          if(empty($data['email'])){
            $data['email_err'] = 'Pleae enter email';
          }

          // Validate Password
          if(empty($data['password'])){
            $data['password_err'] = 'Please enter password';
          }
          if(empty($data['email_err']) && empty($data['password_err'])){
            if($this->userModel->findUserByEmail($data['email'])){
              $loggedInUser = $this->userModel->login($data['email'], $data['password']);
              if($loggedInUser){
                $this->createUserSession($loggedInUser);
              } else {
                // User Password incorrect
                $data['password_err'] = 'Password not correct';
                $data['display'] = 'login';
                $this->view('users/auth', $data);
              }
            } else {
              // User not found
              $data['email_err'] = 'No user found';
              $data['display'] = 'login';
              $this->view('users/auth', $data);
            }
          }else{
            $data['display'] = 'login';
            $this->view('users/auth', $data);
          }
        }else{
          $data['display'] = 'login';
          $this->view('users/auth', $data);
        }
        
      }
      function generateToken($length = 32)
      {
          return bin2hex(random_bytes($length));
      }

      public function createUserSession($user){
        
        $_SESSION['user_id'] = $user->id;
        $_SESSION['fullName'] = $user->fullName;
        $_SESSION['email'] = $user->email;
        $_SESSION['roleId'] = $user->roleId;
        if($_SESSION['roleId'] === 1){
          redirect('admin');
        }else{
          redirect('');
        }
      }
      public function logout(){
        unset($_SESSION['user_id']);
        unset($_SESSION['fullName']);
        unset($_SESSION['email']);
        unset($_SESSION['roleId']);
        session_destroy();
        redirect('');
      }
      public function activate($token){
        $userIsExist = $this->userModel->searchUserByToken($token);
        if($userIsExist){
          $confirmUser = $this->userModel->updateConfirmationToken($token);
          if($confirmUser){
            $data['display'] = 'login';
            $this->view('users/auth' , $data);
          } 
        }else{
          redirect('/');
        }
      }

      public function hasPermission($roleId, $permission){
        
        $rolePermissions = $this->userModel->getRolePermissions($roleId);

        $permissionExists = false;
        foreach ($rolePermissions as $perm) {
            if ($perm->name === $permission) {
                $permissionExists = true;
                break;
            }
        }
        
        if($permissionExists){
          // echo "has permission";
          return true;
        }else{
          // echo "has not permission";
          return false;
        }
        // var_dump($rolePermissions);
      }
  }

    