<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
	function __construct(){
		parent::__construct();
		if ($this->session->userdata('logged_in')!==TRUE) {
			redirect('Login');
		}
	}

	var $cname = "General/Laporan";

	public function laporan_data()
	{
		$data=[
			'title' =>"Laporan Data",
			'headers'=>'config/headers',
			'contents'=>"contents/general_v/laporan_view",
			'footers' => 'config/footers',
			'data' =>array()
		];

		$this->load->view('layouts/template', $data);	
	}


}

/* End of file Laporan.php */
/* Location: ./application/controllers/General/Laporan.php */