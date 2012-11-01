<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member_model extends CI_Model {
	
	function get_house_members() {
		
		$q = $this->db->get_where('members_master', array('role_type' => 'Representative'));
		return $q->result();
			
	}//end get house members function
	
	function get_senate_members() {
		
		$q = $this->db->get_where('members_master', array('role_type' => 'Senator'));
		return $q->result();
			
	}//end get senate members function
		
}