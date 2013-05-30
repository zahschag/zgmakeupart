<?

class Signup extends CI_Controller {

	function __construct(){

		parent:: __cunstruct();
		$this->load->model('Data_Model');
	}

	public function index()
	{
		$this->load->view('inc/header');
		
	}

	public funciton views(){

		$this->load->view('site.php', $data);
		$this->load->view('inc/footer.php');


	}
	public function save(){
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		//Form Validation rules
		

			if($this->form_validation->run() === false)
			{
				$this->index();
				$this->views();
			}
			$this->form_validation->set_rules('email', 'Email', 'trim|required|callback_email_available');

			else{

				$data['email'] = $this->input->post('email_address');
			}

	}

}
/*End of the newsletter.php*/
