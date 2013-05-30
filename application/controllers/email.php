<?php

/**
* SENDS EMAIL WITH GMAIL
*/
class Email extends CI_Controller
{
	
	function index() 
	{
		$this->load->view('include/header');
		$this->load->model('newsletter');

	}
	function input(){

		$this->load->helper('form');
		$this->load->model('newsletter');
		$data = $this->newsletter->signup(); 

		$this->load->view('include/header');
		$this->load->view('site');
		$this->load->view('include/footer');
	}
	
	
}


      
 