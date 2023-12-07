<?php
  class Pages extends Controller {
    private $userModel ;
    public function __construct(){
      $this->userModel = $this->model('User');
      
    }
    
    public function index(){
      
     
      $this->view('pages/index');
      

    }

    public function  contact(){
        $this->view('pages/contact');
    }
    public function add(){
      $this->view('users/addpost');

      }
   


    public function details(){
      $this->view('pages/details');
    }


    public function categories(){
    
      $this->view('pages/categories');

    }
    public function about(){
      
     
      $this->view('pages/aboutus');
      

    }


    
    
   
    
  }
  ?>