<?php
  class Pages extends Controller {
    private $userModel ;
    private $publicationModel;
    public function __construct(){
      $this->userModel = $this->model('User');
      $this->publicationModel = $this->model('Publication');
      
    }
    
    public function index(){
      
     $Publication = $this->publicationModel->homepub();
     $data=[
      'pub' => $Publication
     ];
      $this->view('pages/index', $data);
      

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