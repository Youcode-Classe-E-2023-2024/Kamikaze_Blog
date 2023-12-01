<?php
  class Pages extends Controller {
    public function __construct(){
     
      
    }
    
    public function index(){
      echo "Go to : http://localhost/Kamikaze_Blog/pages/auth";
    }
    public function auth(){
      // die("auth");
     $this->view('pages/auth');
      
    }
    
   
    
  }
  ?>