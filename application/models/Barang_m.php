<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_m extends CI_Model{
	
	public function get_data_barang(){
		$this->load->database();
		$this->db->select('*');
		$this->db->join('tbl_jenis b', 'a.barang_jenis = b.jenis_id');
		$this->db->join('tbl_satuan c', 'a.barang_satuan = c.satuan_id');
		$this->db->from('tbl_barang a');
		return $this->db->get()->result();
	}

	public function store_data_barang(){
		$this->load->database();
		$data = ['barang_kode' => $this->input->post('kodebarang'),
							'barang_nama' => $this->input->post('namabarang'),
							'barang_jenis' => $this->input->post('jenisbarang'),
							'barang_satuan' => $this->input->post('satuanbarang'),
							'harga_beli' => $this->input->post('hargabeli'),
							'harga_jual' => $this->input->post('hargajual'),
							'diskon' => $this->input->post('diskon'),
							'jumlah_min' => $this->input->post('jumlahminimum'),
							'tgl_expire' => $this->input->post('tglexpire'),
							'status' => $this->input->post('status')
							];
		$this->db->insert('tbl_barang', $data);
	}
}