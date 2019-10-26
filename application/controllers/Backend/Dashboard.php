<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{if(isActiveAdmin()){
		$data['page_title'] = " Welcome to asapdeliveries.com.bd";
		$this->load->view('backend/dashboard', $data);
		}
	}

	public function logout() {
		logoutAdmin();
	}
}
