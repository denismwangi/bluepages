<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Settings extends CI_Controller {
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

	 public function edit_profile()
	 {
	 	$id =$this->session->userdata('id');
	 	$u= $this->users_m->find($id);

	 //	print_r($u); die;
	 	$data['countries'] = $this->countries_m->get_all();
       $data['counties'] = $this->counties_m->get_all();
       $data['sub_counties'] = $this->subcounties_m->get_all();
		if($u->group_id == 4){



			$data['user'] = $this->individuals_m->find($u->unique_id);
			$data['u']  = $this->users_m->find($id);

			 $this->load->view('settings/individual.php',$data);	

		}elseif ($u->group_id ==3) {



			$data['user'] = $this->corporates_m->find($u->unique_id);
			$data['u']  = $this->users_m->find($id);

			$this->load->view('settings/corporate.php',$data);	

		}elseif ($u->group_id == 1) {
			
			$data['user'] = $this->users_m->find($id);
			$this->load->view('settings/admin.php',$data);	
		}
		
	 }

	 public function update_individual()
	 {

 	    	$id =$this->session->userdata('id');
		 	$u= $this->users_m->find($id);

	 	    $full_name = $this->input->post('full_name');
			$institution = $this->input->post('institution');
			$country = $this->input->post('country');
			$sub_county = $this->input->post('sub_county');
			$address = $this->input->post('address');
			$email = $this->input->post('email');
			$phone = $this->input->post('phone');
			$county = $this->input->post('county');


			  if(!empty($_FILES['passport']['name'])){




			  	$dest = FCPATH . "uploads/profile";

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

	            $this->upload->do_upload('passport');

	            $data = $this->upload->data();

	            $file_name = $data['file_name'];

			  }else{

			  	$file_name = $u->passport;

			  }




		
          
			$form_data = array(

			    'full_name' => $full_name,
				'institution' => $institution,
				'country' => $country,
				'county' => $county,
				'sub_county' => $sub_county,
				'address' => $address,
				'email' => $email,
				'phone' => $phone,
				'passport' => $file_name,
				'updated_at' => time(),
			);




			
			$ok = $this->individuals_m->update_attributes($u->unique_id,$form_data);


			if($ok){
	
				$user_data =  array(
					'full_name' => $full_name,
					'email' => $email,
					'password' => password_hash(12345678,PASSWORD_DEFAULT),
					'group_id' => 4,
					'passport' => $file_name,
					'updated_at' => time(),
					'active' => 1,
					'phone' => $phone,
					'role' => 2,
					'locked' => 1,
					
				); 

				 //print_r($user_data); die;

				$ok_user = $this->users_m->update_attributes($id,$user_data);

				


				$this->session->set_flashdata('success','Details updated Successfully.');	

				$this->load->helper('url');
				redirect($_SERVER['HTTP_REFERER']);


				//redirect('user/settings/edit_profile');

			} else {

				$this->session->set_flashdata('error','Something went wrong. Please try again.');	
				redirect('user/settings/edit_profile');	
			}
	 	
	 }

	 public function update_corporate()
	 {
	 	$id =$this->session->userdata('id');
		 	$u= $this->users_m->find($id);
	 	//Rules for validation
         // $this->form_validation->set_rules($this->coorporate_validation());

          //validate the fields of form
          // if ($this->form_validation->run())
          // {
          	$name = $this->input->post('name');
			$type = $this->input->post('type');
			$country = $this->input->post('country');
			$county = $this->input->post('county');
			$sub_county = $this->input->post('sub_county');
			$address = $this->input->post('address');
			$email = $this->input->post('email');
			$website = $this->input->post('website');
			$reg_person = $this->input->post('person');
			$designation = $this->input->post('designation');
			$phone = $this->input->post('phone');


			if(!empty($_FILES['passport']['name'])){

			  	$dest = FCPATH . "uploads/profile";

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

	            $this->upload->do_upload('passport');

	            $data = $this->upload->data();

	            $file_name = $data['file_name'];

			  }else{

			  	$file_name = $u->passport;

			  }
            

			$form_data = array(

			    'name' => $name,
				'type' => $type,
				'country' => $country,
				'county' => $county,
				'sub_county' => $sub_county,
				'address' => $address,
				'website' => $website,
				'email' => $email,
				'reg_person'=> $reg_person,
				'designation' => $designation,
				'phone' => $phone,
				'passport' => $file_name,
				'updated_at' => time(),
			);

			

			$ok = $this->corporates_m->update_attributes($u->unique_id,$form_data);
			if($ok){
	
				$user_data =  array(
					'full_name' => $name,
					'email' => $email,
					'password' => password_hash(12345678,PASSWORD_DEFAULT),
					'group_id' => 3,
					'passport' => $file_name,
					'updated_at' => time(),
					'active' => 1,
					'phone' => $phone,
					'role' => 2,
					'locked' => 1,
					
				); 
				$ok_user = $this->users_m->update_attributes($id,$user_data);

				


				$this->session->set_flashdata('success','Details updated Successfully.');	

				$this->load->helper('url');
				redirect($_SERVER['HTTP_REFERER']);


				

			} else {

				$this->session->set_flashdata('error','Something went wrong. Please try again.');	
				redirect('auth/corporate');	
			}

	 }




}