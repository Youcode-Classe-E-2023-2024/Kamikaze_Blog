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
        $data;
        return $this->view('admin/index' , $data);
    }

    public function users(){
        $hasPermission = $this->userModel->getRolePermissions($_SESSION['user_id'] ,'user');

        $data = [
            'hasPermission'=>$hasPermission,

        ];
        return $this->view('admin/users' , $data);
    }

    public function deleteUser(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if($this->userModel->deleteUser($_POST['userId'])){
                redirect('admin/users');
            }else{
                redirect('admin/users');
            }
        }
    }

    public function returnUser(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            if($this->userModel->returnUser($_POST['userid'])){
                redirect('admin/users');
            }else{
                redirect('admin/users');
            }
        }
    }

    public function add_Moderator(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $data = [
                'fullName' => trim($_POST['fullName']) ,
                'email' => trim($_POST['email']),
                'city' => trim($_POST['city']) ,
                'fullName_err' => '',
                'email_err' => '',
                'city_err' => '',
                

            ];
            // 
            if(empty($data['fullName'])){
                $data['fullName_err'] = 'Please enter the full name';
            }
            if(empty($data['email'])){
                $data['email_err'] = 'Please enter the email address';
            }
            if(empty($data['city'])){
            $data['city_err'] = 'Please enter the city';
            }
            if($_FILES['moderator_Img']['size'] == 0){
                $data['img_err'] = 'Please enter the photo';
            }
            
            if(empty($data['fullName_err']) && empty($data['email_err']) && empty($data['city_err']) && empty($data['img_err']) ){
                if (isset($_FILES['moderator_Img']) && $_FILES['moderator_Img']['error'] === UPLOAD_ERR_OK) {
                    if($this->uploadImage($_FILES['moderator_Img'])){
                        $data['image'] = $_FILES['moderator_Img']['name'];
                        if($this->userModel->addModerator($data)){
                            redirect('admin/');
                        }else{
                            $this->view('admin/moderator');
                            
                        }
                       
                    }else{
                        // $data['img_err'] = 'Invalid file type. Please upload a JPEG, PNG, or GIF image.';
                        echo "error uploading image";
                    }
                }else{
                    die("Error uploading image 1"); 
                    
                }
            }else{
                $this->view('admin/moderator', $data);
            }
            
            
        }else{
            return $this->view('admin/moderator');
        }
    }
   
    public function manage_pemissions(){
        $hasPermission = $this->userModel->getRolePermissions($_SESSION['user_id'] ,'user');
        $moderators = $this->userModel->getModerators();

        $data = [
            'moderators' => $moderators,
            'hasPermission'=>$hasPermission,
        ];
        return $this->view('admin/manage_pemissions' , $data);  
    }
    public function edit_permissions(){
        $hasPermission = $this->userModel->getRolePermissions($_SESSION['user_id'] ,'user');
        if(!$hasPermission){
            redirect('admin/manage_pemissions');
        }
        $managerPermissions = $this->userModel->getManagerPermissions();
        $userRole = $this->userModel->getUserRole();
        $permissions = $this->userModel->getPermissions();


        $data = [
            'managerPermissions'=>$managerPermissions,
            'roles'=>$userRole,
            'permissions'=>$permissions,

        ];
        $this->view('admin/edit_permissions' , $data);
    }

    public function addPermission(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $data = [
              'roleId' => $_POST['role'],
                'permissionId'=> $_POST['permission'],

            ];
            if($this->userModel->addPermission($data)){
                redirect('admin/edit_permissions');
            }

        }
    }
    public function deleteModPer($permissionId){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $deleted = $this->userModel->deleteModPermission($permissionId);
            if($deleted){
                echo json_encode(['status' => 'deleted', 'message' => ' delete successfully!']);
            }else{
                echo json_encode(['status' => 'failed', 'message' => 'cant delete !']);
            }
        }else{
            echo json_encode(['status' => 'error', 'message' => 'mod permission delete !']);
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

    public function bannedUsers(){
        $bannedUsers = $this->userModel->getBannedUsers();
        echo json_encode($bannedUsers);
    }



    private function uploadImage($file) {
        $allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];
        
        if (in_array($file['type'], $allowedTypes)) {
            $target_dir = APPROOT . "/../public/img/users/";
            $target_file = $target_dir . basename($file["name"]);
        
            // Ensure the directory exists, create it if not
            if (!is_dir($target_dir)) {
                mkdir($target_dir, 0755, true);
            }
           
            move_uploaded_file($file["tmp_name"], $target_file);
            return true;
        }else{
            return false;
        }
        
    }

    
}