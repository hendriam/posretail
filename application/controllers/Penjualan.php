<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {

	public function index(){
		$data['title'] = 'PENJUALAN';
		$data['content'] = 'penjualan/page_view_penjualan';
		$this->load->view('layout', $data	);
	}
}