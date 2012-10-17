<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Landing extends CI_Controller {

	public function index(){
		
		$this->load->view('landing_header.php');
		$this->load->view('landing_nav.php');
		$this->load->view('branding.php');
		$this->load->view('BIN_landing.php');
		$this->load->view('MIN_landing.php');
		$this->load->view('MAB_landing.php');
		$this->load->view('slider.php');
		$this->load->view('about_us.php');
		$this->load->view('quotes_landing.php');
		$this->load->view('sign_up.php');
		$this->load->view('footer.php');
	}
	
}