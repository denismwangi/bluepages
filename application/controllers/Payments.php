<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Payments extends CI_Controller {
//Validating login
function __construct(){
	  parent::__construct();
	
	 }
	

	public function confirm()
	{
		$this->load->view('payments/index');

	}

	public function make_payment(){

	  $this->load->view('payments/make_payment');	
	}

	
}


