<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General extends CI_Controller {

	public function index()
	{
		
	}

	public function Monitoring_Data()
	{
		$data=[
			'title' =>"Monitoring Data",
			'contents'=>"contents/general_v/monitoringdata_view",
			'data' =>array()
		];

		$this->load->view('layouts/template', $data);
	}

	public function Laporan_Data()
	{
		$data=[
			'title' =>"Laporan Data",
			'contents'=>"contents/general_v/laporan_view",
			'data' =>array()
		];

		$this->load->view('layouts/template', $data);	
	}

}

/* End of file General.php */
/* Location: ./application/controllers/General.php */