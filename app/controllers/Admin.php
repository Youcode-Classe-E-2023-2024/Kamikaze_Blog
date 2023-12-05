<?php

Class Admin extends Controller {
    private $userModel ;
    private $publicationModel ;
    public function __construct(){
        $this->userModel = $this->model('User');
        $this->publicationModel = $this->model('Publication');
        // if(!adminIsLoggedIn()){
        //     redirect('users/login');
        // }
    }

    public function index(){
        $data =[
            'numOfUsers' => $this->userModel->countUsers(),
            'numOfPublications' => $this->publicationModel->countPublications(),
        ];
        return $this->view('admin/index' , $data);
    }

    public function users(){
        return $this->view('admin/users');
    }

    public function add_Moderator(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $data = [
                '$fullName' => trim($_POST['fullName']) ,
                'email' => trim($_POST['email']),
                'city' => trim($_POST['city']) ,
                'fullName_err' => '',
                'email_err' => '',
                'city_err' => '',
                

            ];
            // 
            if(empty($data['fullName'])){
                $data['fullName_err'] = 'Pleae enter the full name';
            }
            if(empty($data['email'])){
                $data['email_err'] = 'Pleae enter the email address';
            }
            if(empty($data['city'])){
            $data['city_err'] = 'Pleae enter the city';
            }
            if($_FILES['moderator_Img'] === null){
                $data['img_err'] = 'Pleae enter the photo';
            }

            if(empty($data['fullName_err']) && empty($data['email_err']) && empty($data['city_err']) && $data['img_err'] ){
                // if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {

                // }else{
                //     $data['image_err'] = 'File upload error.';
                // }
            }else{
                $this->view('admin/moderator', $data);
            }
            
            
        }else{
            return $this->view('admin/moderator');
        }
    }

    public function allManagers(){
        $managers = $this->userModel->getManagers();
        echo json_encode($managers);
        
    }

    public function allUsers(){
        $users = $this->userModel->getUsers();
        echo json_encode($users);
    }

    private function uploadImage($file) {
        $target_dir = APPROOT . "/../public/img/users";
        $target_file = $target_dir . basename($file["name"]);
    
        // Ensure the directory exists, create it if not
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0755, true);
        }
    
        move_uploaded_file($file["tmp_name"], $target_file);
        return basename($file["name"]);
      }

    
}