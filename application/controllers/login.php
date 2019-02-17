<?php

class login extends CI_Controller{

    function __construct(){
        parent::__construct();
    }

    function login1(){
        $this->load->view('login');
        
    }
    function showelogin(){
        $username=$this->input->post('username');
		$password=$this->input->post('password');
		$query ="SELECT * FROM user 
	    WHERE username='$username' 
		AND   password='$password'
             ";
		$query = $this->db->query($query);
		if($query->num_rows()>0){
            $this->load->view('header');
            $this->load->view('calendar');
		}
		else{
            $this->load->view('login');
		}
	}

    }



