<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class About extends CI_Controller
{
	
	function about_us()
	{
		$this->load->view('about');
	}
}
?>