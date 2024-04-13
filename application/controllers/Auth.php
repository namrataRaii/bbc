<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{

		parent::__construct();
		date_default_timezone_set("Asia/Kolkata");
		$this->dateTime = date('d-m-Y');
		
	}

	public function index()
	{
		// echo 1; die();
		$this->load->view('auth/Login');
		
	}
	public function Login()
	{
		$this->load->view('auth/Login');
		
	}
	// function to load registration page 


	// function to admin login
	public function Authentication()
	{
		$output['res'] = 'error';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($action == 'Login') {
				$this->form_validation->set_rules('username', 'Username', 'trim|required');
				$this->form_validation->set_rules('password', 'Password', 'trim|required');
				if ($this->form_validation->run() == FALSE) {
					$msg = explode('</p>', validation_errors());
					$output['msg'] = str_ireplace('<p>', '', $msg[0]);
				} else {
					$postData = $this->input->post();
					$adminData = $this->db->get_where('tbl_admin', ['username' => $postData['username']]);
					if ($adminData->num_rows() > 0) {
						$admin = $adminData->row();
						if ($admin->password == $postData['password']) {
							$this->session->set_userdata('Admin', $admin);
							$output['res'] = 'success';
							$output['msg'] = 'Logged In Successfully';
							$output['redirect'] = base_url('admin/index');
						} else {
							$output['msg'] = 'Invalid Password !';
						}
					} else {
						$output['msg'] = 'Unauthorized Username !';
					}
				}
			}
			echo json_encode([$output]);
		}
	}

	// function to display error when enterted method or doesnt exist
	public function ErrorDisplay()
	{
		$this->load->view('auth/login-header');
		$this->load->view('auth/ErrorDisplay');
		$this->load->view('auth/login-footer');
	}
	
}