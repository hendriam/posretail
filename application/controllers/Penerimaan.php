<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penerimaan extends CI_Controller {

	public function index(){
		$data['title'] = 'Penerimaan';
		$data['content'] = 'penerimaan/page_view_penerimaan';
		$this->load->view('layout', $data	);
	}

	public function get_pemasok_auto(){
		$this->load->model('Penerimaan_m');
  	if(isset($_GET['term'])):
      	$find = strtolower($_GET['term']);
      	$this->Penerimaan_m->get_pemasok_auto_db($find);
    endif;		
	}

	public function get_barang_auto(){
		$this->load->model('Penerimaan_m');
  	if(isset($_GET['term'])):
      	$find = strtolower($_GET['term']);
      	$this->Penerimaan_m->get_barang_auto_db($find);
    endif;		
	}

	public function view_penerimaan_barang_temp(){
		$this->load->view('penerimaan/table_penerimaan_barang');
	}
}