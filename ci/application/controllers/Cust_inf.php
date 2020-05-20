<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Cust_inf extends CI_Controller
{
	public function information()
	{
		$role_id=$this->session->userdata('role_id');

		if(!$this->session->userdata('logged_in') || $role_id !='1')
		{
			redirect ('auth/login');
		}
		$this->load->model('Auth_model', 'auth');
		$data=$this->auth->get_customer_data($this->session->userdata('email'));
		$this->load->view('customer_information', array('data'=>$data));

	}

}







?>