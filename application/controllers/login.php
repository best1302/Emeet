<?php

class login extends CI_Controller{

    function __construct(){
        parent::__construct();
    }

    function login1(){
        $this->load->view('login');
        
    }

    public function logout(){
        $this->session->sess_destroy();
        $this->load->view('EM');
    }

    function showelogin(){
        $username=$this->input->post('username');
        $password=$this->input->post('password');
		$query ="SELECT * FROM user 
	    WHERE username='$username' ";
		$query = $this->db->query($query);
		if($query->num_rows()>0){
            $hash = $query->row()->password;
            if(password_verify ($password, $hash )){
                $this->load->library('session');
                $user = $query->row();
                $data = [
                    'name' => $user->firstname,
                    'surname' => $user->lastname,
                    'email' => $user->email,
                    'phone' => $user->phone,
                    'prefix' => $user->prefic_name

                ];

                $this->session->set_userdata('user',$data);
                $user = $this->session->userdata('user');
                $this->load->view('header');
                $this->load->view('calendar',$user);
            }else{
                $data = [
                    'message' => true
                ];
                $this->load->view('login',$data);
            }

		}
		else{
            $data = [
                'message' => true
            ];
            $this->load->view('login',$data);
		}
	}

    }



