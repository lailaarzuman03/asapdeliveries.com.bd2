<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CashMemo extends CI_Controller {

	public function index($id = 0)
	{if(isActiveAdmin()){
		if($id == 1) {
				$data['mega'] 	= 'Payment Status Update Successfull';
			} elseif($id == 2) {
				$data['mega'] 	= 'Booking Send Failed';
			} else {
				$data['mega'] ="";
			}

		$data['page_title'] = "Generate Cash Memo || asapdeliveries.com.bd";

		//$data['get_url'] = $this->uri->segment(1);
		//$todayDate =  data('y-m-d');
		
		$data['allRegisterinfo'] = $this->M_crud->findAll('registerform');
	
		$where = array();
		$data['AllBookingInfo'] = $this->M_crud->findAllDetailsForBooking();

		$data['allCity'] = $this->M_crud->findAll('city');
		$this->load->view('backend/cashMemo/index', $data);
	  }
	}

	public function generateCMemo()
	{
		if(isActiveAdmin()){
		$data['page_title'] = "Generate Cash Memo || asapdeliveries.com.bd";

		$pcateId   = $this->input->post('pcateId');
		$bookingId = $pcateId[0];
		$where = array('id' => $bookingId);
		$onevalue  =  $this->M_crud->findById('booking', $where);
		$merchantId = $onevalue->merchant_id;
		$where = array('id' => $merchantId);
		$data['merchant_details']	= $this->M_crud->findById('registerform', $where);

		$data['checkedWiseCashMemeo']  =  $this->M_crud->findAllCheckedCash($pcateId);
		//print_r($data['merchant_details']);

		$this->load->view('backend/cashMemo/cashMemo', $data);
	}
}
	
}





