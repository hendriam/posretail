<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	public function index(){
		$data['title'] = 'Daftar Pengguna';
		$data['content'] = 'pengguna/page_view_pengguna';
		$this->load->view('layout', $data	);
	}

	public function get_pengguna(){
		$this->load->model('Pengguna_m');
		$data['pengguna'] = $this->Pengguna_m->get_data_pengguna();
		$this->load->view('pengguna/table_pengguna', $data	);
	}

	public function add_pengguna(){
		$this->load->model('Pengguna_m');
		$this->Pengguna_m->store_data_pengguna();
	}
}