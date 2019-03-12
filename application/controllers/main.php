<?php

class Main extends CI_Controller{

    function __construct(){
        parent::__construct();
    }

    function login(){
        $this->load->view('login');
        
    }
    function showelogin(){
<<<<<<< HEAD:application/controllers/login.php
        global $db, $username, $errors;
        
        $username=$this->input->post('username');
		$password=$this->input->post('password');
		$query ="SELECT * FROM user 
	    WHERE username='$username' 
		AND   password='$password'
             ";
        $query = $this->db->query($query);
        
		//if($query->num_rows()>0){
            //$this->load->view('header');
            //$this->load->view('calendar');
		//}
		//else{
            //$this->load->view('login');
        //}
        if (count($errors) == 0) {
            $password = md5($password);
    
            $query = "SELECT * FROM user WHERE username='$username' AND password='$password' LIMIT 1";
            $results = mysqli_query($db, $query);
    
            if (mysqli_num_rows($results) == 1) { // user found
                // check if user is admin or user
                $logged_in_user = mysqli_fetch_assoc($results);
                if ($logged_in_user['create_meeting'] == 'Y') {
    
                    $_SESSION['user'] = $logged_in_user;
                    $_SESSION['success']  = "You are now logged in";
                    $this->load->view('header');
                    $this->load->view('calendar');		  
                }else{
                    $_SESSION['user'] = $logged_in_user;
                    $_SESSION['success']  = "You are now logged in";
    
                    $this->load->view('header');
                    $this->load->view('calendar');
                }
            }else {
                $this->load->view('login');
            }
        }
    }
	}

    



=======
    $username=$this->input->post('username');
		$password=$this->input->post('password');
		$query ="SELECT * FROM user WHERE username='$username' AND   password='$password'";
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
>>>>>>> fc24b750d26fd7f84a1d31426d6316db8f95f928:application/controllers/main.php
