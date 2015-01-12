<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 function __construct() {
	 	parent::__construct();
		$this -> load -> database();
		$this -> load -> helper(array('url', 'form', 'date', 'cookie'));
		$this -> load -> library(array('email','form_validation'));
	 }
	 
	public function index()
	{
		
		if(isset($_POST['submit']))
  		{
  			$name = $_POST['inputName'];
			$email = $_POST['inputEmail'];
			$subject = $_POST['inputSubject'];
			$message = $_POST['inputMessage'];
			
			$this->lang->load('form_validation');
		
			$this->form_validation->set_message('required', '%s');
			$this->form_validation->set_message('valid_email', lang('valid_email'));

			$this->form_validation->set_rules('inputName', lang('required_name'), 'required');
			$this->form_validation->set_rules('inputEmail', lang('required_email'), 'required|valid_email');
			$this->form_validation->set_rules('inputSubject', lang('required_subject'), 'required');
			$this->form_validation->set_rules('inputMessage', lang('required_message'), 'required');
			
			
			if ($this->form_validation->run() == FALSE)
			{
				$data['report'] = "<div class='error'>". $this->form_validation->error_string()."</div>"; 
				$data['name'] = $name;
				$data['email'] = $email;
				$data['subject'] = $subject;
				$data['message'] = $message;
				
				$this->lang->load('front');
				$data['secondary_footer'] = true; 
				$data['language_code'] = "en";
		 	
				$this->load->view('contact', $data);
			}
			else
			{
				$config['protocol'] = "smtp";
				$config['smtp_host'] = "ssl://smtp.googlemail.com";
				$config['smtp_port'] = "465";
				$config['smtp_user'] = "ringootk@gmail.com";
				$config['smtp_pass'] = "ikbennietsnoedel";
				$config['charset'] = "utf-8";
				$config['newline'] = "\r\n";
				
				$this->email->initialize($config);        
				        
				$this->email->from($email, $name);
				$this->email->to('ringoot_kevin@hotmail.com');
				$this->email->subject('Kabardapumps.com contact form message: ' . $subject);
				$this->email->message('Email: ' . $email . '\r\n \r\n Message: ' . $message);
				
				$this->email->send();
				
				$this->frontend_model->insert_contact_data($name, $email, $subject, $message);
				
				$this->lang->load('front');
				$data['secondary_footer'] = true; 
				$data['language_code'] = "en";
				$this->load->view('formSuccess', $data);
			}
		
			
  			//die($name .$email . $subject . $message);
  			//$this->load->view('index', $data);
			
		}else {
			$this->lang->load('front');
			$data['secondary_footer'] = true; 
			$data['language_code'] = "en";
	 	
		
			$this->load->view('contact', $data);
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */