<?php


$this->load->helper('assets');

load_top();
?>
<link href="https://nairobi.ebursary.co.ke/assets/css/feather/css/feather.css" type="text/css" rel="stylesheet" />        <!-- Style.css -->
        <link href="https://nairobi.ebursary.co.ke/assets/css/style.css" type="text/css" rel="stylesheet" />      
		<link href="https://nairobi.ebursary.co.ke/assets/css/custom.css" type="text/css" rel="stylesheet" />		
			 <style>
            .login-block .auth-box
            {
                margin: 20px auto 0;
                max-width: 400px;
            }
			
        </style>
 <body themebg-pattern="theme2"  style="background-image: url(<?php echo base_url().'public/img/slide1.jpg';?>); -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;; background-repeat: no-repeat; background-attachment: fixed;" >
        <div id="pcoded" class="pcoded iscollapsed" nav-type="st2" theme-layout="vertical" vertical-placement="left" vertical-layout="wide" pcoded-device-type="desktop" vertical-nav-type="expanded" vertical-effect="shrink" vnavigation-view="view1" sidebar-img="false" sidebar-img-type="img1" layout-type="light">
	

	  <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
			            <div class="col-md-2">
									   <a style="padding:5px;Text-align: center;"	class="button btn btn-danger " data-toggle="elementscroll" href="<?php echo base_url();?>"> <i class="fa fa-caret-left"></i> BACK TO MAIN PAGE
						</a></div>
                <div class="col-sm-6">
				  				<div style="margin-top:65%"  >
								
				

				</div>
				
				</div>
				 
                <div class="col-sm-4">
                    <!-- Authentication card start -->
					 <form action="<?php echo base_url().'auth/login';?>" class="md-float-material form-material auth-box card login-a"   method="post" accept-charset="utf-8">
                   
                        <div class="text-center">
						   <img src="<?php echo base_url().'public/img/bluepages.png';?>" width='140' height='140' style='border-radius:15px;'><br><br>
						   <h3 class="text-center text-white"><b>Welcome to Blue Pages</b>  </h>
                        </div>
						
                        <div class="">
                            <div class="card-block login-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12""text-center" >
									
                                        <h4 class="text-center text-light bg-blue" style="font-size: 16px; padding: 10px;"><b>SIGN IN</b></h4>
										
										 										
                                    </div>
                                </div>
								
							 <div class="material-group">
										<div class="material-addone input-group-addon1">
											<span class="fa fa-user"></span>
										</div>
										<div class="form-group">
											<input type="text" name="email" placeholder="Email"  class="form-control" required="">
											<span class="form-bar"></span>
											
										</div>
								</div>
								
								<div class="material-group input-group ">
										<div class="material-addone input-group-addon1">
											<span class="fa fa-lock"></span>
										</div>
										<div class="form-group">
											 <input type="password" name="password" placeholder="Password" class="form-control" required="">
											<span class="form-bar"></span>
										
										</div>
								</div>
								
								
								
								
                                <div class="row m-t-25 text-left">
                                    <div class="col-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon fa fa-check txt-primary"></i></span>
                                                <span class="text-inverse">Remember me</span>
                                            </label>
                                        </div>
                                        <div class="forgot-phone text-right float-right" id="lg-btn" >
										
										  <!--<a href="/admin/admin.php" id="reg" class="btn btn-sm  btn-primary waves-effect waves-light" ><i class="fa fa-sign-in"></i> LOGIN</a>-->
										 

										 <button type="submit" class="btn btn-sm  btn-primary waves-effect waves-light" ><i class="fa fa-sign-in"></i>LOGIN</button>
										 <!--
										
										     <button type="submit"  class="btn btn-sm btn-primary btn-md btn-block waves-effect text-center m-b-20"> <i class="fa fa-sign-in"></i> LOGIN</button>
                                           -->
                                        </div>
										<hr>
										<a  class="password-reset  waves-effect text-center m-b-20 pull-right"><b><button type="submit"  class="btn btn-sm btn-primary btn-md btn-block waves-effect text-center m-b-20">  Forgot Password ?</button></b></a>
                                     <br><hr>
									 
									 <div class="row m-t-2">
								    
                                    <div class="col-md-8"> 
                                       								   
									   <a href="<?php echo base_url().'auth/register';?>" id="reg" class="btn btn-sm  btn-success waves-effect waves-light" ><i class="fa fa-edit"></i> REGISTER YOUR ACCOUNT</a>
									</div>
                                    
								
                                </div>
								   
								   </div>
									
                                </div>
                                
                                
                            </div>
						
                        </div>
                    </form>
                    <!-- end of form -->
                </div>
                <!-- Authentication card end -->
            </div>
            <!-- end of col-sm-12 -->
        </div>
        <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
		   </section>
	
	
		
		


<?php

load_footer();


?>