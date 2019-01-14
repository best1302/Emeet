<?php
class Member extends CI_Controller{
  public  function __construct(){
        parent::__construct();

    }
   public function adduser(){
    $this->load->view('header');
    $this->load->view("adduser");
    $this->load->model('Member_model');
        //check submit bottn
        if($this->input->post('save'))
            {
        //get form's data and store in local varable
        $i=$this->input->post('number');
        $f=$this->input->post('firstname');
        $l=$this->input->post('lastname');
        $e=$this->input->post('email');
        $m=$this->input->post('mobile');
        $pi=$this->input->post('pic');
        $u=$this->input->post('username');
        $p=$this->input->post('password');
        $c=$this->input->post('confirmpassword');

        
        //call saverecords method of Hello_Model and pass variables as parameter
        $this->Member_model ->saverecords($i,$f,$l,$e,$m,$pi,$u,$p,$c); 
        echo "Records Saved Successfully";
        }
              
   
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
     
      $this->load->view('header');
      $this->load->view('Member',['users'=>$users]);
        
    
      }
     
}
