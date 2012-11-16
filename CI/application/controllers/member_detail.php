<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member_Detail extends CI_Controller {
	
	function get_details() {
		
		//loaded models
		$this->load->model('vote_rate_model', 'vrm');
		$this->load->model('member_model');
		$this->load->model('crud_model');
		
		 //grabs third parameter of uri string and passes to model to retrieve member
		//detail information from database.		
		$mem_id = $this->uri->segment(3);
		$id = $this->session->userdata('user_id');
		
		//models for pulling data from db
		$result['member'] = $this->member_model->mem_details($mem_id);
		$result['member_rate'] = $this->vrm->get_mbr_rate($mem_id);
		$result['user_rate'] = $this->vrm->get_user_rate($id, $mem_id);
		$sidebar['info'] = $this->member_model->get_mbr_sidebar($mem_id);
		$sidebar['news'] = $this->member_model->get_sidebar_news($mem_id);
		$comments['comment'] = $this->crud_model->get_mbr_comments($mem_id);
		
		//load views for page
		$this->load->view('site_main_header.php');
		$this->load->view('site_main_nav.php');
		$this->load->view('member_detail/member_detail_heading.php', $result);
		$this->load->view('member_detail/member_detail_comments.php', $comments);
		$this->load->view('member_detail/member_detail_sidebar.php', $sidebar);
		$this->load->view('site_main_footer.php');
	}	
	
}//end of class
//end of member list page controller