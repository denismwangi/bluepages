<?php
$this->load->helper('assets');

load_top();
?>
 <body themebg-pattern="theme2"  style="background-image: url(<?php echo base_url().'public/img/slide1.jpg';?>); -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;; background-repeat: no-repeat; background-attachment: fixed;" >


               <div class="row">
			      <div class="col-md-2">
					   <a style="padding:5px;Text-align: center;"	class="button btn btn-danger " data-toggle="elementscroll" href="<?php echo base_url();?>"> <i class="fa fa-caret-left"></i> BACK TO MAIN PAGE
				</a>
				</div>
				
				<div class="col-md-2">
					   <a style="padding:5px;Text-align: center;"	class="button btn btn-danger " data-toggle="elementscroll" href="<?php echo base_url().'auth/login';?>"> <i class="fa fa-caret-left"></i> BACK TO PREVIOUS PAGE
				</a>
				</div>
				<div class="col-md-8">
					   
				</div>
			   
			   
			   
			   </div>
            
    
      <section class="login-block">
       
        <div class="container-fluid">
		
            <div class="row">
                <div class="col-lg-6"></div>
 <div class="col-lg-6">
 
                <!--<div class=" md-float-material form-material auth-box card login-a">-->
				
				<div style="background: gray; color: #fff">
                	<div class="text-center">
                           <img src="<?php echo base_url().'public/img/bluepages.png';?>" width="100" height="100" alt="dsms" />                        </div>
                        <div class="text-center" style="padding-bottom: 10px;">
                            <h3 style="color:white;">Welcome to Blue Pages   </h3>

                    	 <h4 style="color:white;" class="lead">The best place to Find, Advertise and Market  products and services.</h4>
                        </div>
                        <div class="text-center" style="background: blue; color: #fff; text-align: center; padding: 10px;"><b>Create Corporate Blue Page Account</b></div>
                        <div class="row text-center" >

                            <div class="col-sm-12">
                                    <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success" style="margin-left: 30px; margin-right: 30px; margin-top: 10px;" >
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>

                     <script>
                      var email = "<?php echo $email; ?>";
                   
                      const login_url = "<?php echo base_url('auth/login'); ?>";
                      var message = "Your Username/Email is, " + email + "\nProceed to login with this username and the registered password";

                      Swal.fire({
                          icon: 'success',
                          title: 'Registration Successful',
                          text: message
                           
                                
                      }).then(function() {
                        window.location.href = login_url;
                      })

                    </script>
                    <style type="text/css">
                      .swal2-html-container{
                        font-size: 20px !important;
                      }
                      .swal2-popup{

                        width: 50em !important;

                      }
                    </style>
            <?php endif; ?>

                              <?php 
                              $attributes = array('class' => 'form-horizontal card', 'id' => '', 'style'=> 'margin:5px; background:#fff;','utocomplete'=>'off');
                              echo   form_open_multipart('auth/post_corporate', $attributes); 
                              ?>

							
							
                        <div class="form-group row">
                            <div class="col-md-5 input-blue">
                                <div class=""> Corporate Name </div>
                            </div>
                            <div class="col-md-7">
                                <input type="text" name="name" value="<?php echo set_value('name'); ?>"  id="name" onchange="get_email()" class="form-control input-white" pattern=".{6,}" title="Enter your real names" required="required" />

                               
                                  <span class="text-danger" style="color: #f00; font-size: 14px;"><?= form_error('name'); ?><span>                                                           </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-5 input-blue">
                            <div class=""> Corporate Type  </div></div>
                            <div class="col-md-7">
                                <select name="type" class="select form-control" required="required" >
