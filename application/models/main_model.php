<?php

class Main_model extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    function can_login($username,$password)
    {
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $query =$this->db->get('users');
      // SELECT * FROM user WHERE username='$username' AND   password='$password' ";
      if($query->num_rows()>0){
        
        return true;
    }
    else{
        return false;
    }
        
     }
}

