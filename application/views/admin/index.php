<?php


$this->load->helper('assets');

load_main_top();
?>

<body   style="background-color:lightgrey; background-image: url(); -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;; background-repeat: no-repeat; background-attachment: fixed;" >
        <div id="pcoded" class="pcoded iscollapsed" nav-type="st2" theme-layout="vertical" vertical-placement="left" vertical-layout="wide" pcoded-device-type="desktop" vertical-nav-type="expanded" vertical-effect="shrink" vnavigation-view="view1" sidebar-img="false" sidebar-img-type="img1" layout-type="light">
            <div class="pcoded-overlay-box"></div>
            <div class="pcoded-container navbar-wrapper">
			
			
		
            <div class="pcoded-container navbar-wrapper">
                <nav class="navbar header-navbar pcoded-header iscollapsed hidden-print" header-theme="" pcoded-header-position="fixed" 

          >
    <div class="navbar-wrapper">

        <div class="navbar-logo"    style="  background-color:#0760f0;">
		
            <img  Style="margin-left:0; margin-right:20px;" src="<?php echo base_url().'public/img/bluepages.png';?>" width="60" height="50" alt=""/>
			
               <h5 style="color:white;text-align: center;"> <b> Blue Pages  <b>
				</h5>
           
            <a class="mobile-menu" id="mobile-collapse" href="#!">
                <i class="feather icon-menu"></i>
            </a>
            <a class="mobile-options waves-effect waves-light">
                <i class="feather icon-more-horizontal"></i>
            </a>
        </div>

        <div class="navbar-container container-fluid">


            
            
            <ul class="nav-right"> 
               		
               		
               
                    
 	
                <li class="user-profile header-notification">
                    <div class="dropdown-primary dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown">
                           							
                                                            

                                                                
                <?php
                if(!empty($this->session->userdata('passport'))){

                    ?>


                   <td><img src="<?php echo base_url().'uploads/profile/'.$this->session->userdata('passport');?>" width="65" height="65" class="img-radius" alt="User-Profile-Image">

                    <?php
                }else{

                    ?>
                     <img src="<?php echo base_url().'public/img/avatar.png';?>" width="65" height="65" class="img-radius" alt="User-Profile-Image">
                    <?php
                }

                    ?>
                                    

                        </div>
                        <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut" active-item-theme="theme2">
                            <li class="drp-u-details">
                                <span>ADMIN</span>
                            </li>
                          
                                   <!-- <li>
                                        <a href="<?php echo base_url().'user/settings/edit_profile';?>">
                                            <i class="feather icon-settings"></i> Settings
                                        </a>
                                    </li> -->
                           
                            <li>
                                <a href="">
                                    <i class="feather icon-user"></i> Change Password
                                </a>
                            </li>
                          
                                   
                           
                            <li>
                                <a href="<?php echo base_url().'auth/logout';?>">
                                    <i class="feather icon-lock"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>




<!-- [ chat user list ] start -->
<div id="sidebar" class="users p-chat-user showChat">
    <div class="had-container">
        <div class="p-fixed users-main">
            <div class="user-box">
                <div class="chat-search-box">
                    <a class="back_friendlist">
                        <i class="feather icon-x"></i>
                    </a>

                </div>
                
            </div>
        </div>
    </div>
