<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vote_rate_model extends CI_Model {
	
	function add_mbr_rate($data) {
		
		//variables are created from passed array data
		$id = $data['user_id'];
		$mid = $data['member_id'];
		$type = $data['type'];
		$val = $data['rate_value'];
		
		//these variables are then pushed into a new array
		$newdata = array(
			'user_id' => $id,
			'member_id' => $mid,
			'type' => $type,
			'rate_value' => $val
		);
		
		//checks for the user and member id to see if user has already voted on supplied member
		$this->db->where('user_id', $id);
		$this->db->where('member_id', $mid);
		$q = $this->db->get('voting_rating');
		
		//if user has voted on this member vote is updated, else it is inserted
		if($q->num_rows > 0){
			$this->db->where('user_id', $id);
			$this->db->where('member_id', $mid);		
			$this->db->update('voting_rating', $newdata);
		}else{
			$this->db->insert('voting_rating', $newdata);	
		}
				
	}//end add member rate function
	
	function get_mbr_rate($mid) {
		
		//find user in voting/rating table by id (PrimaryKey), returns results
		//instantiates a sum variable
		$this->db->where('member_id', $mid);
		$q = $this->db->get('voting_rating');
		$result = $q->result();
		$sum = 0;
		
		//results are loop and added to sum variable - addition		
		foreach($result as $r){

			$sum += $r->rate_value;	
		}
		
		//if no value returns 0, else returns the rate (sum divided by rows) and total votes (rows)
		if($sum === 0){
			return $sum;	
		}else{
			$data = array(
				'rate' => ($sum / $q->num_rows()),
				'tv' => $q->num_rows()
			);
		}
		
		return $data;
	}//end get member rate function
	
	function add_bill_vote() {
	
	
		
	}//end add bill vote function
	
	function get_bill_vote() {
	
	
		
	}//end get bill vote function
	
}//end voting/rating model class