<?php

class User extends CI_Controller{

  public  function __construct(){

        parent::__construct();
    }
   public function adduser(){
        $this->load->view('header');
        $this->load->view('adduser');
        
       
   
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