</div>
<!-- [ chat user list ] end -->                <div class="pcoded-main-container" style="margin-top: 56px;">
                    <div class="pcoded-wrapper">
                        <nav class="pcoded-navbar scroll" navbar-theme="theme1" active-item-theme="theme2" sub-item-theme="theme2" active-item-style="style0" pcoded-navbar-position="none">
    <div class="widget-fluid  clearfix  side-logo " style="text-align:center" >
                <br>
		
		
      


                <?php
                if(!empty($this->session->userdata('passport'))){

                    ?>


                   <td><img src="<?php echo base_url().'uploads/profile/'.$this->session->userdata('passport');?>" width="200" height="180" class="img-radius" alt="User-Profile-Image">

                    <?php
                }else{

                    ?>
                    <td> <img src="<?php echo base_url().'public/img/avatar.png';?>" width="200" height="180" class="img-radius" alt="User-Profile-Image">
                    <?php
                }

                    ?>
		<br>
		<br>

        <div Style="background-color:#0760f0;">
		<h5 style="color:white"><b><?php echo  $this->session->userdata('full_name'); ?><b>

            
            <br>
            
        </h5>
		</div>
    </div>

    <div class="nav-list">
        <!-- One Page Nav -->
        <div class="one-page-nav-wrapper" >
            <ul class="one-page-nav js-one-page-nav js-menu-vertical pcoded-item pcoded-left-item" data-prepend-to=".js-prepend-mobile-menu">

                
				<li class=" push-effect">
                    <a href="<?php echo base_url().'admin/users';?>" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-user"></i></span>
                        <span class="pcoded-mtext"style="color:black">Users</span>
                    </a>
                </li>
				
				
				<li class=" push-effect">
                    <a href="<?php echo base_url().'admin/adverts';?>" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fas fa-bullhorn"></i></span>
                        <span class="pcoded-mtext"style="color:black">All Adverts</span>
                    </a>
                </li>
				                


                  <li class="">
                    <a href="<?php echo base_url().'admin/chat';?>" class="">
                        <span class="pcoded-micon"><i class="fa fa-book"></i></span>
                        <span class="pcoded-mtext"style="color:black">Posta Chat</span>
                    </a>
                </li>
				
				                 
                  <li class="">
                    <a href="<?php echo base_url().'admin/live';?>" class="">
                        <span class="pcoded-micon"><i class="fa fa-heart"></i></span>
                        <span class="pcoded-mtext"style="color:black">Posta Live</span>
                    </a>
                </li>

                  <li class="">
                    <a href="<?php echo base_url().'admin/forum';?>" class="">
                        <span class="pcoded-micon"><i class="fa fa-book"></i></span>
                        <span class="pcoded-mtext"style="color:black">Forum</span>
                    </a>
                </li>

                
               <li class="">
                    <a href="<?php echo base_url().'admin/marketplace';?>" class="">
                        <span class="pcoded-micon"><i class="fa fa-cart"></i></span>
                        <span class="pcoded-mtext"style="color:black">Marketplace</span>
                    </a>
                </li>
                <li class="">
                    <a href="<?php echo base_url().'admin/talents';?>" class="">
                        <span class="pcoded-micon"><i class="fa fa-cart"></i></span>
                        <span class="pcoded-mtext"style="color:black">Talents</span>
                    </a>
                </li>
               
				
				<li class=" push-effect">
                    <a target="_blank" href="https://sms.dsms.co.ke/login" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fas fa-sms"></i></span>
                        <span class="pcoded-mtext"style="color:black">Bulk SMS</span>
                    </a>
                </li>
				 <li class="">
                    <a target="_blank" href="https://banking.dsms.co.ke/login" class="">
                        <span class="pcoded-micon">
                            <i class="fa fa-bank"></i>
                        </span>
                        <span class="pcoded-mtext"style="color:black">Digital Banking </span>
                    </a>
                </li>
				  <hr>
				
				<li class="col-lg-12 col-md-6 col-sm-6 text-center">
					<div class="col-lg-12 col-md-6 default-grid-item">
						<div style= "border-color: blue;"class="card gallery-desc">
							<div class="masonry-media">
								<a class="media-middle" target="" href="">
								<img src="<?php echo base_url().'public/img/governt.png';?>" width="100%" height="180" alt="icons2/uploads" />					</a>
							</div>
							
						</div>
					</div>
				</li>
				<li class="col-lg-12 col-md-6 col-sm-6 text-center">
					<div class="col-lg-12 col-md-6 default-grid-item">
						<div style= "border-color: blue;"class="card gallery-desc">
							<div class="masonry-media">
								<a class="media-middle" target="" href="">
								<img src="<?php echo base_url().'public/img/konza.jpg';?>" width="100%" height="180" alt="icons2/uploads" />					</a>
							</div>
							
						</div>
					</div>
				</li>
				 <li class="col-lg-12 col-md-6 col-sm-6 text-center">
					<div class="col-lg-12 col-md-6 default-grid-item">
						<div style= "border-color: blue;"class="card gallery-desc">
							<div class="masonry-media">
								<a class="media-middle" target="" href="">
								<img src="<?php echo base_url().'public/img/posta.jpg';?>" width="100%" height="180" alt="icons2/uploads" />					</a>
							</div>
							
						</div>
					</div>
				</li>
				
				
				<li class="col-lg-12 col-md-6 col-sm-6 text-center">
					<div class="col-lg-12 col-md-6 default-grid-item">
						<div style= "border-color: blue;"class="card gallery-desc">
							<div class="masonry-media">
								<a class="media-middle" target="" href="">
								<img src="<?php echo base_url().'public/img/postbank.png';?>" width="100%" height="180" alt="icons2/uploads" />					</a>
							</div>
							
						</div>
					</div>
				</li>
				
				
                
               
            </ul>
        </div>
        <!-- End of One Page Nav -->


    </div> 


