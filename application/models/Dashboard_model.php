<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

	var $dbtable = "log_parkir";

	public function last_month()
	{
		$this->db->select('*');
		$this->db->from('date_log_last_month');
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function in_today(){
		$this->db->select('*');
		$this->db->from('date_log_today_in');
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function out_today(){
		$this->db->select('*');
		$this->db->from('date_log_today_out');
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function total_parking(){
		$this->db->select('*');
		$this->db->from('log_parkir');
		$query = $this->db->get();
		return $query->num_rows();
	}


}

/* End of file Dashboard_model.php */
/* Location: ./application/models/Dashboard_model.php */