<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

	public function index($id = 0)
	{if(isActiveAdmin()){
		if($id == 1) {
				$data['mega'] 	= 'Payment Status Update Successfull';
			} elseif($id == 2) {
				$data['mega'] 	= 'Booking Send Failed';
			} else {
				$data['mega'] ="";
			}

		$data['page_title'] = "Booking || asapdeliveries.com.bd";

		//$data['get_url'] = $this->uri->segment(1);
		//$todayDate =  data('y-m-d');
		
		$data['allRegisterinfo'] = $this->M_crud->findAll('registerform');
	
		$where = array();
		$data['AllBookingInfo'] = $this->M_crud->findAllDetailsForBooking();

		$data['allCity'] = $this->M_crud->findAll('city');
		$this->load->view('backend/booking/index', $data);
	  }
	}

	public function viewFunction(){
	  if(isActiveAdmin()){
		$data['rowId']  = $this->input->post('rowId');
		$where = array('id' => $data['rowId']);

		$data['rowInfo'] = $this->M_crud->findById('booking', $where);

		$where = array('id' => $data['rowInfo']->merchant_id);
		$data['merchantDetails'] = $this->M_crud->findById('registerform', $where);	

		$where = array('id' => $data['rowInfo']->city);
		$data['cityDetails'] = $this->M_crud->findById('city', $where);

		$where = array('parcel_value' => $data['rowInfo']->package_name);
		$data['packageDetails'] = $this->M_crud->findById('package_name', $where);	
		
		$this->load->view('backend/booking/viewFunctionPage', $data);
	  }
	}

	public function editFunction(){
	  if(isActiveAdmin()){

	  	$this->uri->segment(3);
		$data['rowId']  = $this->input->post('rowId');
		$where = array('id' => $data['rowId']);

		$data['rowInfo'] = $this->M_crud->findById('booking', $where);

		// FOR PAYMENT
		$where = array('booking_id' => $data['rowInfo']->id);
		$data['paymentDetails'] = $this->M_crud->findById('payment_status', $where);

		$where = array('id' => $data['rowInfo']->merchant_id);
		$data['merchantDetails'] = $this->M_crud->findById('registerform', $where);	

		$where = array('id' => $data['rowInfo']->city);
		$data['cityDetails'] = $this->M_crud->findById('city', $where);

		$where = array('parcel_value' => $data['rowInfo']->package_name);
		$data['packageDetails'] = $this->M_crud->findById('package_name', $where);	
		
		$this->load->view('backend/booking/editFunctionPage', $data);
	  }
	}
	
	public function payment_update(){
	  if(isActiveAdmin()){
		
		$ADMIN_NAME = $this->session->userData('ADMIN_NAME');
		$adminDetails 	= $this->M_user->findByUserName('user', $ADMIN_NAME);
		
		$id = $this->input->post('id');
		$data['booking_id'] = $this->input->post('booking_id');
		$data['tracking_id'] = $this->input->post('tracking_id');
		$data['merchant_id'] = $this->input->post('merchant_id');
		$data['percel_status'] = $this->input->post('percel_status');
		$data['payment_status'] = $this->input->post('payment_status');
		$data['collected_amount'] = $this->input->post('collected_amount');
		$data['collected_date'] = $this->input->post('collected_date');
		$data['user_id'] = '1';
		$data['update_date'] =  date('Y-m-d H:i:s');

		$this->M_crud->update('payment_status', $data, $id);

		redirect('Backend/Booking/index/1');
	  }
	}
	
}