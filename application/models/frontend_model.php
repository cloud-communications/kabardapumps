<?php
class frontend_model Extends CI_Model {

	function __construct()
	{
		parent::__construct();
		//$this->pages_table = 'work';
	}	
	
	function insert_contact_data($name, $email, $subject, $message) {
		$data = array(
		   'name' => $name,
		   'email' => $email,
		   'subject' => $subject,
		   'message' => $message
		);
		$this->db->insert('contact_form', $data); 
	}
	
	
	
	
}?>