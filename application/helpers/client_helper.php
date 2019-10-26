<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('loginClient'))
{
	function loginClient()
	{
		$_CI = &get_instance();


		$client_user_name	 = $_CI->input->post('client_user_name');
		$cpassword			 = $_CI->input->post('cpassword');
		// $pass_md5			 = md5($cpassword);
		$pass_md5			 = $cpassword;

		$model				 = $_CI->M_crud->findByUserName('registerform', $client_user_name);

		$data['model'] 	     =  $model;

		if( !empty($model) && $model->cpassword  == $pass_md5) {

			setClientData($client_user_name);

			redirect('ClientPanel/CDashboard');

		}  else  {

			$data['msg']	= 'User ID or Password is not Valid ! Please Try Again.';

			$data['page_title'] = " Welcome to asapdeliveries.com.bd";
			$_CI->load->view('clientPanel/home', $data);

		}

	}

}


if ( ! function_exists('setClientData'))
{
	function setClientData($user)
	{
		$_CI = &get_instance();
		$userData	= array(

			'Client_NAME'    => $user

		);

		$_CI->session->set_userdata($userData);

	}

}





if ( ! function_exists('isActiveClient'))

{

	function isActiveClient()

	{

		$_CI = &get_instance();

		$Client_NAME = $_CI->session->userData('Client_NAME');



		if( $Client_NAME == NULL ) {

			redirect('login');

		}

		return true;

	}

}





if ( ! function_exists('logoutClient'))

{

	function logoutClient()

	{

		setClientData(NULL);



		if(!isActiveClient()){

			redirect('login');

		}

	}

}



// ------------------------------------------------------------------------

/* End of file authentication_helper.php */

/* Location: ./application/helpers/authentication_helper.php */
