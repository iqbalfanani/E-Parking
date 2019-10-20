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
	
	#insert
	public function insert_user($data)
	{
		return $this->db->insert('user', $data);
	}

	#delete
	public function delete_user($id)
	{
		$this->db->where('user_id', $id);
		return $this->db->delete('user');
	}

	

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */