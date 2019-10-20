<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MonitoringData extends CI_Controller {

	function __construct(){
		parent::__construct();
		if ($this->session->userdata('logged_in')!==TRUE) {
			redirect('Login');
		}
	}

	var $cname = "General/MonitoringData";

	public function monitoring_data()
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
	

}

/* End of file MonitoringData.php */
/* Location: ./application/controllers/General/MonitoringData.php */