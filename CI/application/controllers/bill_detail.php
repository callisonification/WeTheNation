<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bill_Detail extends CI_Controller {

	function index(){		
	
		//may need to load something here	
	}
	
	function get_details() {
		
		//grabs third parameter of uri string and passes to model to retrieve member
		//detail information from database.
		
		//$mem_id = uri_string(3);
		//$this->detail_model->mem_details($mem_id);
		
		//load views for page
		$this->load->view('site_main_header.php');
		$this->load->view('site_main_nav.php');
		$this->load->view('bill_detail/bill_detail_heading.php');
		$this->load->view('bill_detail/bill_detail_comments.php');
		$this->load->view('bill_detail/bill_detail_sidebar.php');
		$this->load->view('site_main_footer.php');
	}
	
	
}//end of class
//end of member list page controller