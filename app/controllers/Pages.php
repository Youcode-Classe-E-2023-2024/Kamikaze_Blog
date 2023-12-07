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
      // var_dump($publication_result);
      $data = [
        'publication' => $publication_result,
      ];
      // var_dump($data);
       $this->view('pages/details', $data);
    
    }


    public function categories(){
    
      $this->view('pages/categories');

    }

    
    
   
    
  }
  ?>