<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penerimaan_m extends CI_Model{

	public function get_pemasok_auto_db($term){
		$this->load->database();
		$this->db->start_cache();
		$this->db->from('tbl_pemasok');
		$this->db->like('LOWER(pemasok_nama)', $term);
		$query = $this->db->get();
		if($query->num_rows()>0):
			foreach($query->result_array() as $row):
				$row_set[] = array('value' => $row['pemasok_nama'],
									'kodepemasok' => $row['pemasok_kode'],
									'alamatpemasok' => $row['pemasok_alamat']);
			endforeach;
			echo json_encode($row_set);
		endif;
		$this->db->stop_cache();
		$this->db->flush_cache();

	}

	public function get_barang_auto_db($term){
		$this->load->database();
		$this->db->start_cache();
		$this->db->from('tbl_barang');
		$this->db->like('LOWER(barang_nama)', $term);
		$query = $this->db->get();
		if($query->num_rows()>0):
			foreach($query->result_array() as $row):
				$row_set[] = array('kodebarang' => $row['barang_kode'],
														'value' => $row['barang_nama'],
														'hargabeli' => $row['harga_beli'],
														'jumlah' => $row['jumlah_min']);
			endforeach;
			echo json_encode($row_set);
		endif;
		$this->db->stop_cache();
		$this->db->flush_cache();

	}
}