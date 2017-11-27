<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemasok extends CI_Controller {

	public function index(){
		$data['title'] = 'Pemasok';
		$data['content'] = 'pemasok/page_view_pemasok';
		$this->load->view('layout', $data	);
	}
	
	public function get_pemasok(){
		$this->load->model('Pemasok_m');
		$data['pemasok'] = $this->Pemasok_m->get_data_pemasok();
		$this->load->view('pemasok/table_pemasok', $data);
	}

	public function add_pemasok(){
		$this->load->model('Pemasok_m');
		$this->Pemasok_m->store_data_pemasok();
	}
}
