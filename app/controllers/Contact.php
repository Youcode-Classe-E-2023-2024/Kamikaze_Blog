<?php

Class Contact extends Controller {
    public function __construct() {
    }

    public function index(){
        $this->view('pages/contact');
    }
}
