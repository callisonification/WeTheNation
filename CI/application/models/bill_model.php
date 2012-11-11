<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bill_model extends CI_Model {
	
	function get_all_bills() {
	
		$q = $this->db->get('bills_master', 100);
		return $q->result();
		
	}//end get all bills function 
	
	function get_senate_bills() {
		
		$q = $this->db->get_where('bills_master', array('bill_type' => 'senate_bill'), 100);
		return $q->result();
		
	}//end get senate bills function
	
	function get_senate_joint_res_bills() {
		
		$q = $this->db->get_where('bills_master', array('bill_type' => 'senate_joint_resolution'), 100);
		return $q->result();
		
	}//end get senate bills function

	function get_senate_con_res_bills() {
		
		$q = $this->db->get_where('bills_master', array('bill_type' => 'senate_concurrent_resolution'), 100);
		return $q->result();
		
	}//end get senate bills function

	function get_senate_res_bills() {
		
		$q = $this->db->get_where('bills_master', array('bill_type' => 'senate_resolution'), 100);
		return $q->result();
		
	}//end get senate bills function
	
	//=====START HOUSE BILL MODELS=====
	
	function get_house_bills() {
	
		$q = $this->db->get_where('bills_master', array('bill_type' => 'house_bill'), 100);
		return $q->result();
		
	}//end get house bills function 
	
	function get_house_joint_res_bills() {
	
		$q = $this->db->get_where('bills_master', array('bill_type' => 'house_joint_resolution'), 100);
		return $q->result();
		
	}//end get house bills function 

	function get_house_con_res_bills() {
	
		$q = $this->db->get_where('bills_master', array('bill_type' => 'house_concurrent_resolution'), 100);
		return $q->result();
		
	}//end get house bills function 

	function get_house_res_bills() {
	
		$q = $this->db->get_where('bills_master', array('bill_type' => 'house_resolution'), 100);
		return $q->result();
		
	}//end get house bills function
	
	 //this function pulls all bill statuses from the db, checks their value and cleans them up accordingly
	//the cleans statuses are then pushed back into the db via update
	function fix_bill_status() {
		$this->db->select('id, current_status');
		$q = $this->db->get('bills_master');
		$r = $q->result();
		
		foreach($r as $item){
			
			$ns = $item->current_status;
			
			if($item->current_status === 'prov_kill_veto' || $item->current_status === 'vetoed_pocket')
			{
				$ns = 'Vetoed';
			}
			elseif($item->current_status === 'vetoed_override_fail_second_senate' || 
			$item->current_status === 'vetoed_override_fail_originating_senate')
			{
				$ns = 'Vetoed: Senate';	
			}
			elseif($item->current_status === 'vetoed_override_fail_originating_house' || 
			$item->current_status === 'vetoed_override_fail_second_house')
			{
				$ns = 'Vetoed: House';	
			}
			elseif($item->current_status === 'passed_bill' || $item->current_status === 'passed_constamend' || 
			$item->current_status === 'passed_concurrentres' || $item->current_status === 'passed_simpleres')
			{
				$ns = 'Passed';	
			}
			elseif($item->current_status === 'pass_over_senate' || $item->current_status === 'override_pass_over_senate' ||
			$item->current_status === 'pass_back_senate') 
			{
				$ns = 'Passed: Senate';	
			}
			elseif($item->current_status === 'pass_over_house' || $item->current_status === 'pass_back_house' || 
			$item->current_status === 'override_pass_over_house')
			{
				$ns = 'Passed: House';	
			}
			elseif($item->current_status === 'introduced')
			{
				$ns = 'Introduced';	
			}
			elseif($item->current_status === 'referred')
			{
				$ns = 'Referred';	
			}
			elseif($item->current_status === 'fail_second_house' || $item->current_status === 'fail_originating_house')
			{
				$ns = 'Failed: House';	
			}
			elseif($item->current_status === 'fail_second_senate' || $item->current_status === 'fail_originating_senate')
			{
				$ns = 'Failed: Senate';	
			}
			elseif($item->current_status === 'prov_kill_cloturefailed' || $item->current_status === 'prov_kill_suspensionfailed' ||
			$item->current_status === 'prov_kill_pingpongfail')
			{
				$ns = 'Failed';	
			}
			elseif($item->current_status === 'enacted_veto_override')
			{
				$ns = 'Veto Override';	
			}
			elseif($item->current_status === 'enacted_signed')
			{
				$ns = 'Enacted';	
			}
			elseif($item->current_status === 'reported')
			{
				$ns = 'Reported';	
			}
			
			$data = array(
				'current_status' => $ns
			);
			
			$this->db->where('id', $item->id);
			$this->db->update('bills_master', $data);
		
		}//end foreach loop
	
	}//end fix bill status function
	
	function get_newest_bills() {
		
		$this->db->order_by('intro_date', 'desc');
		$q = $this->db->get('bills_master', 10);
		return $q->result();
			
	}//End get new
	
}//end bill model 