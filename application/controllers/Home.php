<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
//Validating login
function __construct(){
	parent::__construct();
	
	// if(!$this->session->userdata('uid'))
	// 	redirect('signin');
	 }

     public function index(){


	
	  $this->load->view('home/index');	
	}



}


