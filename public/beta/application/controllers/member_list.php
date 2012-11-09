<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member_List extends CI_Controller {
	
	function senate_members() {
		
		$this->load->model('member_model');
		$result['members'] = $this->member_model->get_senate_members();
	
		$this->load->view('site_main_header.php');
		$this->load->view('site_main_nav.php');
		$this->load->view('member_list/member_list_heading.php');
		$this->load->view('member_list/member_list_mod_container.php', $result);
		$this->load->view('member_list/member_list_sidebar.php');			
		$this->load->view('site_main_footer.php');	
	}
	
	function house_members() {
		
		$this->load->model('member_model');
		$result['members'] = $this->member_model->get_house_members();
		
		$this->load->view('site_main_header.php');
		$this->load->view('site_main_nav.php');
		$this->load->view('member_list/member_list_heading.php', $result);
		$this->load->view('member_list/member_list_mod_container.php', $result);
		$this->load->view('member_list/member_list_sidebar.php');			
		$this->load->view('site_main_footer.php');		
	}
	
}//end of class
//end of member list page controller