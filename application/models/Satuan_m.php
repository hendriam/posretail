<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satuan_m extends CI_Model{
	
	public function get_data_satuan(){
		$this->load->database();
		$this->db->select('*');
		$this->db->from('tbl_satuan');
		return $this->db->get()->result();
	}

}