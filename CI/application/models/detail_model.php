<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Detail_model extends CI_Model {
	
	function mem_details($id) {
		
		$q = $this->db->get_where('members_master', array('id' => $id));
		$member = $q->result();
		return $member[0];
	}
	
	function bill_details($id) {
		
		$q = $this->db->get_where('bills_master', array('id' => $id));
		$bill = $q->result();
		return $bill[0];
			
	}
		
}