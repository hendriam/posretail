<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function index(){
		$data['title'] = 'Barang';
		$data['content'] = 'barang/page_view_barang';
		$this->load->view('layout');
	}
}
