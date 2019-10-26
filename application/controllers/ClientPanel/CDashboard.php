<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CDashboard extends CI_Controller {
	public function index()
	{if(isActiveClient()){
		$data['page_title'] = " Dashboard || asapdeliveries.com.bd";
		$clientName = $this->session->userData('Client_NAME');
		$data['ClientDetails'] 	= $this->M_crud->findByUserName('registerform', $clientName);

		$this->load->view('clientPanel/dashboard', $data);
	}
	}
}


