<?php
	
class Site_Model extends CI_Model{

	var $id = 0;
	var $email = "";

	function getAll(){
		$q = $this->db->get('zmg1489');

		if($q->num_rows() > 0){

			foreach($q->result() as $row){
				$data[] = $row;
			}//foreach loop ends

			return $data;

		}//conditional end

	}//get all function end

	 function send_email ($email){

		$sql = "INSERT INTO `newsletter`(`user_email`)
			VALUES(?)";

			$done = $this->db->query($sql, $email);
			return $done ? $email : false;
	}//

}