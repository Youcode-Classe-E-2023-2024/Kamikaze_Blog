<?php
  class Pages extends Controller {
    private $userModel ;
    private $PublicationModel;
    public function __construct(){
      $this->userModel = $this->model('User');
      $this->PublicationModel = $this->model('Publication');
    }
    
    public function index(){
      
     
      $this->view('pages/index');
      

    }

    public function details($id){
      $publication_result = $this->PublicationModel->get_publicatin_byId($id);
      $category_Id = $publication_result->category_Id;
      
      $result_publication_category = $this->PublicationModel->get_publication_category($category_Id);
      // echo '<pre>';
      // print_r($result_publication_category);
      // echo '<pre>';
      
     
      
      $data = [
        'publication' => $publication_result,
        'publication_category' => $result_publication_category,
      ];
      // echo '<pre>';
      //  print_r($data['publication_category']);
      //  echo '<pre>';
      // var_dump($data);
      $this->view('pages/details', $data);
    
    }


    public function categories(){
    
      $this->view('pages/categories');

    }

    
    
   
    
  }
  ?>