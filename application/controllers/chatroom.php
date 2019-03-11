<?php

class chatroom extends CI_Controller{

    function __construct(){
        parent::__construct();
    }

    function chat(){
        $this->load->view('header');
        $this->load->view('chat');

        
        
     }
}

