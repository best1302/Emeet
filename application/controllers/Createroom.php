<?php
class Createroom extends CI_Controller{
    public  function __construct(){
        parent::__construct();
        
    }
    public  function addroom(){
        $query = $this->db->query("Select * from user order by uid asc"); //select db มาแสดง 
        $users = $query->result(); 
      $this->load->view('header');  
      $this->load->view('addroom',['users'=>$users]);
        
        
     }

     public function showeroom(){
        $heading_name=$this->input->post('heading_name');
        $date=$this->input->post('date');
        $time=$this->input->post('time');
        $department=implode(",", $this->input->post('departmen'));
        $this->input->post('department3'); 
        $data = array(     
            'heading_name' => $heading_name,
            'department' => $department,
            'date' => $date,
            'time' => $time,
    );
    $this->db->insert('heading', $data);  //เลือกinsert ลงในตาราง heading
        
      }
}

