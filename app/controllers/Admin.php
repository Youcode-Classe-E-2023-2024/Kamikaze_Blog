<?php

Class Admin extends Controller {
    private $userModel ;
    private $publicationModel ;
    public function __construct(){
        $this->userModel = $this->model('User');
        $this->publicationModel = $this->model('Publication');
        if(!adminIsLoggedIn()){
            redirect('users/login');
        }
    }

    public function index(){
        $data =[
            'numOfUsers' => $this->userModel->countUsers(),
            'numOfPublications' => $this->publicationModel->countPublications(),
        ];
        return $this->view('admin/index' , $data);
    }
}