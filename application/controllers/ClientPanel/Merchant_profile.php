<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Merchant_profile extends CI_Controller {

	public function index($id = 0)
	{ if(isActiveClient()){
			if($id == 1) {
				$data['mega'] 	= 'Update Successfull';
			} elseif($id == 2) {
					$data['mega'] 	= 'Update Failed';
				} else {
				$data['mega'] ="";
			}
			$data['page_title'] = " Payment Details || asapdeliveries.com.bd";

			//$data['get_url'] = $this->uri->segment(1);

			$clientName = $this->session->userData('Client_NAME');
			$data['ClientDetails'] 	= $this->M_crud->findByUserName('registerform', $clientName);
			$data['allRegisterinfo'] = $this->M_crud->findAll('registerform');

			$data['allCity'] = $this->M_crud->findAll('city');

			$this->load->view('clientPanel/merchant_profile/index', $data);
		}
    }

    public function update($value='')
    {if(isActiveClient()){
    	$id = $this->input->post('id');
    	$data['business_name'] = $this->input->post('business_name');
    	$data['full_name'] = $this->input->post('full_name');
    	$data['mobile'] = $this->input->post('mobile');
    	$data['email'] = $this->input->post('email');
    	$data['city_id'] = $this->input->post('city_id');
    	$data['address'] = $this->input->post('address');
    	$data['facebook_url'] = $this->input->post('facebook_url');
    	$data['cpassword'] = $this->input->post('password');
    	$data['payment_method'] = $this->input->post('payment_method');
    	$data['payment_details'] = $this->input->post('payment_details');

		$this->M_crud->update('registerform', $data , $id);
		redirect('merchant_profile/1');

    	}
    }
}


