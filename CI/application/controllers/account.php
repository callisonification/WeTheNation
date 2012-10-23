<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {
	
	function Account() {
		
		parent::Controller();
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->model('account_model');
		
		$this->_salt = 'qwerty54321qwerty';
			
	}//end account function
	
	function index() {
		
		if($this->account_model->logged_in() === TRUE){
			
			$this->dashboard(TRUE);
			
		}else{
			
			redirect('landing');
			
		}
		
	}//end index function
	
	function dashboard($condition = FALSE){
		
		if($condition === TRUE || $this->account_model->logged_in() === TRUE){
			
			redirect('user_dashboard');
				
		}else{
			
			redirect('landing');
				
		}
			
	}//end dashboard function
	
	function login() {
		
		$this->form_validation->set_rules('email', 'Email Address', 'required|callback_email_check');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[15]|callback_pass_check');
		$this->form_validation->set_rules('repass', 'Password', 'required|matches[password]');
		$this->form_validation->set_rules('zip', 'Zip Code', 'required|min_length[5]|max_length[5]|callback_zip_check');
		$this->form_validation->set_rules('robot', 'Solution', 'required|min_length[1]|max_length[2]|callback_bot_check');
		
		$this->_password = sha1($this->_salt . $this->input->post('password'));
		
	}//end login function
	
	function pass_check() {
		
		$this->db->where('user_email', $this->input->post('email'));
		$q = $this->db->get('users_wtn');
		$result = $query->row_array();
		
		if($result['password'] == $this->_password){
			
			return TRUE;
				
		}
		if($q->num_rows() == 0){
			
			$this->form_validation->set_message('pass_check_fail', 'Password is invalid');
			return FALSE;
				
		}
			
	}//end password check function
	
	//register function goes here
	
}