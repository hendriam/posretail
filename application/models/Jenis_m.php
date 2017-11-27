<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_m extends CI_Model{
	
	public function get_data_jenis(){
		$this->load->database();
		$this->db->select('*');
		$this->db->from('tbl_jenis');
		return $this->db->get()->result();
	}

}