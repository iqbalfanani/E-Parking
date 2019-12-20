<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monitoringdata_model extends CI_Model {
	var $dbtable ="log_parkir";

	public function get_data_log_parkir()
	{
		$this->db->select('*');
		$this->db->from($this->dbtable);
		$query = $this->db->get();

		return $query->result();
	}
	

}

/* End of file Monitoringdata_model.php */
/* Location: ./application/models/Monitoringdata_model.php */