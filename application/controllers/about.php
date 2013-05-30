<?php

class About extends CI_Controller{
	
	function index(){

		$this->load->view('include/header');
		$this->load->view('about');
		$this->load->view('include/footer');

	}


}