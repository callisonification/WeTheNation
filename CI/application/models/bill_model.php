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
	
}