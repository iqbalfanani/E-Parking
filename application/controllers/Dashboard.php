<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		if ($this->session->userdata('logged_in')!==TRUE) {
			redirect('Login');
		}
	}

	public function index()
	{
		$data= [
			'title' => "Dashboard",
			'headers' => "dashboard/headers",
			'contents' =>"contents/dashboard_view",
			'footers' => "dashboard/footers",
			'data' => array()
		];

		$this->load->view('layouts/template',$data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */