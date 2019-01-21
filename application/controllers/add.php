<?php

class add extends CI_Controller{

  public  function __construct(){

        parent::__construct();
    }
   public function add1(){
    $uid=$this->input->post('uid');
    $username=$this->input->post('username');
    $password=$this->input->post('password');
    $firstname=$this->input->post('firstname');
    $lastname=$this->input->post('lastname');
    $picture=$this->input->post('picture');
    $email=$this->input->post('email');
    $phone=$this->input->post('mobile');
    $prefic_name=$this->input->post('preficname');

        $this->load->view('header');
        $this->load->view('convene');
        
       
   
    }
    public function updateuser(){
      echo "อัปเดชผู้ใช้";
   
    }
   public function deleteuser(){
        echo "ลบผู้ใช้";
     
      }
    public function showeuser(){
        
        
    
      }
     

}

