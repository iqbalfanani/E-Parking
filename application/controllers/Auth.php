<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		
	}

	public function Login()
	{
		$this->load->view('layouts/login_view');
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */