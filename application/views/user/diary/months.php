 
<?php


$this->load->helper('assets');

load_main_top();
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
				
				<div id="left" class="left col-lg-3 col-md-8 ">

					<br>
			
				
					 <a class="btn btn-sm btn-danger text-center" style="font-size:18px;" data-toggle="elementscroll" href="<?php echo base_url().'user';?>"><i class="fa fa-caret-left"></i> PREVIOUS PAGE</b></a>

					
                    	
                    </div>
				
               
				
				
			
            	<div id="left" class="left col-lg-9 col-md-8 text-left">
					
				
                    	<h3 style="color:white; margin-top:30">Organise and plan your work and events digitally. </h3>
                         
                    
					
                
                </div>
					
					
					
					
					
                
                </div>
            </div>
			
        </section>
		<div class="row">
                
                	
					
                     <div id="right" class="col-lg-2 col-md-8 text-right" >
					  
                    </div>
					<div id="left" class="left col-lg-8 col-md-8 text-left">
                    	<h3 style="text-align:center;"class="uppercase"><b>MY E-DIARY , Year    2023.<b></h3>
                        
                     
                    </div>
					
                    <div id="right" class="col-lg-2 col-md-8 text-right" >
					  
                    </div>

                 </div>
<br>





<div class="row" >
	<?php 
		$year = 2023;
							
				for($m=1; $m<=12; ++$m){
					
						$bg ='';
						$color ='text-grey';
						$url = '';
						if(date('Y') >= $year){
							
							if(date('m')==$m){
								$bg = 'bg-green';
								$color = 'text-white';
								$url = 'user/diary/'.$m.'/'.$year;
							}elseif(date('m') > $m){
								$bg = 'bg-black';
								$url =  'user/diary/'.$m.'/'.$year;
							}else{
								$url = 'user/diary/'.$m.'/'.$year.'#';
							}
						}
				?>	
		<div class="col-lg-2 col-md-6 default-grid-item">
			<div style= "border-color: blue;"class="card gallery-desc <?php echo $bg;?>">
				<div class="masonry-media">
					<a class="media-middle" target="" href="#">
					<img src="<?php echo base_url().'public/img/ediary.jpg';?>" width="100%" height="180" alt="icons2/uploads" />					</a>
				</div>
				<div style=""class="home_card">
				 <a class="media-middle" target="" href="">
						<h6 style="color:white;"class="text-center text-18-bold <?php echo $color;?> "> <?php echo date('F', mktime(0, 0, 0, $m, 1));?></h6>
				  </a>
				</div>
			</div>
		</div>

		 <?php  } ?>

			 
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