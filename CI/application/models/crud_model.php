<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud_model extends CI_Model {
	
	function add_mbr_comment($data) {
		
		$uid = $data['user_id'];
		$un = $data['user_name'];
		$up = $data['user_photo'];
		$mid = $data['member_id'];
		$com = $data['comment'];
		$date = $data['date_time'];
		$type = $data['type'];
		
		$newdata = array(
			'user_id' => $uid,
			'user_name' => $un,
			'user_photo' => $up,
			'member_id' => $mid,
			'comment' => $com,
			'date_time' => $date,
			'type' => $type
		);
		
		$this->db->insert('user_comments', $data);
		
	}
	
	function get_mbr_comments($mid) {
		
		$this->db->where('member_id', $mid);
		$q = $this->db->get('user_comments');
		$result = $q->result();
		
		return $result;
	}
	
	function add_bill_comment($data) {
		
		$uid = $data['user_id'];
		$un = $data['user_name'];
		$up = $data['user_photo'];
		$bid = $data['bill_id'];
		$com = $data['comment'];
		$date = $data['date_time'];
		$type = $data['type'];
		
		$newdata = array(
			'user_id' => $uid,
			'user_name' => $un,
			'user_photo' => $up,
			'bill_id' => $bid,
			'comment' => $com,
			'date_time' => $date,
			'type' => $type
		);
		
		$this->db->insert('user_comments', $data);
			
	}
	
	function get_bill_comments($bid) {
		
		$this->db->where('bill_id', $bid);
		$q = $this->db->get('user_comments');
		$result = $q->result();
		
		return $result;			
	}
		
}