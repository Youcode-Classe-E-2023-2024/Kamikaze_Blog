<?php
  class Pages extends Controller {
    public function __construct(){
     
      
    }
    
    public function index(){
      
     
    echo 'test';
    }
    public function auth(){
      // die("auth");
     $this->view('pages/auth');
      
    }
    
   
    
  }
  ?>