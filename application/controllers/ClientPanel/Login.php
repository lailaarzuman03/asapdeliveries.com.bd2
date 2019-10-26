<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		$data['page_title'] = " Welcome to asapdeliveries.com.bd";
		$this->load->view('clientPanel/home', $data);
	}

	public function clientAuth()
	{
		loginClient();
	}
	
	public function logout() {
		logoutClient();
	}
}
