<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainControl extends CI_Controller {

	public function index()
	{
		$this->load->view('layouts/login_view');
	}

}

/* End of file MainControl.php */
/* Location: ./application/controllers/MainControl.php */