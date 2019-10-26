<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PromoCode extends CI_Controller {
	public function index($id = 0)
	{if(isActiveAdmin()){
		if($id == 1) {
			$data['mega'] 	= 'Promo Send Successfull';
		} elseif($id == 2) {
				$data['mega'] 	= 'Promo Send Failed';
			} else {
			$data['mega'] ="";
		}

		$data['page_title'] = "Promo Code || Welcome to asapdeliveries.com.bd";
		$data['allRegisterinfo'] = $this->M_crud->findAll('registerform');
		$this->load->view('backend/promoCode/index', $data);
		}
	}

	public function store()
	{if(isActiveAdmin()){
		$ADMIN_NAME = $this->session->userData('ADMIN_NAME');
		$adminDetails 	= $this->M_user->findByUserName($ADMIN_NAME);

		$data['merchant_id']	= $this->input->post('merchant_id');
		$data['cod']	= $this->input->post('cod');
		$end_date = $this->input->post('end_date');
		$data['end_date']	= date("Y-m-d", strtotime($end_date));

		$data['standard1']	= "Standard ".$this->input->post('standard1');
		$data['standard2']	= "Standard ".$this->input->post('standard2');
		$data['standard3']	= "Standard ".$this->input->post('standard3');
		$data['standard4']	= "Standard ".$this->input->post('standard4');

		$data['speedy1']	= "Speedy ".$this->input->post('speedy1');
		$data['speedy2']	= "Speedy ".$this->input->post('speedy2');
		$data['speedy3']	= "Speedy ".$this->input->post('speedy3');
		$data['speedy4']	= "Speedy ".$this->input->post('speedy4');


		$data['asap1']	= "ASAP ".$this->input->post('asap1');
		$data['asap2']	= "ASAP ".$this->input->post('asap2');
		$data['asap3']	= "ASAP ".$this->input->post('asap3');
		$data['asap4']	= "ASAP ".$this->input->post('asap4');


		$data['nationwide1']	= "Nationwide ".$this->input->post('nationwide1');
		$data['nationwide2']	= "Nationwide ".$this->input->post('nationwide2');
		$data['nationwide3']	= "Nationwide ".$this->input->post('nationwide3');
		$data['nationwide4']	= "Nationwide ".$this->input->post('nationwide4');

		$data['user_id']	= $adminDetails->id;
		$data['status']	= '1';
		$data['upload_date']	= date('y-m-d');

		$this->M_crud->save('promo_code', $data);
		redirect('Backend/promoCode/1');
	  }
	}

	
	public function update()
	{if(isActiveAdmin()){
		$ADMIN_NAME = $this->session->userData('ADMIN_NAME');
		$adminDetails 	= $this->M_user->findByUserName($ADMIN_NAME);

		$id = $this->input->post('id');
		$data['merchant_id']	= $this->input->post('merchant_id');
		$data['cod']	= $this->input->post('cod');
		$data['end_date']	= $this->input->post('end_date');

		$data['standard1']	= "Standard ".$this->input->post('standard1');
		$data['standard2']	= "Standard ".$this->input->post('standard2');
		$data['standard3']	= "Standard ".$this->input->post('standard3');
		$data['standard4']	= "Standard ".$this->input->post('standard4');

		$data['speedy1']	= "Speedy ".$this->input->post('speedy1');
		$data['speedy2']	= "Speedy ".$this->input->post('speedy2');
		$data['speedy3']	= "Speedy ".$this->input->post('speedy3');
		$data['speedy4']	= "Speedy ".$this->input->post('speedy4');

		$data['asap1']	= "ASAP ".$this->input->post('asap1');
		$data['asap2']	= "ASAP ".$this->input->post('asap2');
		$data['asap3']	= "ASAP ".$this->input->post('asap3');
		$data['asap4']	= "ASAP ".$this->input->post('asap4');

		$data['nationwide1']	= "Nationwide ".$this->input->post('nationwide1');
		$data['nationwide2']	= "Nationwide ".$this->input->post('nationwide2');
		$data['nationwide3']	= "Nationwide ".$this->input->post('nationwide3');
		$data['nationwide4']	= "Nationwide ".$this->input->post('nationwide4');

		$data['user_id']	= $adminDetails->id;
		$data['status']	= '1';
		$data['upload_date']	= date('y-m-d');

		$this->M_crud->update('promo_code', $data, $id);
		redirect('Backend/promoCode/3');
	  }
	}
}
