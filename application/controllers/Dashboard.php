<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index(){
		$data['title'] = 'Dashboard';
		$data['content'] = 'dashboard/dashboard_page'
		$this->load->view('layout');
	}
}
