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
     }

	public function login(){
			//Validation for login form
			$this->form_validation->set_rules('email','required|valid_email');
			$this->form_validation->set_rules('password','required');



		//	if($this->form_validation->run()){
				
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
			// } else{
				
			// 	//$this->load->view('auth/login');	
			// 	 $data['error'] = 'Invalid username or password.';
   //               $this->load->view('auth/login', $data);
			// }
	}


	public function register_coop()
	{
		//Form Validation
		$this->form_validation->set_rules('firstname','First Name','required|alpha');
		$this->form_validation->set_rules('lastname','Last Name','required|alpha');
		$this->form_validation->set_rules('emailid','Email Id','required|valid_email|is_unique[tblusers.Email]');
		$this->form_validation->set_rules('password','Password','required|min_length[6]');
		$this->form_validation->set_rules('confirmpassword','Confirm Password','required|min_length[6]|matches[password]');
		$this->form_validation->set_message('is_unique', 'This email is already exists.');
		if($this->form_validation->run())
		{
			//Getting Post Values
			$fname=$this->input->post('firstname');
			$lname=$this->input->post('lastname');
			$emailid=$this->input->post('emailid');
			$password=$this->input->post('password');
			$this->load->model('Signup_Model');
			$this->Signup_Model->index($fname,$lname,$emailid,$password);
		} else {
			
			$this->load->view('signup');
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
		//Rules for validation
          $this->form_validation->set_rules($this->individual_validation());

          //validate the fields of form
          // if ($this->form_validation->run())
          // {  

         

	        $full_name = $this->input->post('full_name');
			$institution = $this->input->post('institution');
			$country = $this->input->post('country');
			$sub_county = $this->input->post('sub_county');
			$address = $this->input->post('address');
			$email = $this->input->post('email');
			$phone = $this->input->post('phone');
			$county = $this->input->post('county');
			//$passport = $this->input->post('image'); 

		    $file_name = '';

			$this->load->helper('common_helper');

	        $config['upload_path']          = './public/uploads/profile/';
	        $config['allowed_types']        = 'gif|jpg|png|jpeg';
	        //$config['encrypt_name']         = true;

	        $this->load->library('upload', $config);

	        if(!empty($_FILES['image']['name'])){
                    
                   $this->upload->do_upload('image');
                   $data = $this->upload->data();

                  //  print_r($data); die;

	        }


	        if(!empty($_FILES['image']['name'])){
                //image is selected
                if($this->upload->do_upload('image')) {
                	$data = $this->upload->data();
                    //resizing image for admin
                    resizeImage($config['upload_path'].$data['file_name'], $config['upload_path'].'thumb/'.$data['file_name'], 300,270);

                    $file_name = $data['file_name'];

                }
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
				'created_at' => time(),
			);

			$ok = $this->individuals_m->create($form_data);


			if($ok){
	
				$user_data =  array(
					'full_name' => $full_name,
					'email' => $email,
					'password' => password_hash(12345678,PASSWORD_DEFAULT),
					'group_id' => 4,
					'passport' => $file_name,
					'created_at' => time(),
					'active' => 1,
					'phone' => $phone,
					'role' => 2,
					'locked' => 1,
				); 
				$ok_user = $this->users_m->create($user_data);


				$this->session->set_flashdata('success','Registration successfull, Now you can login.');	
				redirect('auth/login');

			} else {

				$this->session->set_flashdata('error','Something went wrong. Please try again.');	
				redirect('auth/individual');	
			}

			
			
		//}


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
		//Rules for validation
          $this->form_validation->set_rules($this->coorporate_validation());

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
			$logo = $this->input->post('logo');  
			// Set the file upload configuration
	        $config['upload_path'] = './uploads/';
	        $config['allowed_types'] = 'gif|jpg|png';
	       // $config['max_size'] = 2048; // 2MB
	        $config['encrypt_name'] = TRUE;

	        $this->load->library('upload', $config);
	        $file_name = '';
	        if (!$this->upload->do_upload($logo)) {
	            // File upload failed, display error message
	           $data['error'] = $this->upload->display_errors();

	           $this->load->view('auth/individual', $data);

	           // $this->load->view('upload_form', $data);

	        } else {
	            // File uploaded successfully, retrieve upload data
	            $upload_data = $this->upload->data();
	            $file_name = $upload_data['file_name'];
	            
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
				'logo' => $file_name,
				'created_at' => time(),
			);

			$ok = $this->corporates_m->create($form_data);
			if($ok){
	
				$user_data =  array(
					'full_name' => $name,
					'email' => $email,
					'password' => password_hash(12345678,PASSWORD_DEFAULT),
					'group_id' => 3,
					'passport' => $file_name,
					'created_at' => time(),
					'active' => 1,
					'phone' => $phone,
					'role' => 2,
					'locked' => 1,
				); 
				$ok_user = $this->users_m->create($user_data);


				$this->session->set_flashdata('success','Registration successfull, Now you can login.');	
				redirect('auth/login');

			} else {

				$this->session->set_flashdata('error','Something went wrong. Please try again.');	
				redirect('auth/corporate');	
			}

          //}

    


	}



	 private function individual_validation()
     {
          $config = array(
                  array(
                          'field' => 'full_name',
                          'label' => 'Full Name',
                          'rules' => 'required|trim|xss_clean|min_length[0]|max_length[60]'
                      ),

                  array(
                          'field' => 'institution',
                          'label' => 'Institution',
                          'rules' => 'trim|xss_clean|min_length[0]|max_length[500]'
                    ),
                  array(
                          'field' => 'country',
                          'label' => 'Country',
                          'rules' => 'trim|xss_clean|min_length[0]|max_length[500]'
                    ),
                  array(
                          'field' => 'sub_county',
                          'label' => 'Sub_county',
                          'rules' => 'trim|xss_clean|min_length[0]|max_length[500]'
                    ),
                  array(
                          'field' => 'address',
                          'label' => 'Address',
                          'rules' => 'trim|xss_clean|min_length[0]|max_length[500]'
                    ),
                  array(
                          'field' => 'email',
                          'label' => 'Email',
                          'rules' => 'trim|xss_clean|min_length[0]|max_length[500]|valid_email|is_unique[individuals.email]'
                    ),
                  array(
                          'field' => 'phone',
                          'label' => 'Phone',
                          'rules' => 'trim|xss_clean|min_length[0]|max_length[500]'
                    ),
                   array(
                          'field' => 'passport',
                          'label' => 'Passport',
                          'rules' => 'trim|xss_clean|min_length[0]|max_length[500]'
                    ),
         );


          $this->form_validation->set_error_delimiters("<br /><span class='error'>", '</span>');

          return $config;
     }

     private function coorporate_validation()
     {

     			

          $config = array(
                  array(
                          'field' => 'name',
                          'label' => 'Name',
                          'rules' => 'required|trim|xss_clean|min_length[0]|max_length[60]'
                      ),

                  array(
                          'field' => 'type',
                          'label' => 'Type',
                          'rules' => 'trim|xss_clean|min_length[0]|max_length[500]'
                    ),

                  array(
                          'field' => 'country',
                          'label' => 'Country',
                          'rules' => 'trim|xss_clean|min_length[0]|max_length[500]'
                    ),
	                 array(
	                      'field' => 'county',
	                      'label' => 'County',
	                      'rules' => 'trim|xss_clean|min_length[0]|max_length[500]'
	                ),

                  array(
                          'field' => 'sub_county',
                          'label' => 'Sub_county',
                          'rules' => 'trim|xss_clean|min_length[0]|max_length[500]'
                    ),
                  array(
                          'field' => 'address',
                          'label' => 'Address',
                          'rules' => 'trim|xss_clean|min_length[0]|max_length[500]'
                    ),
                  array(
                          'field' => 'email',
                          'label' => 'Email',
                          'rules' => 'trim|xss_clean|min_length[0]|max_length[500]|valid_email|is_unique[corporates.email]'
                    ),
                  array(
                          'field' => 'phone',
                          'label' => 'Phone',
                          'rules' => 'trim|xss_clean|min_length[0]|max_length[500]'
                    ),
                   array(
                          'field' => 'website',
                          'label' => 'Website',
                          'rules' => 'trim|xss_clean|min_length[0]|max_length[500]'
                    ),
                    array(
                          'field' => 'reg_person',
                          'label' => 'Registering Person',
                          'rules' => 'trim|xss_clean|min_length[0]|max_length[500]'
                    ),
                     array(
                          'field' => 'designation',
                          'label' => 'Designation',
                          'rules' => 'trim|xss_clean|min_length[0]|max_length[500]'
                    ),
                   array(
                          'field' => 'logo',
                          'label' => 'Logo',
                          'rules' => 'trim|xss_clean|min_length[0]|max_length[500]'
                    ),
         );


          $this->form_validation->set_error_delimiters("<br /><span class='error'>", '</span>');

          return $config;
     }





}

