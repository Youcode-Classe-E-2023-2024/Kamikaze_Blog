<?php
  class Pages extends Controller {
    private $userModel ;
    private $aboutModel;
    public function __construct(){
      $this->userModel = $this->model('User');
      $this->aboutModel = $this->model('About');
      
      
    }
    
    public function index(){
      
     
      $this->view('pages/index');
      

    }

    public function details(){
      $this->view('pages/details');
    }


    public function categories(){
    
      $this->view('pages/categories');

    }
    public function about(){

      $about_data = $this->aboutModel->cmnt_about();
      $data = [
        'about'=> $about_data
      ];
     
    return  $this->view('pages/aboutus',$data);


    } 
  }
  ?>