<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Adverts extends CI_Controller {
//Validating login
function __construct(){
	parent::__construct();
	
	    	if(!$this->session->userdata('group_id') == 1 || $this->session->userdata('group_id') == 2){

				 $this->session->sess_destroy();
		         redirect('auth/login');
			}
	 }

	public function index(){


	
	  $this->load->view('admin/adverts/index');	
	}


	public function months($year){


	
	  $this->load->view('admin/adverts/months');	
	}

}
