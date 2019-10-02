<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuration extends CI_Controller {

	function __construct(){
		parent::__construct();
		if ($this->session->userdata('logged_in')!==TRUE) {
			redirect('Login');
		}

	}

	public function Mahasiswa()
	{
		if ($this->session->userdata('level')==='1') {
			$data = [
				'title' =>"Mahasiswa Card",
				'contents' => "contents/configuration_v/mahasiswa_view",
				'data' => array()
			];

			$this->load->view('layouts/template', $data);	
		}else{
			echo "Access Denied";
		}
	}

	public function User()
	{
		if ($this->session->userdata('level')==='1') {
			$data =[
				'title' =>"User",
				'contents'=> "contents/configuration_v/user_view",
				'data'=>array()
			];

			$this->load->view('layouts/template', $data);
		}else{
			echo "Access Denied";
		}
		
	}

}

/* End of file Configuration.php */
/* Location: ./application/controllers/Configuration.php */