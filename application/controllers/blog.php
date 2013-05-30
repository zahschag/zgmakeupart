<?php

class Blog extends CI_Controller{


	function index()
	{
		$this->load->view('include/header');
		$this->load->view('blog');
		$this->load->view('include/footer');
	}

}
	