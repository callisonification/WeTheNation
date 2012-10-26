<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Curl_calls extends CI_Controller {
	
	function index() {
		
		echo 'your are in the index function';
				
	}//end index function
	
	function get_gt_bills() {
		
		$this->load->model('curl_model');
		for($i=0; $i<=11; $i++){
			
			$this->curl_model->get_gt_bills($i);
			
			//echo 'offsetting' . $i;
			
		}//end loop
		
	}//end get Govtrack bills function
	
	function get_gt_members() {
		
		$this->load->model('curl_model');
		for($i=0; $i<=11; $i++){
			
			$this->curl_model->get_gt_members($i);
			
			//echo 'offsetting' . $i;
			
		}//end loop
			
	}//end get Govtrack members function
		
}//end curl controller class