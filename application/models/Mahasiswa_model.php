<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {

	var $dbtable = "mahasiswa";

	public function saveRfid($data){

		return $this->db->insert('mahasiswa',$data);
	}

	public function cek_mahasiswa_card($data){
		$this->db->select('*');
		$this->db->from($this->dbtable);
		$this->db->where('id_card', $data);
		$query= $this->db->get()->row();
		if (!empty($query)) {
			
		}
		// return $query->row();
	}

	public function cek_mahasiswa_in_out($data){
		

	}



	public function get_data_mhs()
	{
		$this->db->select('*');
		$this->db->from($this->dbtable);
		$query = $this->db->get();

		return $query->result();
	}

	public function get_data_card(){
		$this->db->select('*');
		$this->db->from($this->dbtable);
	}

	public function get_data_by($id){
		$this->db->select('*');
		$this->db->from($this->dbtable);
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function update_mhs($data,$id)
	{
		$this->db->where('id', $id);
		return $this->db->update('mahasiswa', $data);
	}

	public function delete_mhs($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('mahasiswa');
	}

}

/* End of file Mahasiswa_model.php */
/* Location: ./application/models/Mahasiswa_model.php */