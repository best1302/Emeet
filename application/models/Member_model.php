<?php
class Member_Model extends CI_Model 
{
	function saverecords($number,$firsname,$lastname,$email,$mobile,$pic,$username,$password,$confirmpassword)
	{
	$query="insert into users values('$number','$firsname','$lastname','$email','$mobile','$pic','$username','$password','$confirmpassword',)";
	$this->db->query($query);
	}
}