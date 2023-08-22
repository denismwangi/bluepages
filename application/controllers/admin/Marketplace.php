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
		  $this->load->model('childcategories_m');
			 
         
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

			$this->load->view('admin/marketplace/categories/create_category');	

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

				   $this->session->set_flashdata('success', 'Category added successfully.');
				     redirect( 'admin/marketplace/categories');


				}
		  
		}
	}

		public function post_subcategories(){

		 $this->form_validation->set_rules('name', 'Name', 'required');
		  $this->form_validation->set_rules('category', 'Category', 'required');


		 //Rules for validation
          if ($this->form_validation->run() === FALSE) {

			$data['categories'] =  $this->categories_m->get_all();
	
		  $this->load->view('admin/marketplace/categories/create_subcategories',$data);	

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

				   $this->session->set_flashdata('success', 'Sub Category added successfully.');
				     redirect( 'admin/marketplace/sub_categories');


				}
		  
		}
	}
   

   public function edit_category($id)
   {

	   	if (!$id)
	      {
	              
	            $this->session->set_flashdata('error', 'category not found');

	            redirect( 'admin/marketplace/categories/categories');
        }

	   	  $data['category'] = $this->categories_m->find($id);


	   	  $this->load->view('admin/marketplace/categories/edit_category', $data);

   }


   public function update_category($id)
   {
   	if (!$id){
	              
        $this->session->set_flashdata('error', 'category not found');

        redirect( 'admin/marketplace/categories');
    }

   	 $this->form_validation->set_rules('name', 'Name', 'required');

		 //Rules for validation
          if ($this->form_validation->run() === FALSE) {

				$data['category'] = $this->categories_m->find($id);

		   	    $this->load->view('admin/marketplace/categories/edit_category', $data);

          }else{

          	    $cat = $this->categories_m->find($id);

	          	$name = $this->input->post('name');


	          	if(!empty($_FILES['image']['name'])){

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

		        }else{

		        	$file_name = $cat->image;

	          	
	          }


	            $form_data = array(

				    'name' => $name,
					'image' => $file_name,
					
					'created_at' => time(),
				);

				$ok = $this->categories_m->update_attributes($id,$form_data);

				if($ok){

				   $this->session->set_flashdata('success', 'Category updated successfully.');
				     redirect( 'admin/marketplace/categories');


				}

		}

   }

   public function delete_category($id)
   {

   	if (!$id){
	              
        $this->session->set_flashdata('error', 'category not found');

        redirect( 'admin/marketplace/categories');
    }

   	$ok = $this->categories_m->delete($id);

   	if($ok){

	   $this->session->set_flashdata('success', 'Category deleted successfully.');
	     redirect( 'admin/marketplace/categories');
	}

   	

   }

   public function edit_subcategory($id)
   {

	   	if (!$id)
	      {
	              
	            $this->session->set_flashdata('error', 'sub category not found');

	            redirect( 'admin/marketplace/sub_categories');
        }

   	  $data['subcategory'] = $this->subcategories_m->find($id);
   	  $data['categories'] =  $this->categories_m->get_all();

   	  $this->load->view('admin/marketplace/categories/edit_subcategory', $data);

   }

   public function update_subcategories($id){

   		if (!$id)
	      {
	              
	            $this->session->set_flashdata('error', 'sub category not found');

	            redirect( 'admin/marketplace/sub_categories');
        }

		 $this->form_validation->set_rules('name', 'Name', 'required');
		  $this->form_validation->set_rules('category', 'Category', 'required');

		 //Rules for validation
          if ($this->form_validation->run() === FALSE) {

			$data['subcategory'] = $this->subcategories_m->find($id);

		   	  $this->load->view('admin/marketplace/categories/edit_subcategory', $data);

          }else{
	          	$name = $this->input->post('name');
	          	$category = $this->input->post('category');

	          	if(!empty($_FILES['image']['name'])){
	          
				
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
		         }else{
		         	$sb = $this->subcategories_m->find($id);

		         	$file_name = $sb->image;


		         }


	            $form_data = array(

				    'name' => $name,
				    'category' => $category,
					'image' => $file_name,
					
					'created_at' => time(),
				);

				$ok = $this->subcategories_m->update_attributes($id,$form_data);

				if($ok){

				   $this->session->set_flashdata('success', 'Sub Category added successfully.');
				     redirect( 'admin/marketplace/sub_categories');


				}
		  
		}
	}


   public function delete_subcategory($id)
   {

   	if (!$id){
	              
        $this->session->set_flashdata('error', 'category not found');

        redirect( 'admin/marketplace/sub_categories');
    }

   	$ok = $this->subcategories_m->delete($id);

   	if($ok){

	   $this->session->set_flashdata('success', 'sub deleted successfully.');
	     redirect( 'admin/marketplace/sub_categories');
	}

   	

   }

   public function child_categories(){

	  $data['categories'] =  $this->categories_m->get_all();
	   $data['childcategories'] =  $this->childcategories_m->get_all();
	   $data['subcategories'] =  $this->subcategories_m->get_all();

	  $this->load->view('admin/marketplace/categories/childcategories',$data);

	}


	public function create_childcategories(){

	   $data['categories'] =  $this->categories_m->get_all();
	   $data['childcategories'] =  $this->childcategories_m->get_all();
	   $data['subcategories'] =  $this->subcategories_m->get_all();

	  $this->load->view('admin/marketplace/categories/create_childcategory', $data);	
	}



	public function post_childcategories(){

		 $this->form_validation->set_rules('name', 'Name', 'required');
		 $this->form_validation->set_rules('subcategory', 'Subcategory', 'required');
		  $this->form_validation->set_rules('category', 'Category', 'required');

		 //Rules for validation
          if ($this->form_validation->run() === FALSE) {

			$data['categories'] =  $this->categories_m->get_all();
		   $data['childcategories'] =  $this->childcategories_m->get_all();
		   $data['subcategories'] =  $this->subcategories_m->get_all();
	
		  $this->load->view('admin/marketplace/categories/create_childcategory',$data);	

          }else{

	          	$name = $this->input->post('name');
	          	$category = $this->input->post('category');
	          	$subcategory = $this->input->post('subcategory');
	          
				
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
					'subcategory' => $subcategory,
					'created_at' => time(),
				);

				$ok = $this->childcategories_m->create($form_data);

				if($ok){

				   $this->session->set_flashdata('success', 'Chil Category added successfully.');
				     redirect( 'admin/marketplace/child_categories');


				}
		  
		}
	}

	public function edit_childcategories($id){


       	   $data['childcategory'] =  $this->childcategories_m->find($id);

	   $data['categories'] =  $this->categories_m->get_all();
	   $data['childcategories'] =  $this->childcategories_m->get_all();
	   $data['subcategories'] =  $this->subcategories_m->get_all();

	  $this->load->view('admin/marketplace/categories/edit_childcategory', $data);	
	}

	public function update_childcategories($id){

		 if (!$id)
	      {
	              
	            $this->session->set_flashdata('error', 'sub category not found');

	            redirect( 'admin/marketplace/child_categories');
        }

		 $this->form_validation->set_rules('name', 'Name', 'required');
		 $this->form_validation->set_rules('subcategory', 'Subcategory', 'required');
		  $this->form_validation->set_rules('category', 'Category', 'required');

		 //Rules for validation
          if ($this->form_validation->run() === FALSE) {
             $data['childcategory'] =  $this->childcategories_m->find($id);

			$data['categories'] =  $this->categories_m->get_all();
		   $data['childcategories'] =  $this->childcategories_m->get_all();
		   $data['subcategories'] =  $this->subcategories_m->get_all();
	
		  $this->load->view('admin/marketplace/categories/create_childcategory',$data);	

          }else{

	          	$name = $this->input->post('name');
	          	$category = $this->input->post('category');
	          	$subcategory = $this->input->post('subcategory');

	          	if(!empty($_FILES['image']['name'])){
	          
				
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
		        }else{
		        	  $childcategory =  $this->childcategories_m->find($id);
		        	  $file_name = $childcategory->image;

		        }


	            $form_data = array(

				    'name' => $name,
				    'category' => $category,
					'image' => $file_name,
					'subcategory' => $subcategory,
					'created_at' => time(),
				);

				$ok = $this->childcategories_m->update_attributes($id,$form_data);

				if($ok){

				   $this->session->set_flashdata('success', 'Child Category added successfully.');
				     redirect( 'admin/marketplace/child_categories');


				}
		  
		}
	}
   public function delete_childcategory($id)
   {

   	if (!$id){
	              
        $this->session->set_flashdata('error', 'child category not found');

        redirect( 'admin/marketplace/child_categories');
    }

   	$ok = $this->childcategories_m->delete($id);

   	if($ok){

	   $this->session->set_flashdata('success', 'child category deleted successfully.');
	     redirect( 'admin/marketplace/child_categories');
	}

   	

   }





}

