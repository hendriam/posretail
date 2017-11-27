<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna_m extends CI_Model{
	
	public function get_data_pengguna(){
		$this->load->database();
		$this->db->select('*');
		$this->db->from('tbl_pengguna');
		return $this->db->get()->result();
	}

	public function store_data_pengguna(){
		$this->load->database();
		$data = ['pengguna_nama' => $this->input->post('namalengkap'),
							'pengguna_username' => $this->input->post('username'),
							'pengguna_password' => $this->input->post('password'),
							'pengguna_akses' => $this->input->post('akses'),
							'pengguna_status' => $this->input->post('status')];
		$this->db->insert('tbl_pengguna', $data);
	}
}