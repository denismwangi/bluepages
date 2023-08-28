<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Talents extends CI_Controller {
//Validating login
	function __construct(){
		parent::__construct();
		
	    	if(!$this->session->userdata('group_id') == 1 || $this->session->userdata('group_id') == 2){

				 $this->session->sess_destroy();
		         redirect('auth/login');
			}

			 $this->load->model('talents_m');
			 
				 
	         
	          $this->load->helper(array('form', 'url'));
	          $this->load->library('form_validation');
	}

	function index()
	{
		$data['talents'] = $this->talents_m->get_all();

		$this->load->view('admin/talents/list', $data);
	}


	function create()
	{

		$this->load->view('admin/talents/create');

	}

	function post_talent()
	{

		$this->form_validation->set_rules('name', 'Name', 'required');

		 //Rules for validation
          if ($this->form_validation->run() === FALSE) {

			$this->load->view('admin/talents/create');	

          }else{
	          	$name = $this->input->post('name');
	          
				
				$dest = FCPATH . "uploads/talents";

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

				$ok = $this->talents_m->create($form_data);

				if($ok){

				   $this->session->set_flashdata('success', 'Talent added successfully.');
				     redirect( 'admin/talents');


				}
		  
		}



	

	}

	function edit($id)
	{
		if (!$id)
	      {
	              
            $this->session->set_flashdata('error', 'Talent not found');

            redirect( 'admin/talents');
        }

	   	  $data['talent'] = $this->talents_m->find($id);


	   	  


		$this->load->view('admin/talents/edit',$data);

	}


	function update_talent($id)
	{
		 if(!$id)
	      {
	              
            $this->session->set_flashdata('error', 'Talent not found');

            redirect( 'admin/talents');
        }

        $this->form_validation->set_rules('name', 'Name', 'required');

		 //Rules for validation
          if ($this->form_validation->run() === FALSE) {

			$this->load->view('admin/talents/create');	

          }else{
	          	$name = $this->input->post('name');
	          	 $talent = $this->talents_m->find($id);


	            if(!empty($_FILES['image']['name'])){

	          
				
					$dest = FCPATH . "uploads/talents";

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
		        	$file_name = $talent->image;

		        }


	            $form_data = array(

				    'name' => $name,
					'image' => $file_name,
					
					'created_at' => time(),
				);

				$ok = $this->talents_m->update_attributes($id,$form_data);

				if($ok){

				   $this->session->set_flashdata('success', 'Talent added successfully.');
				     redirect( 'admin/talents');


				}
		  
		}



	}


   public function delete_talent($id)
   {

   	if(!$id){
	              
        $this->session->set_flashdata('error', 'Talent not found');

        redirect( 'admin/talents');
    }

   	$ok = $this->talents_m->delete($id);

   	if($ok){

	   $this->session->set_flashdata('success', 'Talent deleted successfully.');
	     redirect( 'admin/talents');
	}

   	

   }





}