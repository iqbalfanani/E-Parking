<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Laporan_model');
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

	public function get_list_laporan(){
		$data['data'] = $this->Laporan_model->get_data_laporan();
		echo json_encode($data);
	}

	public function filter(){
		$date1 = date('Y-m-d', strtotime($this->input->post('date1')));
		$date2 = date('Y-m-d', strtotime($this->input->post('date2')));
		$data = $this->Laporan_model->get_data_filter($date1,$date2);
		echo json_encode($data);
	}

	public function report(){

	}


}

/* End of file Laporan.php */
/* Location: ./application/controllers/General/Laporan.php */