<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function index(){
		$this->load->model('Jenis_m');
		$this->load->model('Satuan_m');
		$data['jenis'] = $this->Jenis_m->get_data_jenis();
		$data['satuan'] = $this->Satuan_m->get_data_satuan();
		$data['title'] = 'Barang';
		$data['content'] = 'barang/page_view_barang';
		$this->load->view('layout', $data	);
	}
	
	public function get_barang(){
		$this->load->model('Barang_m');
		$data['barang'] = $this->Barang_m->get_data_barang();
		$this->load->view('barang/table_barang', $data);
	}

	public function add_barang(){
		$this->load->model('Barang_m');
		$this->Barang_m->store_data_barang();
	}
}