<option value="" selected="selected"></option>
<option value="1">Public</option>
<option value="2">Private</option>
</select>      
  <span class="text-danger" style="color: #f00; font-size: 14px;"><?= form_error('type'); ?><span>                                                     </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-5 input-blue">
                            <div class=""> Country  </div></div>
                            <div class="col-md-7">
                                <select name="country" class="select form-control" required="required" >
                                    <option value="" selected="selected">Select County</option>
                                    <?php

                                    foreach ($countries as $country) {
                                        ?>
                                        <option value="<?php echo $country->id; ?>"><?php echo $country->name; ?></option>
                                        <?php
                                    }
                                    ?>



</select>       
 <span class="text-danger" style="color: #f00; font-size: 14px;"><?= form_error('country'); ?><span>                                                     </div>
                        </div>

                         <div class="form-group row">
                            <div class="col-md-5 input-blue">
                            <div class=""> County  </div></div>
                            <div class="col-md-7">
                                <select name="county" class="select form-control" id="county" required="required" >
<option value="" selected="selected">Select County</option>
<option value="AZ">International / Unknown</option>
 <?php

                                    foreach ($counties as $county) {
                                        ?>
                                        <option value="<?php echo $county->id; ?>"><?php echo $county->name; ?></option>
                                        <?php
                                    }
                                    ?>


</select>          
 <span class="text-danger" style="color: #f00; font-size: 14px;"><?= form_error('county'); ?><span>                                                  </div>
                        </div>

                         <div class="form-group row">
                            <div class="col-md-5 input-blue">
                            <div class=""> Sub County  </div></div>
                            <div class="col-md-7">
                                <select name="sub_county" class="select form-control" id="sub_county">
<option value="" selected="selected">Select Sub County</option>

                   <?php

                                    foreach ($sub_counties as $subcounty) {
                                        ?>
                                        <option value="<?php echo $subcounty->id; ?>"><?php echo $subcounty->name; ?></option>
                                        <?php
                                    }
                                    ?>
