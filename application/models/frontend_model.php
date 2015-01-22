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
	function get_latestNewsItems($val){
		$this->db->from('news');
		$this->db->order_by("id", "desc");
		$this->db->limit($val);
		return $this->db->get_where()->result_array();
	}
	function get_dealers(){
		$this->db->from('locations');
		return $this->db->get_where()->result_array();
	}
	
	function get_languages(){
		$this->db->select('abbr');
		$this->db->from('languages');
		return $this->db->get_where()->result_array();
	}
	
	function get_categories_by_lang($lang){
		$this->db->from('product_category');
		$this->db->where('lang', $lang);
		return $this->db->get_where()->result_array();
	}
	
	
	function get_product_overview($lang){
		$SQL = "SELECT * FROM product_category where lang='" . $lang . "'";	
		$answers = $this->db->query($SQL)->result_array();	
		
		$product_overview = array();
		
		foreach ($answers as $value) {
			$catArray = array();
			$catId = $value['id'];	
			$product_SQL = "SELECT * FROM products where lang='" . $lang . "' AND categoryId=" . $catId;	
			$product_result = $this->db->query($product_SQL)->result_array();	
			
			array_push($value,$product_result);
			array_push($product_overview,$value);
					
		}
		return $product_overview;
	}
	
	function get_homepage_products($cat){
		$this->db->from('products');
		$this->db->where('show_homepage', 1);
		$this->db->where('categoryId', $cat);
		return $this->db->get_where()->result_array();
	}
	
	function get_newsItems_by_url($url){
		$this->db->from('news');
		$this->db->where('url', $url);
		return $this->db->get_where()->row_array();
	}
	
	
	
}?>