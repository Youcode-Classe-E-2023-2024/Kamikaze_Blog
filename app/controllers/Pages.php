<?php
  class Pages extends Controller {
    private $userModel ;
    public function __construct(){
      $this->userModel = $this->model('User');
      
    }
    
    public function index(){
      
     
      $this->view('pages/index');
      

    }
    public function auth(){
      // die("auth");
     $this->view('pages/auth');
      
    }

    public function activate($token){
      $userIsExist = $this->userModel->searchUserByToken($token);
      if($userIsExist){
        $confirmUser = $this->userModel->updateConfirmationToken($token);
        if($confirmUser){
          redirect('pages/auth');
        } 
      }else{
        redirect('/');
      }
    }
    
   
    
  }
  ?>