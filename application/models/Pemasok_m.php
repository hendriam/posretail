<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemasok_m extends CI_Model{
	
	public function get_data_pemasok(){
		$this->load->database();
		$this->db->select('*');
		$this->db->from('tbl_pemasok');
		return $this->db->get()->result();
	}

	public function store_data_pemasok(){
		$this->load->database();
		$data = ['pemasok_kode' => $this->input->post('kodepemasok'),
							'pemasok_nama' => $this->input->post('namapemasok'),
							'pemasok_alamat' => $this->input->post('alamat'),
							'pemasok_kota' => $this->input->post('kotapemasok'),
							'pemasok_provinsi' => $this->input->post('provinsipemasok'),
							'pemasok_negara' => $this->input->post('negarapemasok'),
							'pemasok_notelp' => $this->input->post('notelp'),
							'pemasok_nohp' => $this->input->post('nohp'),
							'pemasok_email' => $this->input->post('email'),
							'status' => $this->input->post('status')];
		$this->db->insert('tbl_pemasok', $data);
	}

}