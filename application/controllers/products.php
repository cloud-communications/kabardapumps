<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

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
	 function Products() {
	 	parent::__construct();
		$this -> load -> database();
		
	 }
	 
	public function index()
	{
		$this->lang->load('front');
		$data['secondary_footer'] = true; 
		$data['footer_news'] = get_latestNewsItems(2);
		//$data['language_code'] = $this->lang->lang();
		//$product_categories = $this -> frontend_model -> get_categories_by_lang($GLOBALS['language-abbr']);
		//$data['product_categories'] = $product_categories;
		
		$products = $this -> frontend_model -> get_product_overview($GLOBALS['language-abbr']);
		$data['products'] = $products;
	 	
		
		$this->load->view('products', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */