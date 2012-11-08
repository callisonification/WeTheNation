<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bill_List extends CI_Controller {

	function index(){		
		
		$this->load->model('bill_model');
		$this->bill_model->fix_bill_status();
		$result['bills'] = $this->bill_model->get_all_bills();
			
		$this->load->view('site_main_header.php');
		$this->load->view('site_main_nav.php');
		$this->load->view('bill_list/bill_list_heading.php');
		$this->load->view('bill_list/bill_list_mod_container.php', $result);
		$this->load->view('bill_list/bill_list_sidebar.php');			
		$this->load->view('site_main_footer.php');
		
	}
	
	function senate_bills() {
		
		$this->load->model('bill_model');
		$result['bills'] = $this->bill_model->get_senate_bills();
		
		$this->load->view('site_main_header.php');
		$this->load->view('site_main_nav.php');
		$this->load->view('bill_list/bill_list_heading.php');
		$this->load->view('bill_list/bill_list_mod_container.php', $result);
		$this->load->view('bill_list/bill_list_sidebar.php');			
		$this->load->view('site_main_footer.php');
				
	}
	
	function senate_joint_res_bills() {
		
		$this->load->model('bill_model');
		$result['bills'] = $this->bill_model->get_senate_joint_res_bills();
		
		$this->load->view('site_main_header.php');
		$this->load->view('site_main_nav.php');
		$this->load->view('bill_list/bill_list_heading.php');
		$this->load->view('bill_list/bill_list_mod_container.php', $result);
		$this->load->view('bill_list/bill_list_sidebar.php');			
		$this->load->view('site_main_footer.php');
				
	}

	function senate_con_res_bills() {
		
		$this->load->model('bill_model');
		$result['bills'] = $this->bill_model->get_senate_con_res_bills();
		
		$this->load->view('site_main_header.php');
		$this->load->view('site_main_nav.php');
		$this->load->view('bill_list/bill_list_heading.php');
		$this->load->view('bill_list/bill_list_mod_container.php', $result);
		$this->load->view('bill_list/bill_list_sidebar.php');			
		$this->load->view('site_main_footer.php');
				
	}

	function senate_res_bills() {
		
		$this->load->model('bill_model');
		$result['bills'] = $this->bill_model->get_senate_res_bills();
		
		$this->load->view('site_main_header.php');
		$this->load->view('site_main_nav.php');
		$this->load->view('bill_list/bill_list_heading.php');
		$this->load->view('bill_list/bill_list_mod_container.php', $result);
		$this->load->view('bill_list/bill_list_sidebar.php');			
		$this->load->view('site_main_footer.php');
				
	}
	
	//==== BEGIN HOUSE BILL FUNCTIONS ====
	
	function house_bills() {
		
		$this->load->model('bill_model');
		$result['bills'] = $this->bill_model->get_house_bills();
		
		$this->load->view('site_main_header.php');
		$this->load->view('site_main_nav.php');
		$this->load->view('bill_list/bill_list_heading.php');
		$this->load->view('bill_list/bill_list_mod_container.php', $result);
		$this->load->view('bill_list/bill_list_sidebar.php');			
		$this->load->view('site_main_footer.php');
					
	}
	
	function house_joint_res_bills() {
		
		$this->load->model('bill_model');
		$result['bills'] = $this->bill_model->get_house_joint_res_bills();
		
		$this->load->view('site_main_header.php');
		$this->load->view('site_main_nav.php');
		$this->load->view('bill_list/bill_list_heading.php');
		$this->load->view('bill_list/bill_list_mod_container.php', $result);
		$this->load->view('bill_list/bill_list_sidebar.php');			
		$this->load->view('site_main_footer.php');
					
	}

	function house_con_res_bills() {
		
		$this->load->model('bill_model');
		$result['bills'] = $this->bill_model->get_house_con_res_bills();
		
		$this->load->view('site_main_header.php');
		$this->load->view('site_main_nav.php');
		$this->load->view('bill_list/bill_list_heading.php');
		$this->load->view('bill_list/bill_list_mod_container.php', $result);
		$this->load->view('bill_list/bill_list_sidebar.php');			
		$this->load->view('site_main_footer.php');
					
	}

	function house_res_bills() {
		
		$this->load->model('bill_model');
		$result['bills'] = $this->bill_model->get_house_res_bills();
		
		$this->load->view('site_main_header.php');
		$this->load->view('site_main_nav.php');
		$this->load->view('bill_list/bill_list_heading.php');
		$this->load->view('bill_list/bill_list_mod_container.php', $result);
		$this->load->view('bill_list/bill_list_sidebar.php');			
		$this->load->view('site_main_footer.php');
					
	}	
	
}//end of class
//end of bill list page controller