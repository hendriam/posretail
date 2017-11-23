<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian extends CI_Controller {

	public function index(){
		$data['title'] = 'Pembelian';
		$data['content'] = 'pembelian/page_view_pembelian';
		$this->load->view('layout', $data	);
	}
}
