<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Adverts extends CI_Controller {
	//Validating login
	function __construct(){
		parent::__construct();
		
		     if(!$this->session->userdata('id'))
				redirect('auth/login');
			 }
		 

	public function index(){

		  $this->load->view('user/adverts/index');	
	}

	public function years()
	{
		$this->load->view('user/adverts/years');	

	}

	public function list($year)
	{
		$this->load->view('user/adverts/list');	

	}

	public function create()
	{
		$this->load->view('user/adverts/create');
	}

	public function upload_files()
	{
		$this->load->view('user/adverts/upload_file');

	}

	public function preview_file()
	{
		$this->load->view('user/adverts/preview_file');
	}

	public function preview_full()
	{
		$this->load->view('user/adverts/preview_full');
	}

	public function full_view()
	{
		$this->load->view('user/adverts/full_view');

	}

	public function anchor_patner()
	{

		$this->load->view('user/adverts/patner');

	}

	public function patner_preview()
	{
		$this->load->view('user/adverts/patner_preview');

	}

	public function front_seat()
	{
		$this->load->view('user/adverts/front_seat');
	}

	public function image_advert()
	{
		$this->load->view('user/adverts/upload_file');
	}

	public function video_advert()
	{
		$this->load->view('user/adverts/video_advert');

	}

	function video_preview()
	{
		$this->load->view('user/adverts/video_preview');
	}
		function full_video()
	{
		$this->load->view('user/adverts/full_video');
	}

	public function business_contact()
	{
		$this->load->view('user/adverts/business_contact');

	}

	public function business_preview()
    {
    	$this->load->view('user/adverts/business_preview');
    }

   

}
