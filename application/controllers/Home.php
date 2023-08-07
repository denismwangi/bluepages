<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
//Validating login
function __construct(){
	parent::__construct();
	
	// if(!$this->session->userdata('uid'))
	// 	redirect('signin');

	  $this->load->model('users_m');
	 }

     public function index(){


	
	  $this->load->view('home/index');	
	}

	public function regions()
	{

		 $this->load->view('home/regions');

	}

	public function upcoming()
	{
		$this->load->view('home/upcoming');

	}

	public function create_email()
	{

	    $data =  json_decode(file_get_contents('php://input'), true);

	    if($data){

            $names  = $data['name'];
			$u = $this->users_m->get_last_id();
			$last_id = $u->id + 1;
			$names = str_replace(' ', '', $names);
			$sname = strtolower($names);
			$last_id_name = $sname.$last_id;

			  $cid = array(

	              "email" => $last_id_name.'@posta.go.ke'
	          );

	        $res = $this->output->set_content_type('application/json')->set_output(json_encode($cid));
	        return $res;

		}

	}



}


