<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	public function index(){
		$data['title'] = 'Daftar Pengguna';
		$data['content'] = 'pengguna/page_view_pengguna';
		$this->load->view('layout', $data	);
	}

	public function add_pengguna(){
		$data['title'] = 'Tambah Pengguna';
		$data['content'] = 'pengguna/page_add_pengguna';
		$this->load->view('layout', $data	);		
	}
}