<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General extends CI_Controller {

	function __construct(){
		parent::__construct();
		if ($this->session->userdata('logged_in')!==TRUE) {
			redirect('Login');
		}
	}

	public function Monitoring_Data()
	{
		$data=[
			'title' =>"Monitoring Data",
			'headers'=>'config/headers',
			'contents'=>"contents/general_v/monitoringdata_view",
			'footers' => 'config/footers',
			'data' =>array()
		];

		$this->load->view('layouts/template', $data);
	}

	public function Laporan_Data()
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

	public function Main_View()
	{
		$this->load->view('belajar');
	}

}

/* End of file General.php */
/* Location: ./application/controllers/General.php */