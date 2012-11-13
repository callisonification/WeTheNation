<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud_model extends CI_Model {
	
	function add_mbr_comment($data) {
		
		$uid = $data['user_id'];
		$un = $data['user_name'];
		$mid = $data['member_id'];
		$com = $data['comment'];
		$date = $data['date_time'];
		
		$newdata = array(
			'user_id' => $uid,
			'user_name' => $un,
			'member_id' => $mid,
			'comment' => $com,
			'date_time' => $date
		);
		
		$this->db->insert('mbr_comments', $data);
		
	}
	
	function get_mbr_comments($mid) {
		
		$this->db->where('member_id', $mid);
		$q = $this->db->get('mbr_comments');
		$result = $q->result();
		
		return $result;
	}
		
}