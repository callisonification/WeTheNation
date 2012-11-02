<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member_Detail extends CI_Controller {
	
	function get_details() {
		
		//grabs third parameter of uri string and passes to model to retrieve member
		//detail information from database.
		
		$this->load->model('detail_model');
		$mem_id = $this->uri->segment(3);
		$result['member'] = $this->detail_model->mem_details($mem_id);
		
		//load views for page
		$this->load->view('site_main_header.php');
		$this->load->view('site_main_nav.php');
		$this->load->view('member_detail/member_detail_heading.php', $result);
		$this->load->view('member_detail/member_detail_comments.php');
		$this->load->view('member_detail/member_detail_sidebar.php');
		$this->load->view('site_main_footer.php');
	}
	
	
}//end of class
//end of member list page controller