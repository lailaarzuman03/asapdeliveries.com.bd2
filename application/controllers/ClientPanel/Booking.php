<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

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
		$where = array('merchant_id' => $data['ClientDetails']->id);

		$data['promoInfo'] = $this->M_crud->findById('promo_code', $where);

		$data['allCity'] = $this->M_crud->findAll('city');
		$this->load->view('clientPanel/booking/index', $data);
	}
	}

	public function sumFunction()
	{
		echo $data['result']  = $this->input->post('result');
		
	}

	public function store()
	{ if(isActiveClient()){

		// FOR TRACKING ID		
		$ClientDetails 	= $this->M_crud->findABasicInfo('booking','id');
		$trackingID = $ClientDetails->tracking_id;
		
		if($trackingID == ""):
		
		  $trackingID = "ASAP#00000200";
		endif;
		
		$last_tracking_id = $trackingID;
		$data['tracking_id'] = ++$last_tracking_id;

		$data['recepient_number'] = $this->input->post('recepient_number');
		$data['recepient_name'] = $this->input->post('recepient_name');
		$data['recepient_address'] = $this->input->post('recepient_address');
		$data['city'] = $this->input->post('city');
		$data['recepient_area'] = $this->input->post('recepient_area');
		$data['recepient_landmark'] = $this->input->post('recepient_landmark');
		$data['shipping_cost'] = $this->input->post('shipping_cost');
		$data['cod'] = $this->input->post('cod');
		$data['total_cost'] = $this->input->post('total_cost');
		$data['product_id'] = $this->input->post('product_id');
		$data['parcel_type'] = $this->input->post('parcel_type');
		$data['payment_method'] = $this->input->post('payment_method');
		$data['package_name'] = $this->input->post('package_name');
		$data['product_price'] = $this->input->post('product_price');
		$data['delivery_date'] = $this->input->post('delivery_date');
		$data['delivery_time'] = $this->input->post('delivery_time');
		$data['no_of_item'] = $this->input->post('no_of_item');
		$data['item_type'] = $this->input->post('item_type');
		$data['instructions'] = $this->input->post('instructions');
		

		//FOR MERCHANT ID
		$clientName = $this->session->userData('Client_NAME');
		$ClientDetails 	= $this->M_crud->findByUserName('registerform', $clientName);
		$merchant_id =  $ClientDetails->id;
		$data['merchant_id'] = $merchant_id;

		$data['status'] = '1';

		// FOR CURRENT DATE & TIME
		date_default_timezone_set('Asia/Dhaka'); # add your city to set local time zone
		
		$now = date('Y-m-d H:i:s');
		$data['booking_date'] = date('Y-m-d');
		$data['upload_date'] = $now;

		$this->M_crud->save('booking', $data);
		// end booking insert 
		// for insert payment status

		$where2 = array('tracking_id' => $data['tracking_id']);
		$bookingInfo = $this->M_crud->findById('booking', $where2);

		$data1['booking_id'] = $bookingInfo->id;
		$data1['tracking_id'] = $data['tracking_id'];
		$data1['merchant_id'] = $merchant_id;;
		$data1['percel_status'] = 1;
		$data1['payment_status'] = 1;
		$data1['collected_amount'] = "";
		$data1['collected_date'] = "";
		$data1['user_id'] = 1;
		$data1['update_date'] =  $now;

		$this->M_crud->save('payment_status', $data1);
		redirect('booking/1');

	  }
	}
}