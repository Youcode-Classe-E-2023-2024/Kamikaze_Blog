<?php

Class Admin extends Controller {

    public function __construct(){
        if(!userIsLoggedIn()){
            redirect('users/login');
        }
    }

    public function index(){
        return $this->view('admin/index');
    }
}