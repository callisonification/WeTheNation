<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member_model extends CI_Model {
	
	function mem_details($id) {
		
		$q = $this->db->get_where('members_master', array('person_id' => $id));
		$member = $q->result();
		return $member[0];
	}	
	
	function get_house_members() {
		
		//pulls all members for the house of representatives
		$q = $this->db->get_where('members_master', array('role_type' => 'Representative'));
		return $q->result();
			
	}//end get house members function
	
	function get_senate_members() {
		
		//pulls all members for the senate
		$q = $this->db->get_where('members_master', array('role_type' => 'Senator'));
		return $q->result();
			
	}//end get senate members function
	
	function get_mbr_sidebar($mid) {
		
		//retrieves member data based on id provided - this is used to pull the person id's used below
		$q = $this->db->get_where('members_master', array('person_id' => $mid));
		
		//loop thru result and pull out ids for person members votes most often and least often with
		foreach($q->result() as $r){
			
			$vmo = $r->votes_most_with;
			$vmo_id = $r->id;
			$vlo = $r->votes_least_with;
			$vlo_id = $r->id;
		}
		
		//run queries against these 2 id's and pull back data for these memebers
		$vmo_q = $this->db->get_where('members_master', array('person_id' => $vmo));
		$vlo_q = $this->db->get_where('members_master', array('person_id' => $vlo));
		
		$vmo_r_q = $this->db->get_where('voting_rating', array('member_id' => $vmo_id));
		$vlo_r_q = $this->db->get_where('voting_rating', array('member_id' => $vlo_id));
		
		//push data into an array
		$data = array(
			'vmo' => $vmo_q->result(),
			'vmo_r' => $vmo_r_q->result(),
			'vlo' => $vlo_q->result(),
			'vlo_r' => $vlo_r_q->result()
		);
		
		//return array data
		return $data;
		
	}//end get sidebar info function
	
	function get_mbr_news() {
		
		$sql = 'SELECT * FROM news_archive ORDER BY RAND() LIMIT 15'; 
		$q = $this->db->query($sql);
		$result = $q->result();
		
		return $result;
	}
	
	function get_sidebar_news($id) {
		
		$this->db->select('title, url');
		$this->db->where('person_id', $id);
		$q = $this->db->get('news_archive', 10);
		$result = $q->result();
		
		return $result;	
	}
}