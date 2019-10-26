<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tickets extends CI_Controller {

	public function index($id = 0)
	{if(isActiveAdmin()){
		if($id == 1) {
				$data['mega'] 	= 'Tickets Send Successfull';
			} elseif($id == 2) {
				$data['mega'] 	= 'Tickets Send Failed';
			} else {
				$data['mega'] ="";
			}

		$data['page_title'] = "Tickets || asapdeliveries.com.bd";
		$data['AllIssusInfo'] = $this->M_crud->findAllDetails('tickets',$where = array());

		$this->load->view('Backend/tickets/index', $data);
	}
	}


	
}