</nav>

                        <div class="pcoded-content">

                            <div class="pcoded-inner-co" id="top">
                                <div class="main-body">
                                    <div class="page-wrapper">
                                        <div class="page-body">

                                            
											
				 <div class="page-header">
							<div class="page-block">
							
							
											<div class="row" >
                                            <div class="col-md-12">
                                                
                                          
                                           <div id="DigitalCLOCK" class="clock" onload="showTime()"></div>
                                           <div class="clock_date"><br><br><br><br>
											   <?php
													
													echo date(" l jS  F Y    ") . "<br>";

												?>
											</div>
                                           
                                             </div>
                                        </div>
											  
			
<style>
            .card{border: 3px solid skyblue; padding: 2px;}
            .clock {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translateX(-50%) translateY(-50%);
    color: black; /*  #ff4747; */
    font-size: 60px;
    font-family: 'Righteous', cursive;
    letter-spacing: 7px;
}
  .clock_date{
    position: absolute;
    top: 52%;
    left: 50%;
    transform: translateX(-50%) translateY(-52%);
    color: black;
    font-size: 28px;
    font-family: 'Righteous', cursive;
    letter-spacing: 2px;
}
        </style>


			
		<script>
function goBack() {
  window.history.back();
}
// Code By Webdevtrick ( https://webdevtrick.com )
function showTime(){
    var date = new Date();
    var h = date.getHours(); 
    var m = date.getMinutes(); 
    var s = date.getSeconds(); 
    var session = "AM";
    
    if(h == 0){
        h = 12;
    }
    
    if(h > 12){
        h = h - 12;
        session = "PM";
    }
    
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;
    
    var time = h + ":" + m + ":" + s + " " + session;
   
    document.getElementById("DigitalCLOCK").innerText = time ;
    document.getElementById("DigitalCLOCK").textContent = time ;
    
    setTimeout(showTime, 1000);
    
}

