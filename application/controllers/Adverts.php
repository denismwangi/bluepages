<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Adverts extends CI_Controller {
//Validating login
function __construct(){
	  parent::__construct();
	
	 }
	public function years(){

	  $this->load->view('adverts/country/years');	
	}

	public function months(){

	  $this->load->view('adverts/country/months');	
	}


	public function county($name)
	{

		$this->load->view('counties/name');
	}
	public function contacts()
	{
		$this->load->view('home/contacts');	

	}
	public function items($name,$type)
	{
		if($type == 'adverts'){
				$this->load->view('home/adverts');	

		}else{
			$this->load->view('home/contacts');	

		}
	

	}



}
