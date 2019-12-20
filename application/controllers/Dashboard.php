<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Dashboard_model');
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
			'month' => $this->Dashboard_model->last_month(),
			'today_in'=> $this->Dashboard_model->in_today(),
			'today_out'=> $this->Dashboard_model->out_today(),
			'total_parkir' =>$this->Dashboard_model->total_parking(),
			'data' => array()
		];

		$this->load->view('layouts/template',$data);
	}

	public function get_data_last_month(){
		$data['month'] = $this->Dashboard_model->last_month();
		echo json_encode($data);
	}

	public function get_data_in_today(){
		$data['today_in'] = $this->Dashboard_model->in_today();
		echo json_encode($data);
	}

	public function get_data_out_today(){
		$data['today_out'] = $this->Dashboard_model->out_today();
		echo json_encode($data);
	}


}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */