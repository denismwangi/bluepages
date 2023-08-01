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
                <div class="col-lg-7"></div>
 <div class="col-lg-5">
 
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
							
							<form action="<?php echo base_url().'auth/post_corporate';?>" method="post" accept-charset="utf-8" class="form-horizontal card" id="" style="margin:5px;" autocomplete="off" enctype="multipart/form-data">
                        <div class="form-group row">
                            <div class="col-md-5 input-blue">
                                <div class=""> Corporate Name </div>
                            </div>
                            <div class="col-md-7">
                                <input type="text" name="name" value="" class="form-control input-white" pattern=".{6,}" title="Enter your real names" required="required"  />                                                           </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-5 input-blue">
                            <div class=""> Corporate Type  </div></div>
                            <div class="col-md-7">
                                <select name="type" class="select form-control" required="required" >
<option value="" selected="selected"></option>
<option value="1">Public</option>
<option value="2">Private</option>
</select>                                                           </div>
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



</select>                                                           </div>
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


</select>                                                           </div>
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
</select>                                                                </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-5 input-blue">
                            <div class=""> Physical Address  </div></div>
                            <div class="col-md-7">
                                <input type="text" name="address" value="" class="form-control input-white" pattern=".{3,}" title="Enter a valid address" required="required"  />                                                           </div>
                        </div>

                         <div class="form-group row">
                            <div class="col-md-5 input-blue">
                            <div class=""> Email Address  </div></div>
                            <div class="col-md-7">
                               <input type="email" name="email" class="form-control input-white email" pattern=".{6,}" title="Enter a valid email" required="required" />
                                                           </div>
                        </div>

                             <div class="form-group row">
                            <div class="col-md-5 input-blue">
                            <div class=""> Website  </div></div>
                            <div class="col-md-7">
                                <input type="text" name="website" value="" class="form-control input-white" pattern=".{6,}" title="Enter valid website" required="required"  />                                                           </div>
                        </div>

                         <div class="form-group row">
                            <div class="col-md-5 input-blue">
                            <div class=""> Registering Person  </div></div>
                            <div class="col-md-7">
                                <input type="text" name="person" value="" class="form-control input-white" pattern=".{6,}" title="Enter Real Names" required="required"  />                                                           </div>
                        </div>

                         <div class="form-group row">
                            <div class="col-md-5 input-blue">
                            <div class=""> Designation  </div></div>
                            <div class="col-md-7">
                                <input type="text" name="designation" value="" class="form-control input-white" pattern=".{2,}" title="Designation" required="required"  />                                                           </div>
                        </div>
                         <div class="form-group row">
                            <div class="col-md-5 input-blue">
                            <div class=""> Valid Phone No. </div></div>
                            <div class="col-md-7">
                               <input type="tel" name="phone" class="form-control input-white mobile-number" pattern="([\+0-9\s]{10,})"  title="required valid phone" required="required" />
                                                           </div>
                        </div>
                         <div class="form-group row">
                            <div class="col-md-5 input-blue">
                            <div class="">Upload Corporate Logo </div></div>
                            <div class="col-md-7">
                               <input type="file" name="logo" id="profile" accept=".jpg,.png,.jpeg" class="form-control input-white" required="required">
                                                           </div>
                        </div>


                                 <div class="row">
								 <div class="col-sm-4"> 
                              
                              </div>
							  <div class="col-sm-3"> 
                              <div class="forgot-phone text-right float-right">
                                             <button type="submit" class="btn btn-success btn-md btn-block waves-effect text-center m-b-20"> <i class="fa fa-sign-in"></i> Submit</button>

                                        </div>
                              </div>
							  <div class="col-sm-4"> 
                              
                              </div>
								 
								 </div>


  </form>  
                                
                     
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

<style type="text/css">
    .input-blue{
        
        background: #2D70C0; color: #fff; text-align: center; padding: 10px;
       
    }

</style>
 

<?php

load_footer();


?>