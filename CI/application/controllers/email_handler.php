<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email_handler extends CI_Controller {
		
	function send_bug() {
		
		$this->load->library('email');		
		
		$subject = $this->input->post('subject');
		$mssg = $this->input->post('message');
		
		$this->email->from('bug-report@wethenation.us', 'Bug Report');
		$this->email->to('info@wethenation.us');
		$this->email->subject($subject);
		$this->email->message($mssg);
		
		$this->email->send();
		$this->email->print_debugger();
			
	}
	
	function send_contact() {
		
		$this->load->library('email');		
		
		$subject = $this->input->post('subject');
		$mssg = $this->input->post('message');
		
		$this->email->from('contact@wethenation.us', 'Bug Report');
		$this->email->to('admin@wethenation.us');
		$this->email->subject($subject);
		$this->email->message($mssg);
		
		$this->email->send();
		$this->email->print_debugger();
			
	}

		
}
