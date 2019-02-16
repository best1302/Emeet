<?php
class Member extends CI_Controller{
  public  function __construct(){
        parent::__construct();

    }
    public function adduser(){  
     
      $this->load->view('header');  
      $this->load->view('adduser');  
      //เรียกหน้ามาแสดง  
      $uid=$this->input->post('uid');
      $username=$this->input->post('username');
      $password=$this->input->post('password');
      $firstname=$this->input->post('firstname');
      $lastname=$this->input->post('lastname');
      $picture=$this->input->post('picture');
      $email=$this->input->post('email');
      $phone=$this->input->post('mobile');
      $prefic_name=$this->input->post('preficname');

      $data = array(     
        'uid' => $uid,
        'username' => $username,
        'password' => $password,
        'firstname' => $firstname,
        'lastname' => $lastname,
        //'picture' => '',
        'email' => $email,
        'phone' => $phone,
        'prefic_name' => $prefic_name     
);
$this->db->insert('user', $data);  //เลือกinsert ลงในตาราง User 
   
      }
    
   public function showeuser(){    
    $query = $this->db->query("Select * from user order by uid asc"); //select db มาแสดง 
    $users = $query->result(); 
  $this->load->view('header');  
  $this->load->view('Member',['users'=>$users]);

    }
    public function updateuser(){
      echo "อัพเดชผู้ใช้";
      
    }
   public function deleteuser(){
        echo "ลบผู้ใช้";
     
      }
   
     
}


