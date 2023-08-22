<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{

	function __construct()
     {
          parent::__construct();
        
          $this->load->model('individuals_m');
          $this->load->model('users_m');
          $this->load->model('corporates_m');
          $this->load->model('counties_m');
          $this->load->model('countries_m');
          $this->load->model('subcounties_m');
         
          $this->load->helper(array('form', 'url'));
          $this->load->library('form_validation');

     }

	public function login(){
			//Validation for login form
			
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'required');



		//	//Rules for validation
          if ($this->form_validation->run() === FALSE) {

          	 $this->load->view('auth/login');

          }else{


				
				$email=$this->input->post('email');
				$password=$this->input->post('password');
				$validate=$this->users_m->user_data($email);
				
				 if ($validate && password_verify($password, $validate->password)) {

				
				 	$userData = (array) $validate;
				 	// print_r($userData); die;


					$this->session->set_userdata($userData);
					if($validate->group_id == 1 || $validate->group_id == 2){

						redirect('admin');

					}
					if($validate->group_id == 3 || $validate->group_id == 4 ){

						redirect('user');

					}
					

				} else {
					// $this->session->set_flashdata('error','Invalid login details.Please try again.');
					// redirect('auth/login');

					 $data['error'] = 'Invalid username or password.';
                     $this->load->view('auth/login', $data);
				}
			}
			
	}




	public function register()
	{

		$this->load->view('auth/account');


	}

	public function corporate()
	{

                                   
       $data['countries'] = $this->countries_m->get_all();
       $data['counties'] = $this->counties_m->get_all();
       $data['sub_counties'] = $this->subcounties_m->get_all();

      

		$this->load->view('auth/corporate',$data);


	}

	public function individual()
	{
		$data['countries'] = $this->countries_m->get_all();
       $data['counties'] = $this->counties_m->get_all();
       $data['sub_counties'] = $this->subcounties_m->get_all();

		$this->load->view('auth/individual',$data);

	}

	public function post_individual()
	{

	     $this->form_validation->set_rules('full_name', 'Full Name', 'required|min_length[5]|max_length[30]');
	     $this->form_validation->set_rules('institution', 'Institution', 'required');
	     $this->form_validation->set_rules('country', 'Country', 'required|max_length[30]');
	     $this->form_validation->set_rules('county', 'County', 'required|max_length[30]');
	     $this->form_validation->set_rules('sub_county', 'Sub county', 'required|max_length[30]');
	     $this->form_validation->set_rules('address', 'Address', 'required|max_length[30]');
	     $this->form_validation->set_rules('phone', 'Phone', 'required|callback_validate_custom_phone');
	     $this->form_validation->set_rules('email', 'Email', 'required');
	     $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|max_length[20]|alpha_numeric|matches[passconf]');
	     $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');

		//Rules for validation
          if ($this->form_validation->run() === FALSE) {

          	 $data['countries'] = $this->countries_m->get_all();
	       $data['counties'] = $this->counties_m->get_all();
	       $data['sub_counties'] = $this->subcounties_m->get_all();

			$this->load->view('auth/individual',$data);

          }else{
          	$full_name = $this->input->post('full_name');
			$institution = $this->input->post('institution');
			$country = $this->input->post('country');
			$sub_county = $this->input->post('sub_county');
			$address = $this->input->post('address');
			$email = $this->input->post('email');
			$phone = $this->input->post('phone');
			$county = $this->input->post('county');
			$password = $this->input->post('password');
	
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
				'created_at' => time(),
			);

			$ok = $this->individuals_m->create($form_data);

			if($ok){
	
				$user_data =  array(
					'full_name' => $full_name,
					'email' => $email,
					'password' => password_hash($password,PASSWORD_DEFAULT),
					'group_id' => 4,
					'passport' => $file_name,
					'created_at' => time(),
					'active' => 1,
					'phone' => $phone,
					'role' => 2,
					'locked' => 1,
					'unique_id' => $ok,
				); 
				$ok_user = $this->users_m->create($user_data);

				$data['email'] = $email;


				$this->session->set_flashdata('success','Registration successfull, Now you can login.');	
				//redirect('auth/individual');
				$this->load->view('auth/individual',$data);

			} else {

				$this->session->set_flashdata('error','Something went wrong. Please try again.');	
				redirect('auth/individual');	
			}
		}
	}

	public function test()
    {
            $this->load->view('test/upload_form', array('error' => ' ' ));
    }

     public function logout() {
        // Clear session data
        $this->session->sess_destroy();
        redirect('auth/login');
    }

	 

	public function post_corporate()
	{

		 $this->form_validation->set_rules('name', 'Name', 'required|min_length[5]|max_length[30]');
	     $this->form_validation->set_rules('type', 'Type', 'required');
	     $this->form_validation->set_rules('country', 'Country', 'required');
	     $this->form_validation->set_rules('county', 'County', 'required');
	     $this->form_validation->set_rules('sub_county', 'Sub county', 'required');
	     $this->form_validation->set_rules('address', 'Address', 'required');
	     $this->form_validation->set_rules('phone', 'Phone', 'required|callback_validate_custom_phone');
	     $this->form_validation->set_rules('website', 'Website', 'required');
	     $this->form_validation->set_rules('person', 'Person', 'required');
	     $this->form_validation->set_rules('designation', 'Designation', 'required');
	     $this->form_validation->set_rules('postal_address', 'Postal Address', 'required');
	     $this->form_validation->set_rules('email', 'Email', 'required');
	     $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|max_length[20]|alpha_numeric|matches[passconf]');
		 $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');


		  $data['countries'] = $this->countries_m->get_all();
		     $data['counties'] = $this->counties_m->get_all();
		     $data['sub_counties'] = $this->subcounties_m->get_all();

          //validate the fields of form
	      if ($this->form_validation->run() === FALSE) {
	      	

			$this->load->view('auth/corporate',$data);


	      }else{

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
			$password = $this->input->post('password');
			$postal_address = $this->input->post('postal_address');


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
				'created_at' => time(),
				'postal_address' =>$postal_address
			);

			$ok = $this->corporates_m->create($form_data);
			if($ok){
	
				$user_data =  array(
					'full_name' => $name,
					'email' => $email,
					'password' => password_hash($password,PASSWORD_DEFAULT),
					'group_id' => 3,
					'passport' => $file_name,
					'created_at' => time(),
					'active' => 1,
					'phone' => $phone,
					'role' => 2,
					'locked' => 1,
					'unique_id' => $ok,
					'postal_address' => $postal_address
				); 
				$ok_user = $this->users_m->create($user_data);

				$data['email'] = $email;


				$this->session->set_flashdata('success','Registration successfull, Now you can login.');	
			   $this->load->view('auth/corporate',$data);


			} else {

				$this->session->set_flashdata('error','Something went wrong. Please try again.');	
				redirect('auth/corporate');	
			}

          }

	}


	 public function validate_custom_phone($phone) {
       
        if (!$this->users_m->phone_exists($phone)) {
            return TRUE;
        } else {
            $this->form_validation->set_message('validate_custom_phone', 'The phone number has already been used.');
            return FALSE;
        }
    }



	



}

