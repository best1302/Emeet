<?php

class Createroom extends CI_Controller{
public function __construct(){
        parent::__construct();
        
    }
    public  function addroom(){

        $this->load->view('header');
        $this->load->view('addroom');

        
        
     }

     public function showeroom(){
        echo "ok";
        $heading_name=$this->input->post('heading_name');
        $date=$this->input->post('date');
        $time=$this->input->post('time');

        $department=$this->input->post('department1'); 
        $department=$this->input->post('department2'); 
        $department=$this->input->post('department3'); 
        $data = array(     
            'heading_name' => $heading_name,
            'department' => $department1,
            'department' => $department2,
            'department' => $department3,
            'date' => $date,
            'time' => $time,
        
                 
    );
    $this->db->insert('heading', $data);  //เลือกinsert ลงในตาราง User 
        
      }
}

