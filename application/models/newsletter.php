<?php

class Newsletter extends CI_model{
private $db;
	public function __construct($mydns, $myuser, $mypass){
		try{
			$this->db = new \PDO($mydns, $myuser, $mypass);
			
			}//try function
			catch(\PDOException $l){
				var_dump($l);
			}//catch function
		}//construct function

	function signup(){
		
		$q = mysql_query("INSERT INTO `newsletter`(email) VALUES ($email)")or die(mysql_error());
		//$this->input->post('email_id');
		//$this->input->post('user_email');
		}

}

?>