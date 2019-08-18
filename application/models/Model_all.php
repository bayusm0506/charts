<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_all extends CI_Model{
	public function show_all($table){
		return $this->db->get($table);
	}

	public function tambah($table, $data){
		$this->db->insert($table, $data);
		return $this->db->insert_id();
	}

	public function get_by_id($table, $id){
		$this->db->where('id', $id);
		return $this->db->get($table);
	}

	public function edit($table, $data, $where){
		$this->db->update($table, $data, $where);
		return $this->db->affected_rows();
	}

	public function hapus($table, $where){
		return $this->db->delete($table, $where);
	}

	public function get_data(){
		$this->db->select('B.nama_hadiah, C.nama, COUNT(B.nama_hadiah) AS total_hadiah, COUNT(C.nama) as total_anggota')
				 ->from('anggota_hadiah A')
				 ->join('hadiah B', 'A.hadiah_id = B.id')
				 ->join('anggota C', 'A.anggota_id = C.id')
				 ->group_by('A.hadiah_id');

		return $this->db->get();
	}
}