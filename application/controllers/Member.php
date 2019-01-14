<?php

class Member extends CI_Controller{

  public  function __construct(){

        parent::__construct();
    }
   public function adduser(){
        $this->load->view('header');
        $this->load->view("adduser");
      
   
    }
    public function updateuser(){
      echo "อัปเดชผู้ใช้";
   
    }
   public function deleteuser(){
        echo "ลบผู้ใช้";
     
      }
    public function showeuser(){
      $query = $this->db->query("Select * from user order by uid asc");
      $users = $query->result();
      // foreach ($query->result() as $row)
      // {
      //         print_r($row->firstname);
      // }

      $this->load->view('header');
      $this->load->view('Member');
      $sql="Select*from user order by uid asc";
      $rs=$this->db->query($sql);

      $data['rs']=$rs->result_array();
    
      }
     

}

