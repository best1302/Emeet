<?php

class Main extends CI_Controller{

    function __construct(){
        parent::__construct();
    }
    function login(){
        if($post = $this->input->post()){
            extract($post);
            $sql = "select * from user where username = '$username' and password = '$password'";
            $ret = $this->db->query($sql);
            if($ret->num_rows()){
                $data_ret = $ret->result();
                $this->session->set_userdata('uid',$data_ret[0]->uid);
                $this->session->set_userdata('firstname',$data_ret[0]->firstname);
                $this->session->set_userdata('lastname',$data_ret[0]->lastname);
            }else{
                $data['message'] = "mother fucker";
            }
        }
        $this->load->view('header');
        $this->load->view('login');

        
    }
    public function logout(){
        $this->session->session_destroy();
        redirect(base_url."index.php/main/login");
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