<?php

class Contact extends CI_Controller{
	
	function index(){

		$this->load->view('include/header');
		$this->load->view('contact');
		$this->load->view('include/footer');
	}
}