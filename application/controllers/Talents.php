<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Talents extends CI_Controller {
//Validating login
function __construct(){
	parent::__construct();
	
	

	   $this->load->model('talents_m');
	   
	 }

     public function index(){


	  $data['talents'] = $this->talents_m->get_all();
	 
	  $this->load->view('talents/index', $data);	
	}




}
