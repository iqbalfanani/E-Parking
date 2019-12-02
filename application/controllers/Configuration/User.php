<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('User_model');
		$this->load->model('Mahasiswa_model');
		if ($this->session->userdata('logged_in')!==TRUE) {
			redirect('Login');
		}
	}

	var $cname = "Configuration/User";

	public function user_index()
	{
		if ($this->session->userdata('level')==='1') {
			$data =[
				'title' =>"User",
				'cname' => $this->cname,
				'headers'=>'config/headers',
				'contents'=> "contents/configuration_v/user/user_view",
				'footers' => 'config/footers',
				'data'=>array()
			];

			$this->load->view('layouts/template', $data);

			
		}else{
			$this->load->view('layouts/403');
		}
	}

	public function get_list_user(){
		$data['data'] = $this->User_model->get_data_user();
		echo json_encode($data);
	}

	public function user_insert(){
		$set_pc=[
			'username'=>$this->input->post('username'),
			'password'=>md5($this->input->post('password')),
			'nama'=>$this->input->post('nama'),
			'alamat'=>$this->input->post('alamat'),
			'telp'=>$this->input->post('telp'),
			'email'=>$this->input->post('email'),
			'level'=>$this->input->post('level')
		];

		$data=$this->User_model->insert_user($set_pc);
		echo json_encode($data);
	}

	public function user_delete()
	{
		$id = $this->input->post('id');

		$data = $this->User_model->delete_user($id);
		echo json_encode($data);
	}

	public function form_update_user()
	{
		$id = $this->input->post('id');
		$data['data_by'] = $this->User_model->get_data_by_id($id);		
		$this->load->view('contents/configuration_v/user/formupdate', $data);
	}

	public function user_update()
	{
		$objdata = array(
			'username' => $this->input->post('edit_username'),
			'nama' => $this->input->post('edit_nama'),
			'telp' => $this->input->post('edit_telp'),
			'email' => $this->input->post('edit_email'),
			'alamat' => $this->input->post('edit_alamat')
		);

		$id = $this->input->post('id');
		$data = $this->User_model->update_user($objdata, $id);

		echo json_encode($data);
	}



}

/* End of file User.php */
/* Location: ./application/controllers/Configuration/User.php */