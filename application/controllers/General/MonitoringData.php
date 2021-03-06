<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MonitoringData extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Monitoringdata_model');
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
			'contents'=>'contents/general_v/monitoringdata_view',
			'footers' => 'config/footers',
			'data' =>array()
		];

		$this->load->view('layouts/template', $data);
	}

	public function main_view(){
		$data=[
			'title'=>"Monitoring",
			'headers'=>'config/headers',
			'contents'=>'contents/main_view',
			'footers' => 'config/footers',
			'data' =>array()
		];
		$this->load->view('layouts/maintemplate',$data);
	}

	public function get_list_log_parkir(){
		$data['data'] = $this->Monitoringdata_model->get_data_log_parkir();
		echo json_encode($data);
	}

	public function log_parkir(){
		$this->load->view('log_parkir');
	}
	

}

/* End of file MonitoringData.php */
/* Location: ./application/controllers/General/MonitoringData.php */