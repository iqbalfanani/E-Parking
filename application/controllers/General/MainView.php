<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainView extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Monitoringdata_model');
		if ($this->session->userdata('logged_in')!==TRUE) {
			redirect('Login');
		}
	}

	var $cname = "General/MainView";

	public function main_view()
	{
		$this->load->view('belajar');
	}

	public function get_list_log(){
		$data['data'] = $this->Monitoringdata_model->get_data_log_parkir();
		echo json_encode($data);
	}




}

/* End of file MainView.php */
/* Location: ./application/controllers/General/MainView.php */