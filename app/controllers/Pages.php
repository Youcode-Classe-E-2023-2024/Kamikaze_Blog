<?php
  class Pages extends Controller {
    private $userModel ;
    private $publicationModel ;
    public function __construct(){
      $this->userModel = $this->model('User');
      $this->publicationModel = $this->model('Publication');
    }
    
    public function index(){
      
     
      $this->view('pages/index');
      

    }
    public function categories(){
      $cities = $this->allCities();
      $categories = $this->allCategories();
     

      
      $data =[
        'categories' => $categories, 
        'cities'=>$cities, 
      ];
      $this->view('pages/categories' , $data);

    }

    public function allCities(){
      return $cities = $this->publicationModel->getCities();
     
      return $cities;
    }
    public function allCategories(){
       $categories = $this->publicationModel->getCategories();
 
        return $categories;
    }



  }
  ?>