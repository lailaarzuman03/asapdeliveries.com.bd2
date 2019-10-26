<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index($id = 0)
	{
		if($id == 1) {
				$data['mega'] 	= '1';

			} else if ($id == 2) {
				$data['mega'] 	= '2';

			} else {
				$data['mega'] 	= '';
			}

			// visitor counter;
				$ip_address = $this->input->ip_address();
				$data1['ip_address'] = $ip_address;
				$date 		    = date('Y-m-d');
				$data1['date']  = $date;

				$where = array('ip_address' => $ip_address , 'date' => $date);
				$dateMatch = $this->M_visitor_counter->findByAbout($where);

				if (empty($dateMatch)) {
						$this->M_visitor_counter->save($data1);
					}
			// End Visitor Counter

					
		$data['page_title'] = " Welcome to asapdeliveries.com.bd";
		$data['allCity'] = $this->M_crud->findAll('city');
		$this->load->view('home', $data);
	}

	public function email_match()
	{
		$email_id  = $this->input->post('email_id');
		$where = array('email' => $email_id);
		$data['findMailValue'] = $this->M_crud->findById('registerform', $where);
		$this->load->view('email_match', $data);		
	}


	public function client_user_name()
	{
		$client_user_name  = $this->input->post('client_user_name');
		$where = array('client_user_name' => $client_user_name);
		$data['find_client_user_nameValue'] = $this->M_crud->findById('registerform', $where);
		$this->load->view('email_match', $data);		
	}

	public function register()
	{
		$data['business_name']	= $this->input->post('business_name');
		$data['full_name']	= $this->input->post('full_name');
		$data['mobile']	= $this->input->post('mobile');
		$data['email']	= $this->input->post('email');
		$data['city_id']	= $this->input->post('city_id');
		$data['address']	= $this->input->post('address');
		$data['facebook_url']	= $this->input->post('facebook_url');
		$data['client_user_name']	= $this->input->post('client_user_name');
		$data['cpassword']	= $this->input->post('password');
		$data['payment_method']	= $this->input->post('payment_method');
		$data['payment_details']	= $this->input->post('payment_details');
		$data['register_date']	= date('y-m-d');
		$data['status']	= '0';

		$this->M_crud->save('registerform', $data);
		redirect('cthanks/1');
	}
}
