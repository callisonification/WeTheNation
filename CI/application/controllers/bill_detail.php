<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bill_Detail extends CI_Controller {
	
	function get_details() {
		
		//grabs third parameter of uri string and passes to model to retrieve member
		//detail information from database.
		
		$this->load->model('vote_rate_model', 'vrm');
		$this->load->model('crud_model');
		$this->load->model('bill_model');
		
		$bill_id = $this->uri->segment(3);
		$user_id = $this->session->userdata('user_id');
		
		$result['bill'] = $this->bill_model->bill_details($bill_id);
		$result['user_vote'] = $this->vrm->get_user_vote($bill_id, $user_id);
		$comments['comment'] = $this->crud_model->get_bill_comments($bill_id);
		$sidebar['info'] = $this->bill_model->get_bill_sidebar($bill_id);
				
		//load views for page
		$this->load->view('site_main_header.php');
		$this->load->view('site_main_nav.php');
		$this->load->view('bill_detail/bill_detail_heading.php', $result);
		$this->load->view('bill_detail/bill_detail_comments.php', $comments);
		$this->load->view('bill_detail/bill_detail_sidebar.php', $sidebar);
		$this->load->view('site_main_footer.php');
	}
	
	
}//end of class
//end of member list page controller