<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax_controller extends CI_Controller {
	
	//=====================================//
	// Functions below are for adding ratings
	// to members
	//=====================================//	
	
	//updates the member vote in the voting_rating table
	function update_mbr_rate() {
		
		//loaded models
		$this->load->model('vote_rate_model', 'vrm');
		
		//converts POST data from AJAX into an array
		$data = array(
			'user_id' => $_POST['user_id'],
			'member_id' => $_POST['member_id'],
			'type' => $_POST['type'],
			'rate_value' => $_POST['rate_value'],
		);
		
		//model function is called and array is passed to it
		$this->vrm->add_mbr_rate($data);	
	
	}//end update member vote function
	
	//get member vote averages and returns them to the controller
	function get_mbr_rate() {
		
		$id = $this->uri->segment(3);
		$this->load->model('vote_rate_model', 'vrm');
		$result = $this->vrm->get_mbr_rate($id);
		
		echo $result['rate']; // how to return in ajax success??
	
	}//end get member vote function
	
	
	//=====================================//
	// Functions below are for adding votes
	// to bills
	//=====================================//
		
	//adds a users vote for a bill to the voting/rating table
	function update_bill_vote() {
		
		$this->load->model('vote_rate_model', 'vrm');
		
		$data = array(
			'user_id' => $_POST['user_id'],
			'bill_id' => $_POST['bill_id'],
			'type' => $_POST['type'],
			'vote' => $_POST['vote']
		);
		
		$this->vrm->add_bill_vote($data);
			
	}//end update bill vote function
	
	function get_bill_vote() {
		
		$bid = $this->uri->segment(3);
		$this->load->model('vote_rate_model', 'vrm');
		$q = $this->vrm->get_bill_vote($bid);
		
		echo json_encode($q);
			
	}//end get bill vote function
	
	
	//=====================================//
	// Functions below are for adding comments
	// for both bills and members
	//=====================================//	
	
	//retrieves all comments for specified member and returns results
	function get_mbr_comments() {
		
		$id = $this->uri->segment(3);
		$this->load->model('crud_model');
		$q = $this->crud_model->get_mbr_comments($id);
		
		//result encoded so it can be parsed via JS
		echo json_encode($q);
		
	}//end get member comments function
	
	//adds a comment to the comment table for specified member
	function add_mbr_comment() {
		
		$this->load->model('crud_model');
		$this->load->helper('date');
		
		$now = now();
		$date = unix_to_human($now, TRUE, 'us');
		
		$data = array(
			
			'user_id' => $_POST['user_id'],
			'user_name' => $_POST['user_name'],
			'user_photo' => $_POST['user_photo'],
			'member_id' => $_POST['member_id'],
			'comment' => $_POST['comment'],
			'type' => $_POST['comment_type'],
			'date_time' => $date
		);
		
		$this->crud_model->add_mbr_comment($data);
		
	}//end add member comment function	
	
	function add_bill_comment() {
		$this->load->model('crud_model');
		$this->load->helper('date');
		
		$now = now();
		$date = unix_to_human($now, TRUE, 'us');
		
		$data = array(
			'user_id' => $_POST['user_id'],
			'user_name' => $_POST['user_name'],
			'user_photo' => $_POST['user_photo'],
			'bill_id' => $_POST['bill_id'],
			'comment' => $_POST['comment'],
			'type' => $_POST['comment_type'],
			'date_time' => $date
		);
		
		$this->crud_model->add_bill_comment($data);
	}
	
	function get_bill_comments() {
		
		$id = $this->uri->segment(3);
		$this->load->model('crud_model');
		$q = $this->crud_model->get_bill_comments($id);
		
		//result encoded so it can be parsed via JS
		echo json_encode($q);
	}
		
}//end ajax controller class