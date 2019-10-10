<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuration extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('User_model');
		$this->load->model('Mahasiswa_model');
		if ($this->session->userdata('logged_in')!==TRUE) {
			redirect('Login');
		}

	}

	public function Mahasiswa()
	{
		if ($this->session->userdata('level')==='1') {
			$data = [
				'title' =>"Mahasiswa Card",
				'headers'=>'config/headers',
				'contents' => "contents/configuration_v/mahasiswa_view",
				'footers' => 'config/footers',
				'data' => array()
			];

			$this->load->view('layouts/template', $data);	
		}else{
			$this->load->view('layouts/403');;
		}
	}

	public function get_list_mahasiswa(){
		$data['data'] = $this->Mahasiswa_model->get_data_mhs();
		echo json_encode($data);
	}

	public function User()
	{
		if ($this->session->userdata('level')==='1') {
			$data =[
				'title' =>"User",
				'headers'=>'config/headers',
				'contents'=> "contents/configuration_v/user_view",
				'footers' => 'config/footers',
				'data'=>array()
			];

			$this->load->view('layouts/template', $data);
		}else{
			echo "Access Denied";
		}
	}

	public function get_list_user(){
		$data['data'] = $this->User_model->get_data_user();
		echo json_encode($data);
	}

}

/* End of file Configuration.php */
/* Location: ./application/controllers/Configuration.php */