<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment_info extends CI_Controller {

	public function index($id = 0)
	{if(isActiveClient()){
		if($id == 1) {
				$data['mega'] 	= 'Booking Send Successfull';
			} elseif($id == 2) {
				$data['mega'] 	= 'Booking Send Failed';
			} else {
				$data['mega'] ="";
			}

		$data['page_title'] = "Booking || asapdeliveries.com.bd";

		//$data['get_url'] = $this->uri->segment(1);
		//$todayDate =  data('y-m-d');
		
		$data['allRegisterinfo'] = $this->M_crud->findAll('registerform');
	
		$clientName = $this->session->userData('Client_NAME');
		$data['ClientDetails'] 	= $this->M_crud->findByUserName('registerform', $clientName);

		$merchant_id = $data['ClientDetails']->id;
		$data['AllBookingInfo'] = $this->M_crud->findDetailsForMarchentBooking($merchant_id);

		$data['allCity'] = $this->M_crud->findAll('city');
		$this->load->view('clientPanel/payment_info/index', $data);
	 }
	}

	public function search()
	{if(isActiveClient()){
		$from_date1 = $this->input->post('from_date1');
		$to_date1 = $this->input->post('to_date1');
		
		$fromDate = date("Y-m-d", strtotime($from_date1));
		$toDate = date("Y-m-d", strtotime($to_date1));

		$clientName = $this->session->userData('Client_NAME');
		$data['ClientDetails'] 	= $this->M_crud->findByUserName('registerform', $clientName);
		$merchant_id = $data['ClientDetails']->id;		
		$data['AllBookingInfo'] = $this->M_crud->findDetailsForfromToDate('booking', $merchant_id, $fromDate, $toDate);
		$this->load->view('clientPanel/payment_info/search_view', $data);
	 }
    }
	
}