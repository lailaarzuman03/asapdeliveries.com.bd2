<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		$data['page_title'] = " Welcome to asapdeliveries.com.bd";
		$this->load->view('backend/home', $data);
	}

	public function authenticate()
	{
		loginAdmin();
	}

	public function logout() {
		logoutAdmin();
	}
}
