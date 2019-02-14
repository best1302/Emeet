<?php
 
class User extends CI_Controller {
 
public function __construct(){
 
        parent::__construct();
  	$this->load->helper('url');
  	$this->load->model('user_model');
        $this->load->library('session');
 
}
public function login_view(){
 
    $this->load->view("login.php");
     
    }
    function login_user(){
        $user_login=array(
       
        'user_email'=>$this->input->post('user_email'),
        'user_password'=>md5($this->input->post('user_password'))
       
          );
       
          $data=$this->user_model->login_user($user_login['user_email'],$user_login['user_password']);
            if($data)
            {
              $this->session->set_userdata('user_id',$data['user_id']);
              $this->session->set_userdata('user_email',$data['user_email']);
              $this->session->set_userdata('user_name',$data['user_name']);
              $this->session->set_userdata('user_age',$data['user_age']);
              $this->session->set_userdata('user_mobile',$data['user_mobile']);
       
              $this->load->view('user_profile.php');
       
            }
            else{
              $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
              $this->load->view("login.php");
       
            }
       
       
      }
      public function user_logout(){
 
        $this->session->sess_destroy();
        redirect('user/login_view', 'refresh');
      }
}
?>