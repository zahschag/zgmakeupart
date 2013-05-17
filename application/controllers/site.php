<?php

class Email extends CI_controller{

	function __construct()
	{
		parent::CI_Controller();
	}
	function index()
	{

		$this->load->view('site');
	}

	function send(){

		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');

			if($this->form_validation->run() == FALSE){
				$this->load->view('newsletter');
			}
			else{
				//When validation has passed the email will be sent.
				$name = $this->input->post('name');
				$email = $this->input->post('email');

				$this->load->library('email');
				$this->email->set_newline('\r\n');

				$this->email->from('zgmakeupart@gmail.com, "Zahscha Gonzalez"');
				$this->email->to($email);
				$this->email->subjet("Thank You for subscribing to my newsletter");
				$this->email->message("You've now signed up for my fabulous newsletter");

				$path = $this->config->item('server_root');
				$file = $path . 'zgmakeupart/attachments/newsletter1.txt';

				$this->email->attactch($file);

					if($this->email->send())
					{
						$this->load->view('signup_confirm');
					}
					else{
						show_error($this->email->print_debugger());
					}
			}
	}	
}
 