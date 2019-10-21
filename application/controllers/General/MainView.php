<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainView extends CI_Controller {

	function __construct(){
		parent::__construct();
		if ($this->session->userdata('logged_in')!==TRUE) {
			redirect('Login');
		}
	}

	var $cname = "General/MainView";

	public function main_view()
	{
		$this->load->view('belajar');
	}




}

/* End of file MainView.php */
/* Location: ./application/controllers/General/MainView.php */