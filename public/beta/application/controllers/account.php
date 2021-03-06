<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {
	
	public function __construct() {
		
		parent::__construct();
		
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->model('account_model');
		//load model for fetching zip info here
		
		$this->_salt = 'qwerty54321';
		
	}//end account function
	
	function index() {
		if($this->account_model->logged_in() === TRUE){
			
			$this->dashboard(TRUE);
			
		}else{
			
		redirect('landing');
			
		}
		
	}//end index function
	
	function dashboard($condition = FALSE){
		
		if($condition === TRUE || $this->account_model->logged_in() === TRUE){
			
			redirect('user_dashboard/get_user');
				
		}else{
			
			redirect('landing');
				
		}
			
	}//end dashboard function
	
	function login() {
		
		$this->form_validation->set_rules('email', 'Email Address', 'required|callback_email_check');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[15]|callback_pass_check');
		
		$this->_password = sha1($this->_salt . $this->input->post('password'));
		
		//checks to see if login function runs, redirects user accordingly
		if($this->form_validation->run() == FALSE){
			
			redirect('landing');
				
		}else{
			
			$this->account_model->login();
			redirect('user_dashboard/get_user');
				
		}		
		
	}//end login function
	
	function pass_check() {
		
		$this->db->where('user_email', $this->input->post('email'));
		$q = $this->db->get('users_wtn');
		$result = $q->row_array();
				
		if($result['user_pass'] == $this->_password){
			
			return TRUE;
				
		}
		if($q->num_rows() == 0){
			
			$this->form_validation->set_message('pass_check_fail', 'Password is invalid');
			return FALSE;
				
		}
					
	}//end password check function
	
	function register() {
		$this->form_validation->set_rules('fname', 'First Name', 'required');
		$this->form_validation->set_rules('email', 'Email Address', 'required|valid_email|callback_email_exists');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[15]|matches[repass]|sha1');
		$this->form_validation->set_rules('repass', 'Password', 'required|matches[password]|sha1');
		$this->form_validation->set_rules('robot', 'Solution', 'required|min_length[1]|max_length[2]|callback_bot_check');
		
		
		//checks for validation 
		if($this->form_validation->run() == FALSE){
			
			redirect('landing');
				
		}else{
			
			$data['display_name'] = $this->input->post('fname');
			$data['user_email'] = $this->input->post('email');
			$data['user_pass'] = sha1( $this->_salt . $this->input->post('password') );
			
			$lat = $this->input->post('lat');
			$lon = $this->input->post('lon');
			$q = $this->curl->simple_get('http://services.sunlightlabs.com/api/districts.getDistrictFromLatLong.json?apikey=0d52916dee394bd589d5d5d3bb680315&latitude='.$lat.'&longitude='.$lon);
			
			$result = json_decode($q);
			$data['district_state'] = $result->response->districts[0]->district->state;
			$data['district_num'] = $result->response->districts[0]->district->number;
			
			if($this->account_model->create($data) === TRUE){
				
				redirect('user_dashboard/get_user');
					
			}else{
				
				redirect('landing');
					
			}
				
		}
			
	}//end registration function
	
	function email_exists($email) {
		$q = $this->db->get_where('users_wtn', array('user_email' => $email));
		
		if($q->num_rows() > 0){
			$this->session->set_userdata(array('email_error' => 'Email in use, try another'));		
			return FALSE;
		}
		
		$q->free_result();
		
		return TRUE;
			
	}//end email check function
	
	function bot_check($solution) {
		
		if($solution != 4){
			$this->session->set_userdata(array('bot_error' => 'Incorrect Answer, Try Again.'));		
			return FALSE;
		}
				
		return TRUE;
			
	}//end email check function	
		
	function logout() {
			
		$this->session->sess_destroy();
		redirect('landing');
			
	}//end logout function
	
}