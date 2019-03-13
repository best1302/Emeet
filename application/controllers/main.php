<?php

class Main extends CI_Controller{

    function __construct(){
        parent::__construct();
    }

    function login(){
        $this->load->view('login');
        
    }

    public function register(){
        
        if (isset($_POST['register'])) {

            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('firstname', 'Firstname', 'required');
            $this->form_validation->set_rules('lastname', 'Lastname', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('phone', 'Phone', 'required');
            $this->form_validation->set_rules('preficname', 'Preficname', 'required');
       
              if ($this->form_validation->run() == TRUE) {
                echo 'form validated';

                $data = array(     
                    
                    'username' => $_POST['username'],
                    'password' => $_POST['password'],
                    'firstname' => $_POST['firstname'],
                    'lastname' => $_POST['lastname'],
                    //'picture' => '',
                    'email' => $_POST['email'],
                    'phone' => $_POST['phone'],
                    'prefic_name' => $_POST['preficname']  );
                    
                    $this->db->insert('user', $data);

              
              redirect("main/register","refresh");
            }
        }
        //เรียกหน้า
        
        $this->load->view('header');  
        $this->load->view('adduser');
    }

}