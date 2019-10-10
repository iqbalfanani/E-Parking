<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {

	var $dbtable = "mahasiswa";

	public function get_data_mhs()
	{
		$this->db->select('*');
		$this->db->from($this->dbtable);
		$query = $this->db->get();

		return $query->result();
	}

}

/* End of file Mahasiswa_model.php */
/* Location: ./application/models/Mahasiswa_model.php */