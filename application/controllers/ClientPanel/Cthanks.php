<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cthanks extends CI_Controller {
	public function index($id = 0)
	{
		if($id == 1) {
				$data['mega'] 	= '1';

			} else if ($id == 2) {
				$data['mega'] 	= '2';

			} else {
				$data['mega'] 	= '';
			}
		$data['page_title'] = " Welcome to asapdeliveries.com.bd";
		$this->load->view('clientPanel/Cthanks', $data);
}

}
