<?php
  class Pages extends Controller {
    private $userModel;
    private $publicationModel;
    private $aboutModel;

    public function __construct(){

      $this->userModel = $this->model('User');
      $this->aboutModel = $this->model('about');
      $this->publicationModel = $this->model('Publication');
    }

    public function index(){

     $Publication = $this->publicationModel->homepub();
     $data=[
      'pub' => $Publication,
     ];
      $this->view('pages/index', $data);


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




    public function details($id){


      $publication_result = $this->publicationModel->get_publicatin_byId($id);

      $category_Id = $publication_result->category_Id;

      $result_publication_category = $this->publicationModel->get_publication_category($category_Id , $id);



      $data = [
        'publication' => $publication_result,
        'publication_category' => $result_publication_category,
      ];

      $this->view('pages/details', $data);

    }



    public function allCities(){
     $cities = $this->publicationModel->getCities();

      return $cities;
    }
    public function allCategories(){
       $categories = $this->publicationModel->getCategories();

        return $categories;
    }




    public function  contact(){
        $this->view('pages/contact');
    }


    public function add(){
        $categories = $this->allCategories();
        $cities = $this->publicationModel->getCities();
        $data =[
           'category'=>$categories,
            'cities' =>$cities,
        ];
      $this->view('users/addpost' , $data);

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