<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function validate($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('user',1);
		return $query;
	}

}

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */