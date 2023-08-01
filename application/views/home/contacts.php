<?php


$this->load->helper('assets');

load_mixed_top();
?>

<body style="background-color:lightgrey; background-image: url(); -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;; background-repeat: no-repeat; background-attachment: fixed;" >
        <div id="pcoded" class="pcoded iscollapsed" nav-type="st2" theme-layout="vertical" vertical-placement="left" vertical-layout="wide" pcoded-device-type="desktop" vertical-nav-type="expanded" vertical-effect="shrink" vnavigation-view="view1" sidebar-img="false" sidebar-img-type="img1" layout-type="light">
            <div class="pcoded-overlay-box"></div>
            <div class="pcoded-container navbar-wrapper">
                





                <div class="pcoded-main-container" style="margin-top: 56px;">
                    <div class="pcoded-wrapper">
                        <nav class="pcoded-navbar scroll" navbar-theme="theme1" active-item-theme="theme2" sub-item-theme="theme2" active-item-style="style0" pcoded-navbar-position="none">
    

    <div class="nav-list ">
        <!-- One Page Nav -->
        <div class="one-page-nav-wrapper" >
            <ul class="one-page-nav js-one-page-nav js-menu-vertical pcoded-item pcoded-left-item" data-prepend-to=".js-prepend-mobile-menu">
                
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
								<img src="<?php echo base_url().'public/img/safaricom.jpg';?>" width="100%" height="180" alt="icons2/uploads" />					</a>
							</div>
							
						</div>
					</div>
				</li>
				
				<li class="col-lg-12 col-md-6 col-sm-6 text-center">
					<div class="col-lg-12 col-md-6 default-grid-item">
						<div style= "border-color: blue;"class="card gallery-desc">
							<div class="masonry-media">
								<a class="media-middle" target="" href="">
								<img src="<?php echo base_url().'public/img/dsms.png';?>" width="100%" height="180" alt="icons2/uploads" />					</a>
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
                            <div class="pcoded-inner-content">
                                <div class="main-body">
                                    <div class="page-wrapper">
                                        <div class="page-body">

                                            <div class="page-cotent" id="scroll-fill">
                                                 <!-- statustic card start -->
<div class="row">
    <div class="col-md-12">
        <div style= "border-color: blue;" class=" recent-operations-card">
            <div class="card-block">  
              <section id="highlight">
        	<div class="container-fluid">
            	<div class="row">
				
				<div id="left" class="left col-lg-3 col-md-8 "  ><br>
			
				
					 <a class="btn btn-sm btn-danger text-center" style="font-size:18px;" data-toggle="elementscroll" href="/adverts/county/mombasa"><i class="fa fa-caret-left"></i> BACK TO SUB-COUNTIES</a>

					
                    	
                    </div>
				
               
				
				
				
                	<div id="left" class="left col-lg-9 col-md-8 text-right">
					
					
                    	<h3 style="color:white;font-size:24px;">Welcome to Blue Pages - Gets you to the doorsteps of your clients  </h3>
                         <p style="font-size:25px; color:white;">Fast, Reliable  and  Accurate </p>
                    </div>
                    
					
					
					
					
                
                </div>
            </div>
			
        </section>


<div class="container-fluid">
            	<div class="container-fluid">
            	<div class="row">
                
                	
					
                     <div id="right" class="col-lg-2 col-md-8 text-right" >
					  
                    </div>
					<div id="left" class="left col-lg-8 col-md-8 text-left">
                    	<h2 style="text-align:center;"class="uppercase">MOMBASA COUNTY CONTACTS</h2>
                        
                     
                    </div>
					
                    <div id="right" class="col-lg-2 col-md-8 text-right" >
					  
                    </div>

                 </div>
            </div>
            </div>




<div class="row" >
		     <?php 
                         $start_year = 2023;
                         $limit = 10;
                        
                        for($i=0; $i<$limit ; $i++){
                            $url = '';
                            $bg ='';
                            $color ='text-grey';
                            if(date('Y')==$start_year){
                                $bg = 'bg-green';
                                $color = 'text-white';
                                $url = 'adverts/items/mombasa/adverts#';
                            }elseif(date('Y') > $start_year){
                                        $bg = 'bg-black';
                                        $url = 'adverts/items/mombasa/adverts#';
                                    }else{
                                        $url = 'adverts/items/mombasa/adverts#';
                                    }
                        ?>  
                            
                      
                    
    

							<div class="col-lg-2 col-md-6 default-grid-item">
								<div class="card gallery-desc <?php echo $bg; ?>">                             
                                    <div class="masonry-media">
                                        <a  class="media-middle"  href="<?php echo base_url().$url; ?>">
                                            <img src="<?php echo base_url().'public/img/bluepages.png';?>" width="100%" height="180" alt="Files/board" />                                                            </a>
                                    </div>
                                    <div class="home_card">
                                        <a  class="media-middle"  href="<?php echo base_url().$url; ?>">
                                            <h6 style="color:;" class="text-center text-18-bold <?php echo $color;?>" > <?php echo $start_year;?>  </h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
 <?php $start_year +=1; } ?>

			

                         

			 
</div>

<div class="row" >
		<div class="col-lg-4 col-md-6 ">
			<div style= "height:180px; background-color:#0760f0; border-color: blue;"class="card gallery-desc">
				
				<br><br><h3 style=" text-align:center;color:white;">ADVERTISE HERE </h3>
				<h6 style=" text-align:center;color:white;"><b>(Front Seat)</b> </h6>
				
				
				
			</div>
		</div>
		
		
		
		
		<div class="col-lg-4 col-md-6 default-grid-item">
			<div style= "height:180px; background-color:#0760f0; border-color: blue;"class="card gallery-desc">
				
				<br><br><h3 style=" text-align:center;color:white;">ADVERTISE HERE </h3>
				<h6 style=" text-align:center;color:white;"><b>(Front Seat)</b> </h6>
				
				
				
			</div>
		</div>
		
		
		
		<div class="col-lg-4 col-md-6 default-grid-item">
			<div style= "height:180px; background-color:#0760f0; border-color: blue;"class="card gallery-desc">
				
				<br><br><h3 style=" text-align:center;color:white;">ADVERTISE HERE </h3>
				<h6 style=" text-align:center;color:white;"><b>(Front Seat)</b> </h6>
				
				
				
			</div>
		</div>

		

			 
</div>

<div class="row" >
		<div class="col-lg-4 col-md-6 ">
			<div style= "height:180px; background-color:#0760f0; border-color: blue;"class="card gallery-desc">
				
				<br><br><h3 style=" text-align:center;color:white;">ADVERTISE HERE </h3>
				<h6 style=" text-align:center;color:white;"><b>(Front Seat)</b> </h6>
				
				
				
				
			</div>
		</div>
		
		
		
		
		<div class="col-lg-4 col-md-6 default-grid-item">
			<div style= "height:180px; background-color:#0760f0; border-color: blue;"class="card gallery-desc">
				
				<br><br><h3 style=" text-align:center;color:white;">ADVERTISE HERE </h3>
				
				<h6 style=" text-align:center;color:white;"><b>(Front Seat)</b> </h6>
				
				
			</div>
		</div>
		
		
		
		<div class="col-lg-4 col-md-6 default-grid-item">
			<div style= "height:180px; background-color:#0760f0; border-color: blue;"class="card gallery-desc">
				
				<br><br><h3 style=" text-align:center;color:white;">ADVERTISE HERE </h3>
				
				<h6 style=" text-align:center;color:white;"><b>(Front Seat)</b> </h6>
				
				
			</div>
		</div>

		

			 
</div>



</div>
</div>
</div>                                            </div>

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