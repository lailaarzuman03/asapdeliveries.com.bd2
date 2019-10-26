<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('loginAdmin'))
{
	function loginAdmin()
	{
		$_CI = &get_instance();


		$userId				 = $_CI->input->post('adminname');
		$userPass			 = $_CI->input->post('password');
		$pass_md5			 = md5($userPass);

		$model				 = $_CI->M_user->findByUserName($userId);

		$data['model'] 	     =  $model;

		if( !empty($model) && $model->password  == $pass_md5) {

			setAdminData($userId);

			redirect('backend/dashboard');

		}  else  {

			$data['msg']	= 'User ID or Password is not Valid ! Please Try Again.';

			$data['page_title'] = " Welcome to asapdeliveries.com.bd";
			$_CI->load->view('backend/home', $data);

		}

	}

}


if ( ! function_exists('setAdminData'))
{
	function setAdminData($user)
	{
		$_CI = &get_instance();
		$userData	= array(

			'ADMIN_NAME'    => $user

		);

		$_CI->session->set_userdata($userData);

	}

}





if ( ! function_exists('isActiveAdmin'))

{

	function isActiveAdmin()

	{

		$_CI = &get_instance();

		$ADMIN_NAME = $_CI->session->userData('ADMIN_NAME');



		if( $ADMIN_NAME == NULL ) {

			redirect('backend/login');

		}

		return true;

	}

}





if ( ! function_exists('logoutAdmin'))

{

	function logoutAdmin()

	{

		setAdminData(NULL);



		if(!isActiveAdmin()){

			redirect('backend/login');

		}

	}

}



// ------------------------------------------------------------------------

/* End of file authentication_helper.php */

/* Location: ./application/helpers/authentication_helper.php */
