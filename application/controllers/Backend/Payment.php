<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {

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
		$this->load->view('backend/payment/index', $data);
	  }
	}

	public function generateCMemo()
	{

		if(isActiveAdmin()){

		$data['page_title'] = "Generate Cash Memo || asapdeliveries.com.bd";
		
		// FOR TRACKING ID		
		$ClientDetails 	= $this->M_crud->findABasicInfo('invoice_info', 'id');
		$invoiceID = $ClientDetails->invoice_no;
		
		if(empty($invoiceID)){
		  $invoiceID1 = "#000100";
		  $data['invoiceID1'] = $invoiceID1;
		} else {
		  $data['invoiceID1'] = ++$invoiceID;
		}
		// end invoice id

		$pcateId   = $this->input->post('pcateId');
		$bookingId = $pcateId[0];
		$where = array('id' => $bookingId);
		$onevalue  =  $this->M_crud->findById('booking', $where);
		$merchantId = $onevalue->merchant_id;
		$where = array('id' => $merchantId);
		$data['merchant_details']	= $this->M_crud->findById('registerform', $where);

		$data['checkedWiseCashMemeo']  =  $this->M_crud->findAllCheckedCash($pcateId);
		//print_r($data['merchant_details']);

		$this->load->view('backend/payment/cashMemo', $data);
	}
}

	public function store()
	{
		if(isActiveAdmin()){

		$data['invoice_no'] = $this->input->post('invoice_no');
		$data['merchant_id'] = $this->input->post('merchant_id');
		$data['total_merchant_receivable_amount'] = $this->input->post('total_merchant_receivable_amount');
		$data['total_shipping_cost'] = $this->input->post('total_shipping_cost');
		$data['total_cod'] = $this->input->post('total_cod');

		$payment_dateInput = $this->input->post('payment_date');
		$data['payment_date'] = date("Y-m-d", strtotime($payment_dateInput));

		$data['booking_id_1'] = $this->input->post('booking_id_1');
		$data['booking_id_2'] = $this->input->post('booking_id_2');
		$data['booking_id_3'] = $this->input->post('booking_id_3');
		$data['booking_id_4'] = $this->input->post('booking_id_4');
		$data['booking_id_5'] = $this->input->post('booking_id_5');
		$data['booking_id_6'] = $this->input->post('booking_id_6');
		$data['booking_id_7'] = $this->input->post('booking_id_7');
		$data['booking_id_8'] = $this->input->post('booking_id_8');
		$data['booking_id_9'] = $this->input->post('booking_id_9');
		$data['booking_id_10'] = $this->input->post('booking_id_10');
		$data['booking_id_11'] = $this->input->post('booking_id_11');
		$data['booking_id_12'] = $this->input->post('booking_id_12');
		$data['booking_id_13'] = $this->input->post('booking_id_13');
		$data['booking_id_14'] = $this->input->post('booking_id_14');
		$data['booking_id_15'] = $this->input->post('booking_id_15');
		$data['booking_id_16'] = $this->input->post('booking_id_16');
		$data['booking_id_17'] = $this->input->post('booking_id_17');
		$data['booking_id_18'] = $this->input->post('booking_id_18');
		$data['booking_id_19'] = $this->input->post('booking_id_19');
		$data['booking_id_20'] = $this->input->post('booking_id_20');

		date_default_timezone_set('Asia/Dhaka'); # add your city to set local time zone
		
		$now = date('Y-m-d H:i:s');
		$data['update_date'] = $now;

		$saveData = $this->M_crud->save('invoice_info', $data);
	
		if(!empty($data['booking_id_1'])){
			$where = array('booking_id' => $data['booking_id_1']);
			$paymentDetails = $this->M_crud->findById('payment_status', $where);
			$payment_id = $paymentDetails->id;

			$data2['payment_status'] = '2';
			$this->M_crud->update('payment_status', $data2 , $payment_id);
		}
	
		if(!empty($data['booking_id_2'])){
			$where = array('booking_id' => $data['booking_id_2']);
			$paymentDetails = $this->M_crud->findById('payment_status', $where);
			$payment_id = $paymentDetails->id;

			$data2['payment_status'] = '2';
			$this->M_crud->update('payment_status', $data2 , $payment_id);
		}
	
		if(!empty($data['booking_id_3'])){
			$where = array('booking_id' => $data['booking_id_3']);
			$paymentDetails = $this->M_crud->findById('payment_status', $where);
			$payment_id = $paymentDetails->id;

			$data2['payment_status'] = '2';
			$this->M_crud->update('payment_status', $data2 , $payment_id);
		}
	
		if(!empty($data['booking_id_4'])){
			$where = array('booking_id' => $data['booking_id_4']);
			$paymentDetails = $this->M_crud->findById('payment_status', $where);
			$payment_id = $paymentDetails->id;

			$data2['payment_status'] = '2';
			$this->M_crud->update('payment_status', $data2 , $payment_id);
		}
	
		if(!empty($data['booking_id_5'])){
			$where = array('booking_id' => $data['booking_id_5']);
			$paymentDetails = $this->M_crud->findById('payment_status', $where);
			$payment_id = $paymentDetails->id;

			$data2['payment_status'] = '2';
			$this->M_crud->update('payment_status', $data2 , $payment_id);
		}
	
		if(!empty($data['booking_id_6'])){
			$where = array('booking_id' => $data['booking_id_6']);
			$paymentDetails = $this->M_crud->findById('payment_status', $where);
			$payment_id = $paymentDetails->id;

			$data2['payment_status'] = '2';
			$this->M_crud->update('payment_status', $data2 , $payment_id);
		}
	
		if(!empty($data['booking_id_7'])){
			$where = array('booking_id' => $data['booking_id_7']);
			$paymentDetails = $this->M_crud->findById('payment_status', $where);
			$payment_id = $paymentDetails->id;

			$data2['payment_status'] = '2';
			$this->M_crud->update('payment_status', $data2 , $payment_id);
		}
	
		if(!empty($data['booking_id_8'])){
			$where = array('booking_id' => $data['booking_id_8']);
			$paymentDetails = $this->M_crud->findById('payment_status', $where);
			$payment_id = $paymentDetails->id;

			$data2['payment_status'] = '2';
			$this->M_crud->update('payment_status', $data2 , $payment_id);
		}
	
		if(!empty($data['booking_id_9'])){
			$where = array('booking_id' => $data['booking_id_9']);
			$paymentDetails = $this->M_crud->findById('payment_status', $where);
			$payment_id = $paymentDetails->id;

			$data2['payment_status'] = '2';
			$this->M_crud->update('payment_status', $data2 , $payment_id);
		}
	
		if(!empty($data['booking_id_10'])){
			$where = array('booking_id' => $data['booking_id_10']);
			$paymentDetails = $this->M_crud->findById('payment_status', $where);
			$payment_id = $paymentDetails->id;

			$data2['payment_status'] = '2';
			$this->M_crud->update('payment_status', $data2 , $payment_id);
		}
	
		if(!empty($data['booking_id_11'])){
			$where = array('booking_id' => $data['booking_id_11']);
			$paymentDetails = $this->M_crud->findById('payment_status', $where);
			$payment_id = $paymentDetails->id;

			$data2['payment_status'] = '2';
			$this->M_crud->update('payment_status', $data2 , $payment_id);
		}
	
		if(!empty($data['booking_id_12'])){
			$where = array('booking_id' => $data['booking_id_12']);
			$paymentDetails = $this->M_crud->findById('payment_status', $where);
			$payment_id = $paymentDetails->id;

			$data2['payment_status'] = '2';
			$this->M_crud->update('payment_status', $data2 , $payment_id);
		}
	
		if(!empty($data['booking_id_13'])){
			$where = array('booking_id' => $data['booking_id_13']);
			$paymentDetails = $this->M_crud->findById('payment_status', $where);
			$payment_id = $paymentDetails->id;

			$data2['payment_status'] = '2';
			$this->M_crud->update('payment_status', $data2 , $payment_id);
		}
	
		if(!empty($data['booking_id_14'])){
			$where = array('booking_id' => $data['booking_id_14']);
			$paymentDetails = $this->M_crud->findById('payment_status', $where);
			$payment_id = $paymentDetails->id;

			$data2['payment_status'] = '2';
			$this->M_crud->update('payment_status', $data2 , $payment_id);
		}
	
		if(!empty($data['booking_id_15'])){
			$where = array('booking_id' => $data['booking_id_15']);
			$paymentDetails = $this->M_crud->findById('payment_status', $where);
			$payment_id = $paymentDetails->id;

			$data2['payment_status'] = '2';
			$this->M_crud->update('payment_status', $data2 , $payment_id);
		}
	
		if(!empty($data['booking_id_16'])){
			$where = array('booking_id' => $data['booking_id_16']);
			$paymentDetails = $this->M_crud->findById('payment_status', $where);
			$payment_id = $paymentDetails->id;

			$data2['payment_status'] = '2';
			$this->M_crud->update('payment_status', $data2 , $payment_id);
		}
	
		if(!empty($data['booking_id_17'])){
			$where = array('booking_id' => $data['booking_id_17']);
			$paymentDetails = $this->M_crud->findById('payment_status', $where);
			$payment_id = $paymentDetails->id;

			$data2['payment_status'] = '2';
			$this->M_crud->update('payment_status', $data2 , $payment_id);
		}
	
		if(!empty($data['booking_id_18'])){
			$where = array('booking_id' => $data['booking_id_18']);
			$paymentDetails = $this->M_crud->findById('payment_status', $where);
			$payment_id = $paymentDetails->id;

			$data2['payment_status'] = '2';
			$this->M_crud->update('payment_status', $data2 , $payment_id);
		}
	
		if(!empty($data['booking_id_19'])){
			$where = array('booking_id' => $data['booking_id_19']);
			$paymentDetails = $this->M_crud->findById('payment_status', $where);
			$payment_id = $paymentDetails->id;

			$data2['payment_status'] = '2';
			$this->M_crud->update('payment_status', $data2 , $payment_id);
		}
	
		if(!empty($data['booking_id_20'])){
			$where = array('booking_id' => $data['booking_id_20']);
			$paymentDetails = $this->M_crud->findById('payment_status', $where);
			$payment_id = $paymentDetails->id;

			$data2['payment_status'] = '2';
			$this->M_crud->update('payment_status', $data2 , $payment_id);
		}
		

		redirect('Backend/Payment/index/1');
	}
}
}