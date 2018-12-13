<?php

class add extends CI_Controller{

    function __construct(){
        parent::__construct();
    }

    function add1(){
        $this->load->view('header');
        $this->load->view('convene');
        
    }
}

