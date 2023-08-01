<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contacts extends CI_Controller {
//Validating login
function __construct(){
	parent::__construct();
	
	   if(!$this->session->userdata('id'))
            redirect('auth/login');
         }
	 }

    public function chat()
    {
    	$this->load->view('user/contacts/chat/home');
    }

    public function conatact_preview()
    {
    	$this->load->view('user/contacts/create');
    }

}
