<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

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
	 function News() {
	 	parent::__construct();
		$this -> load -> database();
		
	 }
	 
	public function index()
	{
		$this->lang->load('front');
		$data['secondary_footer'] = false; 
		
		//echo "dddd" . get_lang();
		
		$newsItems = $this -> frontend_model -> get_newsItems();
		$data['newsItems'] = $newsItems; 
		
		
		
		$this->load->view('news', $data);
	}
	
	public function detail()
	{
		$this->lang->load('front');
		$data['secondary_footer'] = true; 
		$data['footer_news'] = get_latestNewsItems(2);
		
		//$data['language_code'] = $this->lang->lang();
	 	
	 	$newsUrl = $this -> uri -> segment(3);
	 	$newsItem = $this -> frontend_model -> get_newsItems_by_url($newsUrl);
		
		if( !empty( $newsItem ) )
		{
		 	$data['title'] = $newsItem['title'];
			$data['date'] = $newsItem['date'];
			$data['intro'] = $newsItem['intro'];
			$data['text'] = $newsItem['text'];
			
			$this->load->view('news_detail', $data);
		
		}else {
			show_404();
		}
	}
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */