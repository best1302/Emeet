<?php
class Member extends CI_Controller{
  public  function __construct(){
        parent::__construct();

    }
    public function showeuser(){
      $query = $this->db->query("Select * from user order by uid asc");
      $users = $query->result();
     
      $this->load->view('header');
      $this->load->view('Member',['users'=>$users]);
        
    
      }
    
   public function adduser(){
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
  $this->db->insert('user', $data);
  //print_r($data);
   


    }
    public function updateuser(){
      echo "อัพเดชผู้ใช้";
      
    }
   public function deleteuser(){
        echo "ลบผู้ใช้";
     
      }
   
     
}
