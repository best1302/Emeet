<?php
class Member_Model extends CI_Model 
{
	function addmember($number,$firsname,$lastname,$email,$mobile,$pic,$username,$password,$preficname)
	{
	$sql="INSERT INTO user VALUES('$number','$firsname','$lastname','$email','$mobile','$pic','$username','$password','$preficname')";
	$this->db->query($sql);
	}
}
