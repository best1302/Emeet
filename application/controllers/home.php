<?php

class home extends CI_Controller{

    function __construct(){
        parent::__construct();
    }

    function index(){
        $this->load->view('header');
        $this->load->view('calendar');
        
        
     }
}