showTime();
</script>
																							  
																							  
											  <br><br><hr>
											  
											  
											  
								<div class="row"style="background-color:#0760f0;">
				
				             		
				
									<div id="left" class="left col-lg-9 col-md-8 text-center">
										
									
											<h3 style="color:white;">Welcome to Blue Pages - Gets you to the doorsteps of your clients </h3>
											 <p style="font-size:25px; color:white;"><b>Fast, Reliable  and  Accurate <b></p>
											 
										
										
									
									</div>
									<div id="left" class="left col-lg-3 col-md-8 ">

										<br>
								
									
										 <a class="btn btn-sm btn-danger text-center" style="font-size:18px;" data-toggle="elementscroll" href="/index.php"><i class="fa fa-caret-left"></i> BACK TO MAIN PAGE</b></a>

										
											
									</div>
									
										
									
								</div>
								
								<div class="row"style="background-color:#0760f0;">
								<div id="left" class="left col-lg-4 col-md-8 ">

										
											
									</div>
								
								   <div id="left" class="left col-lg-4 col-md-8 text-center">
										
									
										
											 <p style="font-size:25px; color:white;"><b>ADMINISTRATORS PORTAL <b></p>
											 
										
										
									
									</div>
									<div id="left" class="left col-lg-4 col-md-8 ">

										
											
									</div>
								
								
								
								</div><br>
								
								<div class="row">
								<div id="left" class="left col-lg-4 col-md-8 ">

										
											
									</div>
								
								   <div  id="left" class="left col-lg-4 col-md-8 text-center">
										
									
										
											 <p style="font-size:30; color:black;"><b>YEAR   2023 <b></p>
											 
										
										
									
									</div>
									<div id="left" class="left col-lg-4 col-md-8 ">

										
											
									</div>
								
								
								
								</div>
								
								
						
							</div>
					</div>
					
					
					<div class="row" id="home">

                                                <!-- web statistic card start -->
												
												

                                                <div class="col-xl-2 col-md-6" >
                                                    <div class="card o-hidden bg-c-green web-num-card">
                                                        <div class="card-block text-white">
                                                            <h6 class="text-center text-18-bold"style="color:white;"><b> CORPORATE<br>  USERS</b></h6>
                                                            <h6 class="text-center text-18-bold"style="color:white;" > 
                                                               124,896                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2 col-md-6">
                                                    <div class="card o-hidden bg-c-black web-num-card">
                                                        <div class="card-block text-white">
                                                            <h6 class="text-center text-18-bold"style="color:white;"> <b> INDIVIDUAL <br> USERS </b></h6>
                                                            <h6 class="text-center text-18-bold" style="color:white;"> 

                                                                1,023,654</h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                   <div class="col-xl-2 col-md-6">

                                                    <div class="card o-hidden bg-c-blue web-num-card">
                                                        <div class="card-block text-white">
                                                            <h6 class="text-center text-18-bold" style="color:white;"> <b>VIDEO <br>ADVERTS </b> </h6>
                                                            <h6 class="text-center text-18-bold" style="color:white;">  
															279,450															</h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-2 col-md-6">
                                                    <div class="card o-hidden bg-c-yellow web-num-card">
                                                        <div class="card-block text-white">
                                                            <h6 class="text-center text-18-bold" style="color:white;"> IMAGE<br> ADVERTS </h6>
                                                            <h6 class="text-center text-18-bold" style="color:white;"> 13,021,052</h6>
                                                        </div>
                                                    </div>
                                                </div>

                                             

                                                <div class="col-xl-2 col-md-6">
                                                    <div class="card o-hidden bg-c-red web-num-card">
                                                        <div class="card-block text-white">
                                                            <h6 class="text-center text-12-bold" style="color:white;"> REJECTED IMAGE ADVERTS  </h6>
                                                            <h6 class="text-center text-18-bold" style="color:white;">  6</h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-2 col-md-6" >
                                                    <div class="card o-hidden bg-c-brown web-num-card">
                                                        <div class="card-block text-white">
                                                            <h6 class="text-center text-12-bold" style="color:white;"> REJECTED VIDEO ADVERTS </h6>
                                                            <h6 class="text-center text-18-bold" style="color:white;">  6</h6>
                                                        </div>
                                                    </div>
                                                </div>

						</div>
					               


                                            <div class="row "  >

                                              
                                                <div class=" col-md-12 clearfix"></div>
												
												<div class="col-lg-2 col-md-6 default-grid-item">
                                                    <div class="card gallery-desc">
                                                        <div class="masonry-media">
                                                            <a  class="media-middle"  href="<?php echo base_url().'admin/users';?>">
                                                                <img src="<?php echo base_url().'public/img/users.jpg';?>" width="100%" height="130" alt="" />                                                            </a>
                                                        </div>
                                                        <div class="home_card">
                                                            <a  class="media-middle"  href="/admin/users/users.php">
                                                                <h6 class="text-center text-18-bold"> USERS</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div> 

                                                  <div class="col-lg-2 col-md-6 default-grid-item">
                                                    <div class="card gallery-desc">
                                                        <div class="masonry-media">
                                                            <a  class="media-middle"  href="<?php echo base_url().'admin/adverts';?>">
                                                                <img src="<?php echo base_url().'public/img/ADVERTISE2.png';?>" width="100%" height="130" alt="" />                                                            </a>
                                                        </div>
                                                        <div class="home_card">
                                                            <a  class="media-middle"  href="/admin/adminadvert/advertfile.php">
                                                                <h6 class="text-center text-18-bold"> ALL ADVERTS </h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
												
												
												
													
												<!--
												
												<div class="col-lg-2 col-md-6 default-grid-item">
                                                    <div class="card gallery-desc">
                                                        <div class="masonry-media">
                                                            <a  class="media-middle"  href="">
                                                                <img src="/img/REJECTED.jpg" width="100%" height="130" alt="Education" />                                                            </a>
                                                        </div>
                                                        <div class="home_card">
                                                            <a  class="media-middle"  href="">
                                                                <h6 class="text-center text-18-bold"> REJECTED </h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>	
												-->
												


                                                
												
															<div class="col-lg-2 col-md-6 default-grid-item">
                                                    <div class="card gallery-desc">
                                                        <div class="masonry-media">
                                                            <a  class="media-middle"  href="<?php echo base_url().'admin/chat';?>">
                                                                <img src="<?php echo base_url().'public/img/postachat.jpg';?>" width="100%" height="130" alt="pchat" />                                                            </a>
                                                        </div>
                                                        <div class="home_card">
                                                            <a  class="media-middle"  href="/admin/adminpchat/pchatfile.php">
                                                                <h6 class="text-center text-18-bold">Posta Chat</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>	
												


                                                <div class="col-lg-2 col-md-6 default-grid-item">
                                                    <div class="card gallery-desc">
                                                        <div class="masonry-media">
                                                            <a  class="media-middle"  href="<?php echo base_url().'admin/live';?>">
                                                                <img src="<?php echo base_url().'public/img/postalive.jpg';?>" width="100%" height="130" alt="postalive" />                                                            </a>
                                                        </div>
                                                        <div class="home_card">
                                                            <a  class="media-middle"  href="/admin/adminplive/plivefile.php">
                                                                <h6 class="text-center text-18-bold"> Posta Live </h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
												
												<div class="col-lg-2 col-md-6 default-grid-item">
                                                    <div class="card gallery-desc">
                                                        <div class="masonry-media">
                                                            <a  class="media-middle" target="_blank" href="https://sms.dsms.co.ke/login">
                                                                <img src="<?php echo base_url().'public/img/sms.jpg';?>" width="100%" height="130" alt="bursary" />                                                            </a>
                                                        </div>
                                                        <div class="home_card">
                                                            <a  class="media-middle"   target="_blank" href="https://sms.dsms.co.ke/login">
                                                                <h6 class="text-center text-18-bold"> Bulk SMS </h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
												
															
												
												<div class="col-lg-2 col-md-6 default-grid-item">
                                                    <div class="card gallery-desc">
                                                        <div class="masonry-media">
                                                            <a  class="media-middle" target="_blank" href="https://banking.dsms.co.ke/login">
                                                                <img src="<?php echo base_url().'public/img/banking.png';?>" width="100%" height="130" alt="Banking" />                                                            </a>
                                                        </div>
                                                        <div class="home_card">
                                                            <a  class="media-middle" target="_blank" href="https://banking.dsms.co.ke/login">
                                                                <h6 class="text-center text-18-bold"> Digital Banking</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
												
												

												
                                            </div><hr>
											
											
											<div class="row "  >
											
											<div class = "col-lg-5"></div>
											<div class = "col-lg-4"><h4>    <b >KEY SUMMARY<b></h4></div>
											   
											<div class = "col-lg-3"></div>
											   
											   </div><br>
											   
											    <div class="row">
												 <div class="col-lg-1 col-md-6 default-grid-item">
														<div class="card gallery-desc">
															<div class="masonry-media">
																<a  class="media-middle"  href="<?php echo base_url().'admin/users';?>">
																	<img src="<?php echo base_url().'public/img/users.jpg';?>" width="100%" height="40" alt="advert" />                                                            </a>
															</div>
															
														</div>
													</div> 
													<div class="col-lg-11 col-md-6 default-grid-item">
														<div class="card gallery-desc">
															<div class="masonry-media">
															<h6 class="text-left text-18-bold"> Defined users and their details. </h6>
															
															 </div>
															
														</div>
													</div>  												

													
												   
																											
												</div>
												
												<div class="row">
											   
													 <div class="col-lg-1 col-md-6 default-grid-item">
														<div class="card gallery-desc">
															<div class="masonry-media">
																<a  class="media-middle"  href="<?php echo base_url().'admin/adverts';?>">
																	<img src="<?php echo base_url().'public/img/ADVERTISE2.png';?>" width="100%" height="40" alt="Advertise" />                                                            </a>
															</div>
															
														</div>
													</div> 
													<div class="col-lg-11 col-md-6 default-grid-item">
														<div class="card gallery-desc">
															<div class="masonry-media">
															<h6 class="text-left text-18-bold"> All advertisements made in the platform to be approved first </h6>
															
															 </div>
															
														</div>
													</div>  												

													
												   
																											
												</div>
												
												<div class="row">
											   
													 <div class="col-lg-1 col-md-6 default-grid-item">
														<div class="card gallery-desc">
															<div class="masonry-media">
																<a  class="media-middle"  href="<?php echo base_url().'admin/chat';?>">
																	<img src="<?php echo base_url().'public/img/postachat.jpg';?>" width="100%" height="40" alt="Posta Chat" />                                                            </a>
															</div>
															
														</div>
													</div> 
													<div class="col-lg-11 col-md-6 default-grid-item">
														<div class="card gallery-desc">
															<div class="masonry-media">
															<h6 class="text-left text-18-bold"> Live online chats with friends and groups in real time </h6>
															
															 </div>
															
														</div>
													</div>  												

													
												   
																											
												</div>
												<div class="row">
											   
													 <div class="col-lg-1 col-md-6 default-grid-item">
														<div class="card gallery-desc">
															<div class="masonry-media">
																<a  class="media-middle"  href="<?php echo base_url().'admin/live';?>">
																	<img src="<?php echo base_url().'public/img/postalive.jpg';?>" width="100%" height="40" alt="Posta Live" />                                                            </a>
															</div>
															
														</div>
													</div> 
													<div class="col-lg-11 col-md-6 default-grid-item">
														<div class="card gallery-desc">
															<div class="masonry-media">
															<h6 class="text-left text-18-bold"> Live real time video meetings for over twenty people at a time </h6>
															
															 </div>
															
														</div>
													</div>  												

													
												   
																											
												</div>
												
																								
												<div class="row">
											   
													 <div class="col-lg-1 col-md-6 default-grid-item">
														<div class="card gallery-desc">
															<div class="masonry-media">
																<a  class="media-middle" target="_blank" href="https://sms.dsms.co.ke/login">
																	<img src="<?php echo base_url().'public/img/sms.jpg';?>" width="100%" height="40" alt="Advertise" />                                                            </a>
															</div>
															
														</div>
													</div> 
													<div class="col-lg-11 col-md-6 default-grid-item">
														<div class="card gallery-desc">
															<div class="masonry-media">
															<h6 class="text-left text-18-bold"> Inform users of products and any other information by sms </h6>
															
															 </div>
															
														</div>
													</div>  												

													
												   
																											
												</div>
												<div class="row">
											   
													 <div class="col-lg-1 col-md-6 default-grid-item">
														<div class="card gallery-desc">
															<div class="masonry-media">
																<a  class="media-middle" target="_blank" href="https://banking.dsms.co.ke/login">
																	<img src="<?php echo base_url().'public/img/banking.png';?>" width="100%" height="40" alt="Advertise" />                                                            </a>
															</div>
															
														</div>
													</div> 
													<div class="col-lg-11 col-md-6 default-grid-item">
														<div class="card gallery-desc">
															<div class="masonry-media">
															<h6 class="text-left text-18-bold"> Banking made Amazingly Convinient </h6>
															
															 </div>
															
														</div>
													</div>  												

													
												   
																											
												</div>
											   
											   
											
                                            <!-- Activity and Latest  Release end -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


 <?php

load_footer();


?>