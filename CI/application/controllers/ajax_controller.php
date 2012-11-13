<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax_controller extends CI_Controller {
	
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
		
		return $result['rate']; // how to return in ajax success??
	
	}//end get member vote function
	
	
	function get_mbr_comment() {
		
	}
	
	function add_mbr_comment() {
		
		$this->load->model('crud_model');
		$this->load->helper('date');
		
		$now = now();
		$date = unix_to_human($now, TRUE, 'us');
		
		$data = array(
			
			'user_id' => $_POST['user_id'],
			'user_name' => $_POST['user_name'],
			'member_id' => $_POST['member_id'],
			'comment' => $_POST['comment'],
			'date_time' => $date
		);
		
		$this->crud_model->add_mbr_comment($data);
		
	}

		
}