<?php
class Member_Model extends CI_Model 
{
	function addmember($number,$firsname,$lastname,$email,$mobile,$pic,$username,$password,$confirmpassword)
	{
	$sql="INSERT INTO user VALUES('$number','$firsname','$lastname','$email','$mobile','$pic','$username','$password','$confirmpassword',)";
	$this->db->query($sql);
	}
}
