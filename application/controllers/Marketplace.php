<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Marketplace extends CI_Controller {
//Validating login
function __construct(){
	parent::__construct();
	
	

	   $this->load->model('categories_m');
	$this->load->model('subcategories_m');
	 }

     public function index(){


	  $data['categories'] = $this->categories_m->get_all();
	  $data['subcategories'] = $this->subcategories_m->get_all();
	  $this->load->view('marketplace/index', $data);	
	}

	public function sub_categories($id)
	{

		

		$data['subcategories'] = $this->subcategories_m->find_all($id);
		$cat_data = $this->categories_m->find($id);
		$data['name'] = $cat_data->name;

		  $data['categories'] = $this->categories_m->get_all();
		  
		  $this->load->view('marketplace/categories', $data);	

	}



}
