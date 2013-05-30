<?php

class Blog extends CI_Controller
{

	public function index(){

		$this->load->model('Data_Model');
		$data['rows'] = $this->Data_Model->dataQuery();
		$this->load->view('include/header');
		$this->load->view('blog', $data);
		$this->load->view('include/footer'); 
	}

}

	