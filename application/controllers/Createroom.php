<?php

class Createroom extends CI_Controller{
public function __construct(){
        parent::__construct();
        
    }
    public  function addroom(){

        $this->load->view('header');
        $this->load->view('addroom');

        $heading_name=$this->input->post('heading_name');
        $department = $this->input->post('department'); 
        $Date=$this->input->post('Date');
        $time=$this->input->post('time');
       
  
        $data = array(     
          'heading_name' => $heading_name,
          'department' => $department,
          'Date' => $Date,
          'time' => $time,
          
  );
  $this->db->insert('heading', $data);  //เลือกinsert ลงในตาราง User 
     }

     public function showe1(){
        
        
      }
}

