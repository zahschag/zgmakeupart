<?php

class Site extends CI_Controller{


	function index()
	{
		$this->load->model('site');
		$this->load->view('include/header');
		$this->load->view('site');
		$this->load->view('include/footer');
	}	
}

 