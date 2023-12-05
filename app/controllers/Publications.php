<?php

Class Publications extends Controller{
    public function __construct(){

    }

    public function index(){
        echo "all the pub";
    }

    
    public function filter($category=null , $city=null){
        switch (true) {
            case ($category == null && $city == null):
                echo 'Displaying all publications' ;
                break;
    
            case ($category != 'all' && $city == 'all'):
                echo "Filtering by category: $category";
                break;
    
            case ($category == 'all' && $city != 'all'):
                echo "Filtering by city: $city";
                break;
    
            case ($category != 'all' && $city != 'all'):
                echo "Filtering by category: $category and city: $city";
                break;
    
            default:
                echo 'Displaying all publications';
        }
        
    
    }   
}