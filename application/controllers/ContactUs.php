<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactUs extends CI_Controller {
	public function index()
	{
		$data['page_title'] = " Welcome to asapdeliveries.com.bd";
		$this->load->view('contactUs', $data);
	}
}
