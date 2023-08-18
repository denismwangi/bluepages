<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Marketplace extends CI_Controller {
//Validating login
function __construct(){
	parent::__construct();
	
	    	if(!$this->session->userdata('group_id') == 1 || $this->session->userdata('group_id') == 2){

				 $this->session->sess_destroy();
		         redirect('auth/login');
			}

			 $this->load->model('categories_m');
			 $this->load->model('subcategories_m');
			 
         
          $this->load->helper(array('form', 'url'));
          $this->load->library('form_validation');
	 }

	public function index(){


	
	  $this->load->view('admin/marketplace/index');	
	}


	public function categories(){

	  $data['categories'] =  $this->categories_m->get_all();
	  $this->load->view('admin/marketplace/categories/categories',$data);

	}
	public function create_categories(){


	
	  $this->load->view('admin/marketplace/categories/create_category');	
	}

	public function create_subcategories(){

    $data['categories'] =  $this->categories_m->get_all();
	
	  $this->load->view('admin/marketplace/categories/create_subcategories',$data);	
	}


	public function sub_categories(){

	  $data['subcategories'] =  $this->subcategories_m->get_all();
	  $this->load->view('admin/marketplace/categories/sub_categories',$data);

	}

	

	public function post_categories(){

		 $this->form_validation->set_rules('name', 'Name', 'required');

		 //Rules for validation
          if ($this->form_validation->run() === FALSE) {

			$this->load->view('auth/create_categories');

          }else{
	          	$name = $this->input->post('name');
	          
				
				$dest = FCPATH . "uploads/marketplace/categories";

	            $config['upload_path'] = $dest;
	            $config['allowed_types'] = 'png|jpeg|jpg';
	        //    $config['max_size'] = '2048';
	         //   $config['encrypt_name'] = true;

	            $this->upload->initialize($config);

	            if (!is_dir($dest)) {

	                mkdir(
	                    $dest,
	                    0777,
	                    true
	                );
	            }

	             $this->load->library('upload', $config);

	            $this->upload->do_upload('image');

	            $data = $this->upload->data();
	            $file_name = $data['file_name'];


	            $form_data = array(

				    'name' => $name,
					'image' => $file_name,
					
					'created_at' => time(),
				);

				$ok = $this->categories_m->create($form_data);

				if($ok){

				   $this->session->set_flashdata('alert', 'Category submitted successfully.');
				     redirect( 'admin/marketplace/categories/categories');


				}
		  
		}
	}

		public function post_subcategories(){

		 $this->form_validation->set_rules('name', 'Name', 'required');

		 //Rules for validation
          if ($this->form_validation->run() === FALSE) {

			$this->load->view('auth/create_sub_categories');

          }else{
	          	$name = $this->input->post('name');
	          	$category = $this->input->post('category');
	          
				
				$dest = FCPATH . "uploads/marketplace/categories";

	            $config['upload_path'] = $dest;
	            $config['allowed_types'] = 'png|jpeg|jpg';
	        //    $config['max_size'] = '2048';
	         //   $config['encrypt_name'] = true;

	            $this->upload->initialize($config);

	            if (!is_dir($dest)) {

	                mkdir(
	                    $dest,
	                    0777,
	                    true
	                );
	            }

	             $this->load->library('upload', $config);

	            $this->upload->do_upload('image');

	            $data = $this->upload->data();
	            $file_name = $data['file_name'];


	            $form_data = array(

				    'name' => $name,
				    'category' => $category,
					'image' => $file_name,
					
					'created_at' => time(),
				);

				$ok = $this->subcategories_m->create($form_data);

				if($ok){

				   $this->session->set_flashdata('alert', 'Sub Category submitted successfully.');
				     redirect( 'admin/marketplace/sub_categories');


				}
		  
		}
	}
   

   public function edit_category($id)
   {

   }


   public function update_category()
   {

   }

   public function delete_category($id)
   {

   }

}

