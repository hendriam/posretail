<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faktur extends CI_Controller {

	public function index(){
		$data['title'] = 'Faktur';
		$data['content'] = 'faktur/page_view_faktur';
		$this->load->view('layout', $data	);
	}
}
