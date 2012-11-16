<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Curl_calls extends CI_Controller {
	
	function index() {
		
		echo 'your are in the index function';
				
	}//end index function
	
	function get_gt_bills() {
		
		$this->load->model('curl_model');
		$this->load->model('bill_model');
		for($i=0; $i<=11; $i++){
			
			$this->curl_model->get_gt_bills($i);
			
			//echo 'page '.$i.' loaded'.'<br>';
			
		}//end loop
		
		$this->bill_model->fix_bill_status();
		
	}//end get Govtrack bills function
	
	function get_gt_members() {
		
		$this->load->model('curl_model');
		for($i=0; $i<=11; $i++){
			
			$this->curl_model->get_gt_members($i);
			
			//echo 'page '.$i.' loaded'.'<br>';
			
		}//end loop
			
	}//end get Govtrack members function
	
	function get_oc_bills() {
		
		$this->load->model('curl_model');
		for($i=1; $i<=399; $i++){
					
			$this->curl_model->get_oc_bills($i);
			
			echo 'page '.$i.' loaded'.'<br>';
				
		}//end for loop
	
	}//end get_oc_bills function
		
	function get_oc_members() {
		
		$this->load->model('curl_model');
		for($i=1; $i<=1; $i++){
			
			$this->curl_model->get_oc_members($i);
			
			echo 'page '.$i.' loaded'.'<br>';
						
		}//end for loop
			
	}//end get_oc_members function - democrats
	
	function get_mbr_news() {
		
		$this->load->model('curl_model');
		$this->curl_model->get_mbr_news();
			
	}
				
}//end curl controller class