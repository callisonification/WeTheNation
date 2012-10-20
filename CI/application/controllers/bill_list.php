<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bill_List extends CI_Controller {

	function index(){		
			
			$this->load->view('site_main_header.php');
			$this->load->view('site_main_nav.php');
			$this->load->view('bill_list/bill_list_heading.php');
			$this->load->view('bill_list/bill_list_mod_container.php');
			$this->load->view('bill_list/bill_list_sidebar.php');			
			$this->load->view('site_main_footer.php');
	}
	
	function senate_bills() {
	
		//load same views from above, pass in data attribute of just senate bills
		echo 'senate bills';
		
	}
	
	function house_bills() {
		
		//load same views from above, pass in data attribute of just house bills
		echo 'house bills';
			
	}
	
}//end of class
//end of bill list page controller