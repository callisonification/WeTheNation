<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account_model extends CI_Model {
		
	function create($data) {
		
		if($this->db->insert('users_wtn', $data)) {
			
			$this->db->select('display_name, id');
			$this->db->where('user_email', $this->input->post('email'));
			$q = $this->db->get('users_wtn');
			$result = $q->result();
			
			foreach($result as $r){
				$id = $r->id;
				$name = $r->display_name;
			}
					
			$data = array('user_email' => $this->input->post('email'), 
						  'logged_in' => TRUE, 
						  'display_name' => $name, 
						  'user_id' => $id
						  );
			$this->session->set_userdata($data);
			
			return TRUE;			
		}
		return FALSE;
		
	}//end create function
	
	function login() {
		
		$this->db->select('display_name, id');
		$this->db->where('user_email', $this->input->post('email'));
		$q = $this->db->get('users_wtn');
		$result = $q->result();
		
		foreach($result as $r){
			$id = $r->id;
			$name = $r->display_name;
		}
				
		$data = array('user_email' => $this->input->post('email'), 
					  'logged_in' => TRUE, 
					  'display_name' => $name, 
					  'user_id' => $id
					  );
		$this->session->set_userdata($data);
		
	}//end login function
	
	function logged_in() {
	
		if($this->session->userdata('logged_in') == TRUE){
			return TRUE;
		}
		return FALSE;
	}
	
}//end account_model class
