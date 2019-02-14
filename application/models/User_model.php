<?php
class User_model extends CI_model{
    public function login_user($email,$pass){
 
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user_username',$username);
        $this->db->where('user_password',$pass);
       
        if($query=$this->db->get())
        {
            return $query->row_array();
        }
        else{
          return false;
        }
       
       
      }
      public function username_check($username){
       
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user_username',$username);
        $query=$this->db->get();
       
        if($query->num_rows()>0){
          return false;
        }else{
          return true;
        }
       
      }
       
       
      }
       
       
      ?>