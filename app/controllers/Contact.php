<?php

Class Contact extends Controller {
    private $contactModel;
    public function __construct() {
        $this->contactModel = $this->model("Contacts");
    }

    public function index(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
//            print_r($_POST);
            $data=[
                'name'=>"",
                'email'=>"",
                'message'=>"",
                'namevide'=>"",
                'emailvide'=>"",
                'messagevide'=>""

            ];

            if (!empty($_POST['name'])){
                $data['name']=$_POST['name'];
            }else{
                $data['namevide']="veuillez enter s'il vous plait votre nom";
            }

            if (!empty($_POST['email'])){
                $data['email']=$_POST['email'];
            }else{
                $data['emailvide']="veuillez enter s'il vous plait votre adresse mail";
            }

            if (!empty($_POST['message'])){
                $data['message']=$_POST['message'];
            }else{
                $data['messagevide']="veuillez enter s'il vous plait votre message";
            }
            if (empty($data['namevide'])&& empty($data['emailvide'])&& empty($data['messagevide'])){
                if($this->contactModel->Message($data)){
                    $infoAvito = $this->contactModel->infoAvito();
                    $data=[
                        'info'=>$infoAvito,
                        'succes'=>'Votre message a été envoyé'
                    ];


                    $this->view('pages/contact',$data);
                }

            }else{
                $this->view('pages/contact',$data);
            }


        }
        else{

            $infoAvito = $this->contactModel->infoAvito();

            $data=[
                "info"=> $infoAvito
            ];


            $this->view('pages/contact',$data);
        }


    }


}


