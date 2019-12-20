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

	public function get_data_filter($date1, $date2){
		$query = "SELECT * FROM `log_parkir` WHERE date_log >= '".$date1."' AND date_log <= '".$date2."'";
		$query = $this->db->query($query);
		$result = $query->result();
		$data['data'] = $result;
		return $data;
	}

}

/* End of file Laporan_model.php */
/* Location: ./application/models/Laporan_model.php */