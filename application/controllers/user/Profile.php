<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profile extends CI_Controller {
	//Validating login
	function __construct(){
		parent::__construct();
		
		     if(!$this->session->userdata('id'))
				redirect('auth/login');

			$this->load->model('forum_m');
			$this->load->model('users_m');
			$this->load->library('form_validation');
	 }
		 

	public function view($id){


		$data['user'] = $this->users_m->find($id);

		  $this->load->view('profile/profile.php',$data);	
	}



}