<?

class Signup extends CI_Controller {
	
	public function index()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		//Form Validation rules
		$this->form_validation->set_rules('email', 'Email', 'required');

		$this->load->view('inc/header');
		$this->load->view('newsletter.php');
		$this->load->view('inc/footer.php');

	}

}
/*End of the newsletter.php*/
