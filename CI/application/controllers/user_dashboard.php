<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_dashboard extends CI_Controller {
	
	function get_user() {
		
		$this->load->model('user_model');
		
		$user = $this->session->userdata('user_email');
		$result['person'] = $this->user_model->get_user($user);
		$result['session'] = $this->session->all_userdata();
		
		$this->load->view('site_main_header.php');
		$this->load->view('site_main_nav.php');
		$this->load->view('user_dash/user_info.php', $result);
		$this->load->view('user_dash/user_news_feed.php');
		$this->load->view('user_dash/user_sidebar.php');
		$this->load->view('site_main_footer.php');
			
	}//end index function
		
	function update_user() {
		
		$this->load->model('user_model');
		$this->user_model->update_user();	
	}
		
}//end controller class
