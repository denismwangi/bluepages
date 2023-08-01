<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends CI_Controller {
//Validating login
function __construct(){
	parent::__construct();
	
	   	if(!$this->session->userdata('group_id') == 1 || $this->session->userdata('group_id') == 2){

				 $this->session->sess_destroy();
		         redirect('auth/login');
			}

		  $this->load->model('individuals_m');
          $this->load->model('users_m');
          $this->load->model('corporates_m');
	 }

	public function index(){

	  $this->load->view('admin/users/index');	
	}

	public function super_admins(){

	  $this->load->view('admin/users/super_admins');	
	}



	public function admins(){

	  $this->load->view('admin/users/admins');	
	}


	public function create()
	{
		$this->load->view('admin/users/create');	

	}

	public function coorporates()
	{
		$data['users'] = $this->corporates_m->get_all();
		$this->load->view('admin/users/corporates/list', $data);	
	}

	public function individuals()
	{
		$data['users'] = $this->individuals_m->get_all();
		$this->load->view('admin/users/individuals/list', $data);	
	}

}
