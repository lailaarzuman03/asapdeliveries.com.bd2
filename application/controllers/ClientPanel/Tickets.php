<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tickets extends CI_Controller {

	public function index($id = 0)
	{if(isActiveClient()){
		if($id == 1) {
				$data['mega'] 	= 'Tickets Send Successfull';
			} elseif($id == 2) {
				$data['mega'] 	= 'Tickets Send Failed';
			} else {
				$data['mega'] ="";
			}

		$data['page_title'] = "Tickets || asapdeliveries.com.bd";

		//$data['get_url'] = $this->uri->segment(1);
		//$todayDate =  data('y-m-d');
	
		$clientName = $this->session->userData('Client_NAME');
		$data['ClientDetails'] 	= $this->M_crud->findByUserName('registerform', $clientName);
		$merchantId = $data['ClientDetails']->id;
		 $where = array('merchant_id' => $merchantId);

		$data['AllIssusInfo'] = $this->M_crud->findAll('tickets', $where);
		$this->load->view('clientPanel/tickets/index', $data);
	}
	}


	public function send()
	{ if(isActiveClient()){		
		//FOR MERCHANT ID
		$clientName = $this->session->userData('Client_NAME');
		$ClientDetails 	= $this->M_crud->findByUserName('registerform', $clientName);
		$merchant_id =  $ClientDetails->id;
		$data['merchant_id'] = $merchant_id;

		$data['problem_issue'] = $this->input->post('problem_issue');

		// FOR CURRENT DATE & TIME
		date_default_timezone_set('Asia/Dhaka'); # add your city to set local time zone
		
		$now = date('Y-m-d H:i:s');
		$data['send_date'] = $now;

		$this->M_crud->save('tickets', $data);
		redirect('tickets/1');

	  }
	}
}