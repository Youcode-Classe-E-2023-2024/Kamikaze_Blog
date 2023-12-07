<?php

Class Publications extends Controller{
    private $publicationModel ;
    public function __construct(){
        $this->publicationModel = $this->model('Publication');
    }

    public function index(){
        echo "all the pub";
    }

    
    public function filter($category, $city) {
        switch (true) {
                case ($category == null && $city == null):  
                    $pub= $this->publicationModel->allPublications();
                    echo json_encode($pub);
                break;
    
                case ($category != 'all' && $city == 'all'):
                    // die('hello');
                    $cat= $this->publicationModel->filterCategory($category);
                    echo json_encode($cat);
                break;
    
                case ($category == 'all' && $city != 'all'):
                    $cit= $this->publicationModel->filterCity($city);
                    echo json_encode($cit);
                break;
    
                case ($category != 'all' && $city != 'all'):
                   
                    $filterAll= $this->publicationModel->filterCategoryCity($category , $city);
                    echo json_encode($filterAll);
                break;
    
            default:
            $pub= $this->publicationModel->allPublications();
            echo json_encode($pub);
        }
    }
    
   

   
}