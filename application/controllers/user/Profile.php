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
			$this->load->model('individuals_m');
			$this->load->model('corporates_m');
			$this->load->library('form_validation');
			$this->load->model('counties_m');
			$this->load->model('countries_m');
			$this->load->model('subcounties_m');
	 }
		 

	public function view($id){


		$u= $this->users_m->find($id);
		if($u->group_id == 4){


			$data['user'] = $this->individuals_m->find($u->unique_id);
			$data['group_id'] = 4;

		}elseif ($u->group_id ==3) {

			


			$data['user'] = $this->corporates_m->find($u->unique_id);
			$data['group_id'] = 3;
		}elseif ($u->group_id == 1) {
			
			$data['user'] = $this->users_m->find($id);
			$data['group_id'] = 1;
		}
		


		  $this->load->view('profile/profile.php',$data);	
	}



}