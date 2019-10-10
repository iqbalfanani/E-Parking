<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	var $dbtable = "user";

	public function get_data_user()
	{
		$this->db->select('*');
		$this->db->from($this->dbtable);
		$query = $this->db->get();

		return $query->result();
	}
	

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */