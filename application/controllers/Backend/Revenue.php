<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Revenue extends CI_Controller {

	public function index($id = 0)
	{if(isActiveAdmin()){
		if($id == 1) {
				$data['mega'] 	= 'Payment Status Update Successfull';
			} elseif($id == 2) {
				$data['mega'] 	= 'Booking Send Failed';
			} else {
				$data['mega'] ="";
			}

		$data['page_title'] = "Revenue || asapdeliveries.com.bd";

		//$data['get_url'] = $this->uri->segment(1);
		//$todayDate =  data('y-m-d');
		
		$data['AllinvoiceInfo'] = $this->M_crud->findAll('invoice_info', $where = array(), 'id', 'desc');

		$this->load->view('backend/revenue/index', $data);
	  }
	}

	public function search()
	{if(isActiveAdmin()){
		$from_date1 = $this->input->post('from_date1');
		$to_date1 = $this->input->post('to_date1');
		
		$fromDate = date("Y-m-d", strtotime($from_date1));
		$toDate = date("Y-m-d", strtotime($to_date1));

		
		$data['AllinvoiceInfo'] = $this->M_crud->findByOnlyfromToDate('invoice_info', $fromDate, $toDate);

		 $this->load->view('backend/revenue/search_view', $data);
	 }
    }

	public function viewFunction()
	{
		if(isActiveAdmin()){
		//$data['get_url'] = $this->uri->segment(1);
		$invoiceId = $this->uri->segment(4);
		$data['page_title'] = "Invoice View || asapdeliveries.com.bd";
		
		$where = array('id' => $invoiceId);
		$data['invoice_info']  =  $this->M_crud->findById('invoice_info', $where);
		
		$merchantId = $data['invoice_info']->merchant_id;
		$where = array('id' => $merchantId);
		$data['merchant_details']	= $this->M_crud->findById('registerform', $where);

		$idList =  $data['invoice_info']->booking_id_1;
		if (!empty($idList)) {
			$where = array('id' => $idList);
			$data['bookingInfo1']  =  $this->M_crud->findById('booking', $where);

			$where = array('booking_id' => $idList);
            $data['payment_details']	= $this->M_crud->findById('payment_status', $where);
		}

		$idList2 =  $data['invoice_info']->booking_id_2;
		if (!empty($idList2)) {
			$where = array('id' => $idList2);
			$data['bookingInfo2']  =  $this->M_crud->findById('booking', $where);

			$where = array('booking_id' => $idList2);
            $data['payment_details2']	= $this->M_crud->findById('payment_status', $where);
		}

		$idList3 =  $data['invoice_info']->booking_id_3;
		if (!empty($idList3)) {
			$where = array('id' => $idList3);
			$data['bookingInfo3']  =  $this->M_crud->findById('booking', $where);

			$where = array('booking_id' => $idList3);
            $data['payment_details3']	= $this->M_crud->findById('payment_status', $where);
		}

		$idList4 =  $data['invoice_info']->booking_id_4;
		if (!empty($idList4)) {
			$where = array('id' => $idList4);
			$data['bookingInfo4']  =  $this->M_crud->findById('booking', $where);

			$where = array('booking_id' => $idList4);
            $data['payment_details4']	= $this->M_crud->findById('payment_status', $where);
		}

		$idList5 =  $data['invoice_info']->booking_id_5;
		if (!empty($idList5)) {
			$where = array('id' => $idList5);
			$data['bookingInfo5']  =  $this->M_crud->findById('booking', $where);

			$where = array('booking_id' => $idList5);
            $data['payment_details5']	= $this->M_crud->findById('payment_status', $where);
		}

		$idList6 =  $data['invoice_info']->booking_id_6;
		if (!empty($idList6)) {
			$where = array('id' => $idList6);
			$data['bookingInfo6']  =  $this->M_crud->findById('booking', $where);

			$where = array('booking_id' => $idList6);
            $data['payment_details6']	= $this->M_crud->findById('payment_status', $where);
		}

		$idList7 =  $data['invoice_info']->booking_id_7;
		if (!empty($idList7)) {
			$where = array('id' => $idList7);
			$data['bookingInfo7']  =  $this->M_crud->findById('booking', $where);

			$where = array('booking_id' => $idList7);
            $data['payment_details7']	= $this->M_crud->findById('payment_status', $where);
		}

		$idList8 =  $data['invoice_info']->booking_id_8;
		if (!empty($idList8)) {
			$where = array('id' => $idList8);
			$data['bookingInfo8']  =  $this->M_crud->findById('booking', $where);

			$where = array('booking_id' => $idList8);
            $data['payment_details8']	= $this->M_crud->findById('payment_status', $where);
		}

		$idList9 =  $data['invoice_info']->booking_id_9;
		if (!empty($idList9)) {
			$where = array('id' => $idList9);
			$data['bookingInfo9']  =  $this->M_crud->findById('booking', $where);

			$where = array('booking_id' => $idList9);
            $data['payment_details9']	= $this->M_crud->findById('payment_status', $where);
		}

		$idList10 =  $data['invoice_info']->booking_id_10;
		if (!empty($idList10)) {
			$where = array('id' => $idList10);
			$data['bookingInfo10']  =  $this->M_crud->findById('booking', $where);

			$where = array('booking_id' => $idList10);
            $data['payment_details10']	= $this->M_crud->findById('payment_status', $where);
		}

		$idList11 =  $data['invoice_info']->booking_id_11;
		if (!empty($idList11)) {
			$where = array('id' => $idList11);
			$data['bookingInfo11']  =  $this->M_crud->findById('booking', $where);

			$where = array('booking_id' => $idList11);
            $data['payment_details11']	= $this->M_crud->findById('payment_status', $where);
		}

		$idList12 =  $data['invoice_info']->booking_id_12;
		if (!empty($idList12)) {
			$where = array('id' => $idList12);
			$data['bookingInfo12']  =  $this->M_crud->findById('booking', $where);

			$where = array('booking_id' => $idList12);
            $data['payment_details12']	= $this->M_crud->findById('payment_status', $where);
		}

		$idList13 =  $data['invoice_info']->booking_id_13;
		if (!empty($idList13)) {
			$where = array('id' => $idList13);
			$data['bookingInfo13']  =  $this->M_crud->findById('booking', $where);

			$where = array('booking_id' => $idList13);
            $data['payment_details13']	= $this->M_crud->findById('payment_status', $where);
		}

		$idList14 =  $data['invoice_info']->booking_id_14;
		if (!empty($idList14)) {
			$where = array('id' => $idList14);
			$data['bookingInfo14']  =  $this->M_crud->findById('booking', $where);

			$where = array('booking_id' => $idList14);
            $data['payment_details14']	= $this->M_crud->findById('payment_status', $where);
		}

		$idList15 =  $data['invoice_info']->booking_id_15;
		if (!empty($idList15)) {
			$where = array('id' => $idList15);
			$data['bookingInfo15']  =  $this->M_crud->findById('booking', $where);

			$where = array('booking_id' => $idList15);
            $data['payment_details15']	= $this->M_crud->findById('payment_status', $where);
		}

		$idList16 =  $data['invoice_info']->booking_id_16;
		if (!empty($idList16)) {
			$where = array('id' => $idList16);
			$data['bookingInfo16']  =  $this->M_crud->findById('booking', $where);

			$where = array('booking_id' => $idList16);
            $data['payment_details16']	= $this->M_crud->findById('payment_status', $where);
		}

		$idList17 =  $data['invoice_info']->booking_id_17;
		if (!empty($idList17)) {
			$where = array('id' => $idList17);
			$data['bookingInfo17']  =  $this->M_crud->findById('booking', $where);

			$where = array('booking_id' => $idList17);
            $data['payment_details17']	= $this->M_crud->findById('payment_status', $where);
		}

		$idList18 =  $data['invoice_info']->booking_id_18;
		if (!empty($idList18)) {
			$where = array('id' => $idList18);
			$data['bookingInfo18']  =  $this->M_crud->findById('booking', $where);

			$where = array('booking_id' => $idList18);
            $data['payment_details18']	= $this->M_crud->findById('payment_status', $where);
		}

		$idList19 =  $data['invoice_info']->booking_id_19;
		if (!empty($idList19)) {
			$where = array('id' => $idList19);
			$data['bookingInfo19']  =  $this->M_crud->findById('booking', $where);

			$where = array('booking_id' => $idList19);
            $data['payment_details19']	= $this->M_crud->findById('payment_status', $where);
		}

		$idList20 =  $data['invoice_info']->booking_id_20;
		if (!empty($idList20)) {
			$where = array('id' => $idList20);
			$data['bookingInfo20']  =  $this->M_crud->findById('booking', $where);

			$where = array('booking_id' => $idList20);
            $data['payment_details20']	= $this->M_crud->findById('payment_status', $where);
		}
		
		// print_r($data['invoice_info']);

		$this->load->view('backend/revenue/cashMemo', $data);
	}
}
	
}