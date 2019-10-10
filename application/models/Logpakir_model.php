<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logpakir_model extends CI_Model {

var $dbtable = "log_parkir"

public function get_data_logparkir()
	{
		$this->db->select('*');
		$this->db->from($this->dbtable);
		$query = $this->db->get();

		return $query->result();
	}	

}

/* End of file Logpakir_model.php */
/* Location: ./application/models/Logpakir_model.php */