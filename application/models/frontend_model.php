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
	
	function get_newsItems(){
		$this->db->from('news');
		return $this->db->get_where()->result_array();
	}
	
	function get_newsItems_by_url($url){
		$this->db->from('news');
		$this->db->where('url', $url);
		return $this->db->get_where()->row_array();
	}
	
	
	
}?>