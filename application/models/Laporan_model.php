<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_model extends CI_Model {

	var $dbtable = "log_parkir";

	public function get_data_laporan()
	{
		$this->db->select('*');
		$this->db->from($this->dbtable);
		$query = $this->db->get();

		return $query->result();
	}

}

/* End of file Laporan_model.php */
/* Location: ./application/models/Laporan_model.php */