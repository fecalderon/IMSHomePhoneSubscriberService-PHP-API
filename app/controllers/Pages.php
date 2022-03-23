<?php
    class Pages extends Controller {
        public function __construct(){

        }

        public function index(){
            $data = [
                'title' => 'IMS Home Phone Subscriber Service',
                'description' => 'This is a project that will display CRUD functionality using PHP API for IMS Home Phone Subscriber Service'
                ];
            $this->view('pages/index', $data);
        }

        public function about(){
            $data = [
                'title' => 'About',
                'description' => 'This is my submission for WPWA application<br>PHP API for IMS Home Phone Subscriber Service'
                ];
            $this->view('pages/about', $data);
        }
    }
