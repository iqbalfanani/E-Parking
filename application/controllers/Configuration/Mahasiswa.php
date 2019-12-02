<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('User_model');
		$this->load->model('Mahasiswa_model');
		if ($this->session->userdata('logged_in')!==TRUE) {
			redirect('Login');
		}
	}

	var $cname = "Configuration/Mahasiswa";

	public function index()
	{
		if ($this->session->userdata('level')==='1') {
			$data = [
				'title' =>"Mahasiswa Card",
				'headers'=>'config/headers',
				'cname' => $this->cname,
				'contents' => "contents/configuration_v/mahasiswa/mahasiswa_view",
				'footers' => 'config/footers',
				'data' => array()
			];

			$this->load->view('layouts/template', $data);	
		}else{
			$this->load->view('layouts/403');
		}
	}

	public function get_list_mahasiswa(){
		$data['data'] = $this->Mahasiswa_model->get_data_mhs();
		echo json_encode($data);
	}

	public function postdemo(){
		if(isset($_GET['CardID'])) {
			echo "eko";



		}
		else{
			echo "Empty Card ID";
			exit();
		}
	}


	public function form_update_mahasiswa(){
		$id = $this->input->post('id');
		$data['data_by']= $this->Mahasiswa_model->get_data_by($id);
		$this->load->view('contents/configuration_v/mahasiswa/formupdate', $data);
	}

	public function mhs_update(){
		$objdata = array(
			'id_card' => $this->input->post('edit_card'),
			'nim' => $this->input->post('edit_nim'),
			'nama_mhs' => $this->input->post('edit_namamhs'),
			'jurusan' => $this->input->post('edit_jurusan')
		);

		$id= $this->input->post('id');
		$data = $this->Mahasiswa_model->update_mhs($objdata, $id);

		echo json_encode($data);
	}

	public function mhs_delete(){
		$id = $this->input->post('id');

		$data = $this->Mahasiswa_model->delete_mhs($id);
		echo json_encode($data);
	}

}

/* End of file Mahasiswa.php */
/* Location: ./application/controllers/Configuration/Mahasiswa.php */