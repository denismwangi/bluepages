<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Diary extends CI_Controller {
//Validating login
function __construct(){
	parent::__construct();
	
	    if(!$this->session->userdata('id'))
			redirect('auth/login');
		 }
	 }

	public function index(){

		  $this->load->view('user/diary/index');	
	}


	public function months($year){

		  $this->load->view('user/diary/months');	
	}

}
