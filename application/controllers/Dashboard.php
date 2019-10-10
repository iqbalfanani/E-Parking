<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data= [
			'title' => "Dashboard",
			'contents' =>"contents/general_v/laporan_view",
			'data' => array()
		];

		$this->load->view('layouts/template',$data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */