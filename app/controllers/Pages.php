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

      $publication_result = $this->PublicationModel->get_publicatin_byId($id);
      $category_Id = $publication_result->category_Id;
      
      $result_publication_category = $this->PublicationModel->get_publication_category($category_Id);
      
      $data = [
        'publication' => $publication_result,
        'publication_category' => $result_publication_category,
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