<?php

class Data_Model extends CI_Model{

	var $email = "";

	function __construct()
	{

		parent:: __construct();
	}

	public function dataQuery(){

		$query = $this->db->get("newsletter");
		if($query->num_rows() > 0){
			return $query;
		}
	}

	public function enter_email(){

		$this->input->post('newsletter', TRUE);
		$this->db->insert_id('newsletter');
	}

}
