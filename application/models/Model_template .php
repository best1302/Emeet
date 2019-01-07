<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_template extends CI_Model { // คลาส Model_template สืบทอดคุณสมบัติของ CI_Model
	
	public function getAllTemplate() // สร้าง Method ชื่อว่า getAllTemplate
	{ 
		$query = $this->db->query('SELECT * FROM application_template'); 
		if($query->num_rows() > 0 ) {
			return $query->result();
		} else {
			return array();
		}
	}
	
}