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
		$this->db->where('id', $id);
		return $this->db->delete('user');
	}

	public function get_data_by_id($id)
	{
		$this->db->select('*');
		$this->db->from($this->dbtable);
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row_array();

	}

	public function update_user($data,$id)
	{
		$this->db->where('id', $id);
		return $this->db->update('user', $data);
	}

	

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */