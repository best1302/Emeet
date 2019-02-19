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
        echo "หัวข้อ".$heading_name=$this->input->post('heading_name');
        echo "วันที่".$date=$this->input->post('date');
        echo "เวลา".$time=$this->input->post('time');
       print_r("หน่วยงาน".$department=input-ฬpost('department'));
       
        $data = array(     
            'heading_name' => $heading_name,
            'department' => $department,
            
            'date' => $date,
            'time' => $time,
    );
    $this->db->insert('heading', $data);  //เลือกinsert ลงในตาราง heading
        
      }
}

