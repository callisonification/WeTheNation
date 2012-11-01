<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Landing extends CI_Controller {

	public function index(){		
			
			$this->load->helper('form');
			
			$this->load->view('landing_page/landing_header.php');
			$this->load->view('landing_page/landing_nav.php');
			$this->load->view('landing_page/branding.php');
			$this->load->view('landing_page/BIN_landing.php');
			$this->load->view('landing_page/MIN_landing.php');
			$this->load->view('landing_page/MAB_landing.php');
			$this->load->view('landing_page/slider.php');
			$this->load->view('landing_page/about_us.php');
			$this->load->view('landing_page/quotes_landing.php');
			$this->load->view('landing_page/sign_up.php');
			$this->load->view('site_main_footer.php');
	}
	
}//end of class
//end of landing page controller