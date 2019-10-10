<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
	}

	public function index()
	{
		$data=[
			'title'=> "Login",
			'data'=>array(),
		];

		$this->load->view('layouts/login_view', $data);

	}

	public function authentication()
	{
		$username = $this->input->post('username',TRUE);
		$password = md5($this->input->post('password',TRUE));
		$validate = $this->Login_model->validate($username,$password);
		if ($validate->num_rows() > 0) {
			$data = $validate->row_array();
			$username = $data['username'];
			$nama = $data['nama'];
			$alamat = $data['alamat'];
			$telp = $data['telp'];
			$email = $data['email'];
			$level = $data['level'];
			$sess_data = array(
				'username' => $username,
				'nama' => $nama,
				'alamat' => $alamat,
				'telp' => $telp,
				'email' => $email,
				'level' => $level,
				'logged_in' => TRUE,

			);
			$this->session->set_userdata($sess_data);

			if ($level == '1') {
				redirect('Dashboard');
			}else{
				redirect('Dashboard');
			}
		}else{
			echo $this->session->flashdata('msg','Username or Password Wrong');
			redirect('Login');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Login');
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */