<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuration extends CI_Controller {

	public function index()
	{
		
	}

	public function Mahasiswa()
	{
		$data = [
			'title' =>"Mahasiswa Card",
			'contents' => "contents/configuration_v/mahasiswa_view",
			'data' => array()
		];

		$this->load->view('layouts/template', $data);
	}

	public function User()
	{
		$data =[
			'title' =>"User",
			'contents'=> "contents/configuration_v/user_view",
			'data'=>array()
		];

		$this->load->view('layouts/template', $data);
	}

	public function Role()
	{
		$data=[
			'title'=>"Role",
			'contents'=>"contents/configuration_v/role_view",
			'data'=>array()

		];

		$this->load->view('layouts/template', $data);
	}

}

/* End of file Configuration.php */
/* Location: ./application/controllers/Configuration.php */