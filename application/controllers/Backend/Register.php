<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function index($id = 0)
	{if(isActiveAdmin()){
		if($id == 1) {
			$data['mega'] 	= 'Message Send Successfull';
		} elseif($id == 2) {
				$data['mega'] 	= 'Message Send Failed';
			} else {
			$data['mega'] ="";
		}

		$data['page_title'] = " Welcome to asapdeliveries.com.bd";
		$data['allRegisterinfo'] = $this->M_crud->findAll('registerform');
		$this->load->view('backend/register/index', $data);
		}
	}

	public function viewFunction()
	{
		$rowId  = $this->input->post('rowId');
		$where = array('id' => $rowId);
		$data['findRowValue'] = $this->M_crud->findById('registerform', $where);
		$this->load->view('backend/register/viewFunction', $data);	
	}

	public function logout() {
		logoutAdmin();
	}
}
