<?php
  class Pages extends Controller {
    private $userModel ;
    private $publicationModel;
    private $aboutModel;
    
    public function __construct(){
      
      $this->userModel = $this->model('User');
      $this->aboutModel = $this->model('About');
      $this->publicationModel = $this->model('Publication');
     
    }
    
    public function index(){
      
     $Publication = $this->publicationModel->homepub();
     $data=[
      'pub' => $Publication,
     ];
      $this->view('pages/index', $data);
      

    }




    public function details($id){
      $publication_result = $this->publicationModel->get_publicatin_byId($id);
      
      $data = [
        'publication' => $publication_result,
      ];
   
       $this->view('pages/details', $data);
    }
    
    
    public function  contact(){
        $this->view('pages/contact');
    }
    
    
    public function add(){
      $this->view('users/addpost');

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