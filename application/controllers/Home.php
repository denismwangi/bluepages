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

            $names_data  = $data['name'];
            
			//$names_full = str_replace(' ', '', $names_data);

				$names_full = explode(' ', $names_data); // Split the full name into an array of two elements
        
		        if (count($names_full) >= 2) {
		            $first_name = $names_full[0];
		            $last_name = end($names_full);

		            $names = $first_name.$last_name;


		            $sname = strtolower($names);
					$last_id_name = $sname;
		            $email = $names.'@posta.go.ke';
					$u = $this->users_m->email_exists($email);
			}

			

			if(!$u){



				  $cid = array(

		              "email" => $last_id_name.'@posta.go.ke'
		          );

		        $res = $this->output->set_content_type('application/json')->set_output(json_encode($cid));
		        return $res;

			}else{

				$baseName = $names;
				$found = false;
				$number = "001";
				$incremented = 1;
				
				while (!$found) {

					$length = strlen($number); // Get the length of the original string
					$formattedNumber = str_pad($incremented, $length, '0', STR_PAD_LEFT);
					$nameToCheck = $baseName . $formattedNumber.'@posta.go.ke';
				    
				    // Check if the email already exists 
				    if (!$this->emailExists($nameToCheck)) {
				        $found = true;
				        $finalName = $nameToCheck;
				    } else {
				    	$incremented = intval($number) + 1;
				       // $number++;

				    }
				}


				$cid = array(

		              "email" => $finalName
		          );

		        $res = $this->output->set_content_type('application/json')->set_output(json_encode($cid));
		        return $res;

				//echo "New Available Name: " . $finalName . PHP_EOL;


			}

			

			
			

		}

	}
	public function create_corporate_email()
	{

	    $data =  json_decode(file_get_contents('php://input'), true);

	    if($data){

            $names_data  = $data['name'];

				$names_full =  str_replace(' ', '', $names_data);
       
		            $names = $names_full;
		            $sname = strtolower($names);
					$last_id_name = $sname;
		            $email = $names.'@posta.go.ke';
					$u = $this->users_m->email_exists($email);
		

			if(!$u){



				  $cid = array(

		              "email" => $last_id_name.'@posta.go.ke'
		          );

		        $res = $this->output->set_content_type('application/json')->set_output(json_encode($cid));
		        return $res;

			}else{

				$baseName = $names;
				$found = false;
				$number = "001";
				$incremented = 1;
				
				while (!$found) {

					$length = strlen($number); // Get the length of the original string
					$formattedNumber = str_pad($incremented, $length, '0', STR_PAD_LEFT);
					$nameToCheck = $baseName . $formattedNumber.'@posta.go.ke';
				    
				    // Check if the email already exists 
				    if (!$this->emailExists($nameToCheck)) {
				        $found = true;
				        $finalName = $nameToCheck;
				    } else {
				    	$incremented = intval($number) + 1;
				       // $number++;

				    }
				}


				$cid = array(

		              "email" => $finalName
		          );

		        $res = $this->output->set_content_type('application/json')->set_output(json_encode($cid));
		        return $res;

				//echo "New Available Name: " . $finalName . PHP_EOL;


			}

			

			
			

		}

	}


	public function emailExists($email)
	{

		$u = $this->users_m->email_exists($email);

		if($u)
		{
			return true;
		}else{
			return false;
		}


	}



}