</select>  
 <span class="text-danger" style="color: #f00; font-size: 14px;"><?= form_error('sub_county'); ?><span>   
                                                           </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-5 input-blue">
                            <div class=""> Physical Address  </div></div>
                            <div class="col-md-7">
                                <input type="text" name="address" value="<?php echo set_value('address'); ?>"  class="form-control input-white" pattern=".{3,}" title="Enter a valid address" required="required"  />
                                 <span class="text-danger" style="color: #f00; font-size: 14px;"><?= form_error('address'); ?><span>                                                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-5 input-blue">
                            <div class="">Postal Address  </div></div>
                            <div class="col-md-7">
                                <input type="text" name="postal_address" value="<?php echo set_value('postal_address'); ?>"  class="form-control input-white" pattern=".{3,}" title="Enter a valid address" required="required"  />
                                 <span class="text-danger" style="color: #f00; font-size: 14px;"><?= form_error('postal_address'); ?><span>                                                            </div>
                        </div>

                         <div class="form-group row">
                            <div class="col-md-5 input-blue">
                            <div class=""> Email Address  </div></div>
                            <div class="col-md-7">
                               <input type="text" name="email" id="email" value="<?php echo set_value('email'); ?>" class="form-control input-white email" pattern=".{6,}" title="Enter a valid email" required="required" readonly="" />

                                                           </div>
                        </div>

                             <div class="form-group row">
                            <div class="col-md-5 input-blue">
                            <div class=""> Website  </div></div>
                            <div class="col-md-7">
                                <input type="text" name="website" value="<?php echo set_value('website'); ?>" class="form-control input-white" pattern=".{6,}" title="Enter valid website" required="required"  />
                                  <span class="text-danger" style="color: #f00; font-size: 14px;"><?= form_error('website'); ?><span>                                                           </div>
                        </div>

                         <div class="form-group row">
                            <div class="col-md-5 input-blue">
                            <div class=""> Registering Person  </div></div>
                            <div class="col-md-7">
                                <input type="text" name="person" value="<?php echo set_value('person'); ?>" class="form-control input-white" pattern=".{6,}" title="Enter Real Names" required="required"  />  
                                  <span class="text-danger" style="color: #f00; font-size: 14px;"><?= form_error('person'); ?><span> 
                                                                                        </div>
                        </div>

                         <div class="form-group row">
                            <div class="col-md-5 input-blue">
                            <div class=""> Designation  </div></div>
                            <div class="col-md-7">
                                <input type="text" name="designation" value="<?php echo set_value('designation'); ?>" class="form-control input-white" pattern=".{2,}" title="Designation" required="required"  />    
                                  <span class="text-danger" style="color: #f00; font-size: 14px;"><?= form_error('designation'); ?><span> 
                                                                                       </div>
                        </div>
                         <div class="form-group row">
                            <div class="col-md-5 input-blue">
                            <div class=""> Valid Phone No. </div></div>
                            <div class="col-md-7">
                               <input type="tel" name="phone" value="<?php echo set_value('phone'); ?>" class="form-control input-white mobile-number" pattern="([\+0-9\s]{10,})"  title="required valid phone" required="required" />
                                 <span class="text-danger" style="color: #f00; font-size: 14px;"><?= form_error('phone'); ?><span> 

                                                           </div>
                        </div>
                         <div class="form-group row">
                            <div class="col-md-5 input-blue">
                            <div class="">Password </div></div>
                            <div class="col-md-7">
                                <input type="text" name="password" id="pswd1" value="<?php echo set_value('password'); ?>" class="form-control input-white" required="required" />
                                   

                                                           </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-5 input-blue">
                            <div class="">Confirm Password </div></div>
                            <div class="col-md-7">
                                <input type="text" name="passconf" id="pswd2" class="form-control input-white" required="required" />
                                 <span class="text-danger" style="color: #f00; font-size: 14px;"><?= form_error('password'); ?><span> 

                                                           </div>
                        </div>
                       

                         <div class="form-group row">
                            <div class="col-md-5 input-blue">
                            <div class="">Upload Corporate Logo </div></div>
                            <div class="col-md-7">
                               <input type="file" name="passport" id="profile" accept=".jpg,.png,.jpeg" class="form-control input-white" required="required">

                                                           </div>
                        </div>


                                 <div class="row">
								 <div class="col-sm-4"> 
                              
                              </div>
							  <div class="col-sm-3"> 
                              <div class="forgot-phone text-right float-right">
                                             <button type="submit" onclick="matchPassword()" class="btn btn-success btn-md btn-block waves-effect text-center m-b-20"> <i class="fa fa-sign-in"></i> Submit</button>

                                        </div>
                              </div>
							  <div class="col-sm-4"> 
                              
                              </div>
								 
								 </div>


  <?php echo form_close();?>
                                
                     
                            </div>
                         <div class="row"> 
                              <div class="col-sm-4"> 
                              
                              </div>
							  <div class="col-sm-4"> 
                              <a href="<?php echo base_url().'auth/login';?>" class="btn-primary btn" style="background: blue; color: #fff"> Already have an account? Go Back to Login</a>
                              </div>
							  <div class="col-sm-4"> 
                              
                              </div>
                         </div>
                        </div>
                </div>
</div>


<script type="text/javascript">

  function get_email(){
   
    var apiUrl = "<?php echo base_url('home/create_corporate_email'); ?>";

    
    const name  = document.getElementById("name").value;
    const email = document.getElementById("email");
    const postData = {
        name: name,
       
    };
     const requestOptions = {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(postData)
    };

    // Fetch data from API
    fetch(apiUrl, requestOptions)
        .then(response => response.json())
        .then(data => {

          console.log(data.email);
          email.value  = data.email;

        })
        .catch(error => {
            console.error('Error:', error);
        });


      }
         
  
</script>

<style type="text/css">
    .input-blue{
        
        background: #2D70C0; color: #fff; text-align: center; padding: 10px;
       
    }

</style>
 

<?php

load_footer();


?>