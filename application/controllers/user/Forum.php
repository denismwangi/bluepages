<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Forum extends CI_Controller {
	//Validating login
	function __construct(){
		parent::__construct();
		
		     if(!$this->session->userdata('id'))
				redirect('auth/login');

			$this->load->model('forum_m');
			$this->load->model('users_m');
			$this->load->library('form_validation');
	 }
		 

	public function index(){

		  $this->load->view('user/forum/index');	
	}

	public function months($year){

		$data['year'] = $year;
		$this->load->view('user/forum/months',$data);	
	}


	public function list($month,$year)
	{
		if (!$month && !$year)
        {
              
            $this->session->set_flashdata('error', 'forum not found');

            redirect('user/forum/year');
        }


        $data['forum'] = $this->forum_m->discussions($month,$year);
        $data['year'] = $year;
        $data['month'] = $month;

         $data['page_title']= 'Discussion Forum';


        $this->load->view('user/forum/list',$data);	


	}



        function create($month,$year)
        {
        	if (!$month && !$year){
	      
	            $this->session->set_flashdata('error', 'forum not found');
	            redirect('user/forum/year');
	       }

	        $data['year'] = $year;
	        $data['month'] = $month;

        	$data['page_title']= 'New Discussion';


		    $this->load->view('user/forum/create',$data); 

	}

	function post_forum($month,$year)
        {

  

         if (!$month && !$year){
	      
            $this->session->set_flashdata('error', 'forum not found');
            redirect('user/forum/year');
	     }

	        $data['year'] = $year;
	        $data['month'] = $month;
	        $data['forum'] = $this->forum_m->discussions($month,$year);
					
					
			   
	        //Rules for validation
	       

	            //validate the fields of form
	            // if (!$this->form_validation->run() === FALSE) {
	            // {         //Validation OK!
	          
				     $file = '';

		            if (!empty($_FILES['file']['name']))
		            {
		                $this->load->library('files_uploader');
		                $upload_data = $this->files_uploader->upload('file');
		                $file = $upload_data['file_name'];
		            } 
		        
			      //  $user = $this->ion_auth->get_user();
			        $form_data = array(

						'title' => $this->input->post('title'), 
						'category' => $this->input->post('category'), 
						'status' => $this->input->post('status'), 
						'month' => $month, 
						'year' => $year, 
						'views'=> 0,
						'discussion' => $this->input->post('discussion'), 
						'file' => $file, 
						 'created_by' => $this->session->userdata('id'),   
						 'created_on' => time()
					);
					


		            $ok=  $this->forum_m->create($form_data);

		            if ( $ok)
		            {
		                   	
                 
					// $this->load->view('user/forum/list',$data);

					  redirect('user/forum/list/'.$month.'/'.$year);
				}

			//   	}else{

		 //            // $get = new StdClass();
		 //            // foreach ($this->form_validation() as $field)
		 //            // {   
		 //            //          $get ->$field['field']  = set_value($field['field']);
		 //            // }
			 
		 //            //  $data['result'] = $get;

		 //             $data['page_title']= 'New Discussion';


		 //             $this->load->view('user/forum/create',$data); 
				
			// 	}
			// }		
	     // }
	  }



	public function validate_form() {
	    // Set up validation rules
	    $this->form_validation->set_rules('title', 'Title', 'required|trim');
	    $this->form_validation->set_rules('category', 'Category', 'required|xss_clean');
	     $this->form_validation->set_rules('discussion', 'Discussion', 'required|trim');

     }


     function join($month,$year,$id)
	{ 
       
            //get the $id and sanitize
            $id = ( $id != 0 ) ? filter_var($id, FILTER_VALIDATE_INT) : NULL;

          
            //redirect if no $id
            if (!$id){
                   $this->session->set_flashdata('error', 'forum not found');
                    redirect('user/forum/');
            }
	         if(!$this->forum_m-> exists($id) )
             {
             $this->session->set_flashdata('error', 'forum not found');
                    redirect('user/forum/');
             }

             $check = $this->forum_m->check_views($id, $this->session->userdata('id'));
             if(!$check){

             	 $current_views = $this->forum_m->find($id);
	             $views = $current_views->views;

	             $data = array(
	             	'views' => $views + 1,
	             );

	             $form_data = array(
	             	'post_id' => $id,
	             	'user_id' => $this->session->userdata('id'));


                  $ok=  $this->forum_m->create_views($form_data);
	             $this->forum_m->update_attributes($id, $data);

             }

			$data['post'] =  $this->forum_m->find($id); 
			$data['replies'] =  $this->forum_m->get_replies($id); 
			$data['replies_count'] =  $this->forum_m->replies_count($id); 
			$data['year'] = $year;
            $data['month'] = $month;
            $data['page_title']= 'Join Discussion';

            $this->load->view('user/forum/view',$data); 
				
       
	

	}


	function post_comment($month,$year,$id)
	{
		 //get the $id and sanitize
            $id = ( $id != 0 ) ? filter_var($id, FILTER_VALIDATE_INT) : NULL;

          
            //redirect if no $id
            if (!$id){
                   $this->session->set_flashdata('error', 'forum not found');
                    redirect('user/forum/');
            }
         if(!$this->forum_m-> exists($id) )
             {
             $this->session->set_flashdata('error', 'forum not found');
                    redirect('user/forum/');
             }
			 
		//	$this->form_validation->set_rules($this->valid_response());

            // if ($this->form_validation->run() )  //validation has been passed
            //  {


		             $user = $this->session->userdata('id');
				    $res = $this->input->post('response');

			       if($res){
					     $this->forum_m->create_code(
					     	'forum_replies',
			     	 array(
			     	 	'discussion_id'=>$id,
			     	 	'comment'=>$res,
			     	 	'created_on'=>time(),
			     	 	 'created_by'=>$user,
			     	 	 'status'=>1 ));
				   }
				  
		//	 }
		

			   redirect( 'user/forum/join/'.$month.'/'.$year.'/'.$id);

	}

	function post_reply(){
			
			$comment = $this->input->post('comment');
			$id = $this->input->post('id');
			
			 $user = $this->session->userdata('id');
			 
        $form_data = array(
			
				'comment' => $comment, 
				'reply_id' => $id, 	
				'created_by' => $user,   
				'created_on' => time()
			);
		
            $ok =  $this->forum_m->create_code('reply_responses',$form_data);
			
			
		}

		function time_ago($timestamp) {
			    $current_time = time();
			    $time_difference = $current_time - $timestamp;

			    $seconds = $time_difference;
			    $minutes = round($seconds / 60);
			    $hours = round($seconds / 3600);
			    $days = round($seconds / 86400);
			    $weeks = round($seconds / 604800);
			    $months = round($seconds / 2629440);
			    $years = round($seconds / 31553280);

			    if ($seconds <= 60) {
			        return $seconds . ' seconds ago';
			    } elseif ($minutes <= 60) {
			        return $minutes . ' minutes ago';
			    } elseif ($hours <= 24) {
			        return $hours . ' hours ago';
			    } elseif ($days <= 7) {
			        return $days . ' days ago';
			    } elseif ($weeks <= 4) {
			        return $weeks . ' weeks ago';
			    } elseif ($months <= 12) {
			        return $months . ' months ago';
			    } else {
			        return $years . ' years ago';
			    }
         }


		function get_comments($id)
		{

			$chat_data = $this->forum_m->get_replies($id);
			$post =  $this->forum_m->find($id);
			$status = $post->status; 
			$replies_count=  $this->forum_m->replies_count($id); 

			//print_r($data);

			foreach ($chat_data as $r) {

				 $u = $this->users_m->find($r->created_by);
                                    
              $posted_response = $this->forum_m->posted_response($r->id);
              $count_response = $this->forum_m->count_response($r->id);

            // print_r($posted_response); die;
				
			/*|
              |
              |
              |
              |
              |   this is the implementation of chat forum the html is loaded using AJAX
              |
              |   To be implemented later with websockets/Pusher
              |
              |

            */



			?>

			<div class="schedule-list">
                                            
                                      
                                         <a href="<?php echo base_url().'user/profile/view/'.$u->id;?>"><img src="https://www.test.bluepages.co.ke/public/img/admin/admin.jpg" alt="user image" width="50"  height="50" class="schedule-image"></a>
                                    
                           
                        
                                     
                                         
                     
                        
                     
                                        <a href="<?php echo base_url().'user/profile/view/'.$u->id;?>"><h5 style="margin-left:0px !important" >
                                        <b>By:</b> <?php echo $u->full_name;?> 
                                        <small class="m-l-10 text-c-blue f-w-700"><?php echo date('d M Y',$post->created_on);?></small>
                                        </h5>
                                    </h5>
                                        <span class="m-b-0 font-15" > <?php echo $r->comment?> </span>
                                        
                                         <p>
                                            <a href="#!">
                                            <i class="fa fa-calendar text-c-blue m-r-10"></i>
                                            <?php echo $this->time_ago($r->created_on);?>
                                            </a>
                                            &nbsp;&nbsp;&nbsp;
                                           
                                          </p>
                                        

                                    
                                             
                                             <div class="col-sm-12"  id="response_replies_<?php echo $r->id; ?>" style="display:none">
                                             
                                                    <div class="card-header1">
                                                        <b>Comments (<?php echo $count_response; ?>)</b>
                                                        <hr>
                                                      
                                                    </div>
                                                    
                                             <!--- POST REPLIES ------------>                                            
                                                           
                                               
                                                    
                                                    <div class=" row" id="u_response_display_<?php echo $r->id;?>" style="display:none;">
                                                        <div class="col-sm-1 text-center">
                                                             <img src="https://www.test.bluepages.co.ke/public/img/admin/admin.jpg"   alt="user image" class="img-radius text-center" width="40" height="40">
                                                        </div>
                                                    <div class="col-sm-11">
                                                            <h5>
                                                            <?php
                                                             echo $u->full_name;?> 
                                                            <small class="m-l-10 text-c-blue f-w-700"><?php echo date('d M Y');?></small>
                                                            </h6>
                                                            <p class="text-muted m-b-0" id="user_response_<?php echo $r->id;?>"></p>
                                                        </div>
                                                        
                                                    </div>
                                                    <hr>

                                                     



                                                    <?php 
                                            //    $fpath = image_path('avatar-blank.jpg');
                                                
                                                foreach($posted_response as $rep){



                                                    $ru = $this->users_m->find($r->created_by);
                                                    
                                                    ?>
                                                   
                                                    
                                                    <div class=" row">
                                                        <div class="col-sm-1 text-center">
                                                             <img src="https://www.test.bluepages.co.ke/public/img/admin/admin.jpg"   alt="user image" class="img-radius text-center" width="40" height="40">
                                                        </div>
                                                    <div class="col-sm-11">
                                                            <h6>
                                                            <?php echo $ru->full_name;?> 
                                                            <small class="m-l-10 text-c-blue f-w-700"><?php echo date('d M Y',$rep->created_on);?></small>
                                                            </h6>
                                                            <span class="text-muted m-b-0 font-15"><?php echo $rep->comment?></span>
                                                        </div>
                                                    </div>
                                                    <hr>


                                                
                                                   
                                                <?php } ?>
                                                  
                                  
                                       
                                                     
                                            </div>

            
                                             
                                           
                                </div>

                                      
                                

    <?php
         

         

        
     }

		}

}