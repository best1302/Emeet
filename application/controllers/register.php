<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url')); // โหลดเฮลเปอร์ form และ url ของ ci มาใช้งาน
		$this->load->library('form_validation'); // โหลดไลบรารี่ form_validation ของ ci มาใช้งาน
	}
	public function index()
	{
		$this->load->view('header');
        $this->load->view('adduser'); // เข้ามาครั้งแรกให้โหลด register_view มาแสดง
	}
	public function validate()
	{
		$this->form_validation->set_rules('first_name', 'Username', 'required');
		$this->form_validation->set_rules('last_name', 'Password', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');

		if ($this->form_validation->run() == FALSE)
		{
				$this->load->view('adduer');
		}else{
			$first_name = $this->input->post('first_name');
			$last_name = $this->input->post('last_name');
			$email = $this->input->post('email');
		}
	}
}