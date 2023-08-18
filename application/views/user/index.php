<?php


$this->load->helper('assets');

load_main_top();
?>

<body style="background-color:lightgrey; background-image: url(); -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;; background-repeat: no-repeat; background-attachment: fixed;" >
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
                   $this->load->model('users_m');
            $this->load->model('individuals_m');
            $this->load->model('corporates_m');



            if($this->session->userdata('group_id') == 4){

                $u = $this->individuals_m->find($this->session->userdata('unique_id'));
            }  
            

            elseif($this->session->userdata('group_id') == 3){

                $u = $this->corporates_m->find($this->session->userdata('unique_id'));
            }else{

                $u = $this->users_m->find($this->session->userdata('id'));

            } 
            
                if(!empty($u->passport)){

                    ?>


                   <td><img src="<?php echo base_url().'uploads/profile/'.$u->passport;?>" width="65" height="65"  style= "border-color: blue;" class="img-radius" alt="User-Profile-Image">

                    <?php
                }else{

                    ?>
                     <img src="<?php echo base_url().'public/img/avatar.png';?>" width="65" height="65"  style= "border-color: blue;" class="img-radius" alt="User-Profile-Image">
                    <?php
                }

                    ?>
                                    

                        </div>
                        <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut" active-item-theme="theme2">
                            <li class="drp-u-details">
                                <span>USER</span>
                            </li>
                          
                                    <li>
                                        <a href="<?php echo base_url().'user/settings/edit_profile';?>">
                                            <i class="feather icon-settings"></i> Settings
                                        </a>
                                    </li>
                           
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
                if(!empty($u->passport)){

                    ?>

             
                        <div style= "border-color: blue;"class="card gallery-desc">
                            <div class="masonry-media">
                                <a class="media-middle" target="" href="">
                               <img src="<?php echo base_url().'uploads/profile/'.$u->passport;?>" width="200" height="180" alt="User-Profile-Image">
                               </a>
                            </div>
                            
                        </div>
                   
                <?php
                }else{

                    ?>

                    
                        <div style= "border-color: blue;"class="card gallery-desc">
                            <div class="masonry-media">
                                <a class="media-middle" target="" href="">
                               <img src="<?php echo base_url().'public/img/avatar.png';?>" width="200" height="180" alt="User-Profile-Image">
                              </a>
                            </div>
                            
                        </div>
                   
                <?php
                }

                    ?>

    

        <div Style="background-color:#0760f0;">
		<h5 style="color:white"><b>

            <?php

            if($this->session->userdata('group_id') == 3){
                 echo $u->name; 

              }elseif($this->session->userdata('group_id') == 4 || $this->session->userdata('group_id')  == 1){
                echo $u->full_name; 


            }
                ?>
               <b>
            <br>
            
        </h5>
		</div>
    </div>

    <div class="nav-list">
        <!-- One Page Nav -->
        <div class="one-page-nav-wrapper" >
            <ul class="one-page-nav js-one-page-nav js-menu-vertical pcoded-item pcoded-left-item" data-prepend-to=".js-prepend-mobile-menu">

                <!--
				<li class="">
                    <a href="" class="/contacts/file.php">
                        <span class="pcoded-micon"><i class="fa fa-file"></i></span>
                        <span class="pcoded-mtext"style="color:black">My Files</span>
                    </a>
                </li>-->
				<li class=" push-effect">
                    <a href="<?php echo base_url().'user/adverts';?>" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fas fa-bullhorn"></i></span>
                        <span class="pcoded-mtext"style="color:black">Advertise</span>
                    </a>
                </li>


                  <li class="">
                    <a href="<?php echo base_url().'user/contacts/chat';?>" class="">
                        <span class="pcoded-micon"><i class="fa fa-book"></i></span>
                        <span class="pcoded-mtext"style="color:black">Posta Chat</span>
                    </a>
                </li>

                <li class="">
                    <a href="<?php echo base_url().'user/forum';?>" class="">
                        <span class="pcoded-micon"><i class="fa fa-book"></i></span>
                        <span class="pcoded-mtext"style="color:black">Forum</span>
                    </a>
                </li>
				
				                 <li class="">
                    <a href="<?php echo base_url().'#';?>" class="">
                        <span class="pcoded-micon"><i class="fa fa-money"></i></span>
                        <span class="pcoded-mtext"style="color:black">Posta Live</span>
                    </a>
                </li>
				
                  <li class="">
                    <a href="<?php echo base_url().'user/diary';?>" class="">
                        <span class="pcoded-micon"><i class="fa fa-heart"></i></span>
                        <span class="pcoded-mtext"style="color:black">E-Diary</span>
                    </a>
                </li>
				
				
				<li class="">
                    <a target="-blank"  href="https://elearning.dsms.co.ke/index/login" class="">
                        <span class="pcoded-micon">
                            <i class="fa fa-bank"></i>
                        </span>
                        <span class="pcoded-mtext"style="color:black">E-Learning </span>
                    </a>
                </li>
               
                <li class="">
                    <a target="-blank"  href="https://banking.dsms.co.ke/login" class="">
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
			
				
					 <a class="btn btn-sm btn-danger text-center" style="font-size:18px;" data-toggle="elementscroll" href="<?php echo base_url();?>"><i class="fa fa-caret-left"></i> BACK TO MAIN PAGE</b></a>

					
                    	
                    </div>
				
					
                
			</div>
					
							</div>
					</div>
		


                                            <div class="row "  >

                                              
                                                <div class=" col-md-12 clearfix"></div>

                                                  								
												
												<!--
												<div class="col-lg-2 col-md-6 default-grid-item">
                                                    <div class="card gallery-desc">
                                                        <div class="masonry-media">
                                                            <a  class="media-middle"  href="/contacts/file.php">
                                                                <img src="/img/files.jpg" width="100%" height="130" alt="Files/board" />                                                            </a>
                                                        </div>
                                                        <div class="home_card">
                                                            <a  class="media-middle"  href="/contacts/file.php">
                                                                <h6 class="text-center text-18-bold"> My Files </h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>-->
												
												<div class="col-lg-2 col-md-6 default-grid-item">
                                                    <div class="card gallery-desc">
                                                        <div class="masonry-media">
                                                            <a  class="media-middle"  href="<?php echo base_url().'user/adverts';?>">
                                                                <img src="<?php echo base_url().'public/img/ADVERTISE2.png';?>" width="100%" height="130" alt="" />                                                            </a>
                                                        </div>
                                                        <div class="home_card">
                                                            <a  class="media-middle"  href="<?php echo base_url().'user/adverts';?>">
                                                                <h6 class="text-center text-18-bold"> Advertise </h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
			
													
												
												
												<div class="col-lg-2 col-md-6 default-grid-item">
                                                    <div class="card gallery-desc">
                                                        <div class="masonry-media">
                                                            <a  class="media-middle"  href="<?php echo base_url().'user/contacts/chat';?>">
                                                                <img src="<?php echo base_url().'public/img/postachat.jpg';?>" width="100%" height="130" alt="pchat" />                                                            </a>
                                                        </div>
                                                        <div class="home_card">
                                                            <a  class="media-middle"  href="<?php echo base_url().'user/contacts/chat';?>">
                                                                <h6 class="text-center text-18-bold">Posta Chat</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>	
												


                                                <div class="col-lg-2 col-md-6 default-grid-item">
                                                    <div class="card gallery-desc">
                                                        <div class="masonry-media">
                                                            <a  class="media-middle"  href="#">
                                                                <img src="<?php echo base_url().'public/img/postalive.jpg';?>" width="100%" height="130" alt="postalive" />                                                            </a>
                                                        </div>
                                                        <div class="home_card">
                                                            <a  class="media-middle"  href="#">
                                                                <h6 class="text-center text-18-bold"> Posta Live </h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
												
												<div class="col-lg-2 col-md-6 default-grid-item">
                                                    <div class="card gallery-desc">
                                                        <div class="masonry-media">
                                                            <a  class="media-middle"  href="<?php echo base_url().'user/diary';?>">
                                                                <img src="<?php echo base_url().'public/img/ediary.jpg';?>" width="100%" height="130" alt="pmail" />                                                            </a>
                                                        </div>
                                                        <div class="home_card">
                                                            <a  class="media-middle"  href="<?php echo base_url().'user/diary';?>">
                                                                <h6 class="text-center text-18-bold"> E-Dairy</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
												
												
												<div class="col-lg-2 col-md-6 default-grid-item">
                                                    <div class="card gallery-desc">
                                                        <div class="masonry-media">
                                                            <a  class="media-middle" target="-blank"  href="https://elearning.dsms.co.ke/">
                                                                <img src="<?php echo base_url().'public/img/elearning.jpg';?>" width="100%" height="130" alt="insurance" />                                                            </a>
                                                        </div>
                                                        <div class="home_card">
                                                            <a  class="media-middle" target="-blank" href="https://elearning.dsms.co.ke/">
                                                                <h6 class="text-center text-18-bold"> E-LEARNING </h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
												
												
												<div class="col-lg-2 col-md-6 default-grid-item">
                                                    <div class="card gallery-desc">
                                                        <div class="masonry-media">
                                                            <a  class="media-middle" target="-blank"  href="https://banking.dsms.co.ke/login">
                                                                <img src="<?php echo base_url().'public/img/banking.png';?>" width="100%" height="130" alt="insurance" />                                                            </a>
                                                        </div>
                                                        <div class="home_card">
                                                            <a  class="media-middle" target="-blank" href="https://banking.dsms.co.ke/login">
                                                                <h6 class="text-center text-18-bold"> DIGITAL BANKING </h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div> <hr> 

												
                                            </div><hr>
											
											
											<div class="row "  >
											
											<div class = "col-lg-5"></div>
											<div class = "col-lg-4"><h4>    <b >KEY SUMMARY<b></h4></div>
											   
											<div class = "col-lg-3"></div>
											   
											   </div><br>
											   
											   
												
												<div class="row">
											   
													<!-- <div class="col-lg-1 col-md-6 default-grid-item">
														<div class="card gallery-desc">
															<div class="masonry-media">
																<a  class="media-middle"  href="/contacts/file.php">
																	<img src="/img/files.jpg" width="100%" height="40" alt="Advertise" /> 

																	</a>
																	
															</div>
															
															
														</div>
													</div> 
													<div class="col-lg-11 col-md-6 default-grid-item">
														<div class="card gallery-desc">
															<div class="masonry-media">
															<h6 class="text-left text-18-bold"> Save your work for future reference </h6>
															
															 </div>
															
														</div>
													</div>  												

													-->
												   
																											
												</div>
												 <div class="row">
											   
													 <div class="col-lg-1 col-md-6 default-grid-item">
														<div class="card gallery-desc">
															<div class="masonry-media">
																<a  class="media-middle"  href="<?php echo base_url().'user/adverts';?>">
																	<img src="<?php echo base_url().'public/img/ADVERTISE2.png';?>" width="100%" height="40" alt="advert" />                                                            </a>
															</div>
															
														</div>
													</div> 
													<div class="col-lg-11 col-md-6 default-grid-item">
														<div class="card gallery-desc">
															<div class="masonry-media">
															<h6 class="text-left text-18-bold"> Advertise yourself, your products and services </h6>
															
															 </div>
															
														</div>
													</div>  												

													
												   
																											
												</div>
												
												<div class="row">
											   
													 <div class="col-lg-1 col-md-6 default-grid-item">
														<div class="card gallery-desc">
															<div class="masonry-media">
																<a  class="media-middle"  href="<?php echo base_url().'user/contacts/chat';?>">
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
																<a  class="media-middle"  href="">
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
																<a  class="media-middle"  href="<?php echo base_url().'user/diary';?>">
																	<img src="<?php echo base_url().'public/img/ediary.jpg';?>" width="100%" height="40" alt="ediary" />                                                            </a>
															</div>
															
														</div>
													</div> 
													<div class="col-lg-11 col-md-6 default-grid-item">
														<div class="card gallery-desc">
															<div class="masonry-media">
															<h6 class="text-left text-18-bold"> Organise and plan your work and events digitally. </h6>
															
															 </div>
															
														</div>
													</div>  												

													
												  
																											
												</div>
												<div class="row">
											   
													 <div class="col-lg-1 col-md-6 default-grid-item">
														<div class="card gallery-desc">
															<div class="masonry-media">
																<a  class="media-middle" target="-blank"  href=" https://elearning.dsms.co.ke/">
																	<img src="<?php echo base_url().'public/img/elearning.jpg';?>" width="100%" height="40" alt="Advertise" />                                                            </a>
															</div>
															
														</div>
													</div> 
													<div class="col-lg-11 col-md-6 default-grid-item">
														<div class="card gallery-desc">
															<div class="masonry-media">
															<h6 class="text-left text-18-bold">  Upload Education digital content and Learn</h6>
															
															 </div>
															
														</div>
													</div>  												

													
												   
																											
												</div>
												<div class="row">
											   
													 <div class="col-lg-1 col-md-6 default-grid-item">
														<div class="card gallery-desc">
															<div class="masonry-media">
																<a  class="media-middle"  href="https://banking.dsms.co.ke/login">
																	<img src="<?php echo base_url().'public/img/banking.png';?>" width="100%" height="40" alt="Advertise" />                                                            </a>
															</div>
															
														</div>
													</div> 
													<div class="col-lg-11 col-md-6 default-grid-item">
														<div class="card gallery-desc">
															<div class="masonry-media">
															<h6 class="text-left text-18-bold"> You will not queue again for hours to wait for your money. Get loans instantly too. </h6>
															
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
  <script>
        function goBack()
        {
                window.history.back();
        }
        </script>

</body>
</html>