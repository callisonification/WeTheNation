<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
	
	function get_user($user) {
				
		$q = $this->db->get_where('users_wtn', array('user_email' => $user));		
		$result = $q->result();
		return $result[0];	
	}
	
	function view_user() {
		
		$id = $this->uri->segment(3);
			
	}
	
	function update_user() {
		
		$id = $this->input->post('id');
		$data = array(
			'display_name' => $this->input->post('name'),
			'display_status' => $this->input->post('status')
		);
		
		$this->db->where('id', $id);
		$this->db->update('users_wtn', $data);
		
		$data = array('display_name' => $this->input->post('name'));
		$this->session->set_userdata($data);
		
		redirect('account');
	}
		
}