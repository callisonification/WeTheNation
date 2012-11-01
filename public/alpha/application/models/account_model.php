<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account_model extends CI_Model {
		
	function create($data) {
		
		if($this->db->insert('users_wtn', $data)) {
			return TRUE;			
		}
		return FALSE;
		
	}//end create function
	
	function login() {
		
		$data = array('user_email' => $this->input->post('email'), 'logged_in' => TRUE);
		
		$this->session->set_userdata($data);
		
	}//end login function
	
	function logged_in() {
	
		if($this->session->userdata('logged_in') == TRUE){
			return TRUE;
		}
		return FALSE;
	}
	
}//end account_model class
