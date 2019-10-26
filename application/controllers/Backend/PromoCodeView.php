<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PromoCodeView extends CI_Controller {
	public function index($id = 0)
	{if(isActiveAdmin()){
		if($id == 1) {
			$data['mega'] 	= 'Promo Send Successfull';
		} elseif($id == 2) {
			$data['mega'] 	= 'Promo Send Failed';
		} elseif($id == 3) {
			$data['mega'] 	= 'Promo Update Successfull';
		} else {
			$data['mega'] ="";
		}

		$data['page_title'] = "Promo Code || Welcome to asapdeliveries.com.bd";
		$data['allRegisterinfo'] = $this->M_crud->findAll('registerform');
		$data['allpromoList'] = $this->M_crud->findAllDetails('promo_code');
		$this->load->view('backend/promoCode/promoCodeView', $data);
		}
	}

	public function viewFunction(){
	  if(isActiveAdmin()){
		$data['rowId']  = $this->input->post('rowId');
		$where = array('id' => $data['rowId']);

		$data['rowInfo'] = $this->M_crud->findById('promo_code', $where);
		$where = array('id' => $data['rowInfo']->merchant_id);
		$data['merchantDetails'] = $this->M_crud->findById('registerform', $where);	
		
		$this->load->view('backend/promoCode/viewFunctionPage', $data);
	  }
	}

	public function store()
	{if(isActiveAdmin()){
		$ADMIN_NAME = $this->session->userData('ADMIN_NAME');
		$adminDetails 	= $this->M_user->findByUserName($ADMIN_NAME);

		$data['merchant_id']	= $this->input->post('merchant_id');
		$data['cod']	= $this->input->post('cod');
		$data['end_date']	= $this->input->post('end_date');

		$data['standard1']	= $this->input->post('standard1');
		$data['standard2']	= $this->input->post('standard2');
		$data['standard3']	= $this->input->post('standard3');
		$data['standard4']	= $this->input->post('standard4');

		$data['speedy1']	= $this->input->post('speedy1');
		$data['speedy2']	= $this->input->post('speedy2');
		$data['speedy3']	= $this->input->post('speedy3');
		$data['speedy4']	= $this->input->post('speedy4');


		$data['asap1']	= $this->input->post('asap1');
		$data['asap2']	= $this->input->post('asap2');
		$data['asap3']	= $this->input->post('asap3');
		$data['asap4']	= $this->input->post('asap4');


		$data['nationwide1']	= $this->input->post('nationwide1');
		$data['nationwide2']	= $this->input->post('nationwide2');
		$data['nationwide3']	= $this->input->post('nationwide3');
		$data['nationwide4']	= $this->input->post('nationwide4');

		$data['user_id']	= $adminDetails->id;
		$data['status']	= '1';
		$data['upload_date']	= date('y-m-d');

		$this->M_crud->save('promo_code', $data);
		redirect('Backend/promoCode/1');
	  }
	}

	public function edit($id = 0)
	{	if(isActiveAdmin()){

		if($id == 1) {
			$data['mega'] 	= 'Promo Send Successfull';
		} elseif($id == 2) {
				$data['mega'] 	= 'Promo Send Failed';
			} else {
			$data['mega'] ="";
		}
		$data['page_title'] = "Promo Code || Welcome to asapdeliveries.com.bd";
		$data['allRegisterinfo'] = $this->M_crud->findAll('registerform');
		$rowid = $this->uri->segment(4);
		$where = array('id' => $rowid);
		$data['rowInfo'] = $this->M_crud->findById('promo_code', $where);
		$this->load->view('backend/promoCode/editPage', $data);
	}

	}

}
