<?php

class Portfolio extends CI_Controller{


	function index(){
		$this->load->view('include/header');
		$this->load->view('portfolio');
		$this->load->view('include/footer');


	}
}
