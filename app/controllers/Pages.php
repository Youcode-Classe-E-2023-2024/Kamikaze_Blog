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




    public function details($id){
      $publication_result = $this->PublicationModel->get_publicatin_byId($id);
      
      $data = [
        'publication' => $publication_result,
      ];
      // var_dump($data);
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
      
     
      $this->view('pages/aboutus');
      

    }


    
    
  }
  ?>