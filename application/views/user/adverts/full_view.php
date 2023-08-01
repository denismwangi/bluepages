<?php
$this->load->helper('assets');

load_top();
?>

<body   style="background-color:lightgrey; background-image: url(); -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;; background-repeat: no-repeat; background-attachment: fixed;" >
        
		
		    <div class="container-fluid">
			
			           
					   
					   <div class="row">
					   
					   <div class="col-lg-1"></div>
					   
					   <div class="col-lg-10">
					   
					  
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
										<!-- Indicators -->
										<ol class="carousel-indicators">
										  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
										  <li data-target="#myCarousel" data-slide-to="1"></li>
										  <li data-target="#myCarousel" data-slide-to="2"></li>
										</ol>

										<!-- Wrapper for slides -->
										<div class="carousel-inner">

										  <div class="item active">
											<img class="img-fluid" src="<?php echo base_url().'public/img/airtel/1.jpg';?>" style="width:100%;height:800" alt="airtel" />
											
											<div class="carousel-caption">
											  <h3>Airtel</h3>
											  <p>A reason to Imagine</p>
											</div>
										  </div>

										  <div class="item">
											<img class="img-fluid" src="<?php echo base_url().'public/img/airtel/3.jpg';?>" style="width:100%;height:800" alt="airtel">
											<div class="carousel-caption">
											  <h3>SIM-less</h3>
											  <p>Wonder Enjoy endless possibilities with Airtel eSIM</p>
											</div>
										  </div>
										
										  <div class="item">
											<img  class="img-fluid" src="<?php echo base_url().'public/img/airtel/2.jpg';?>" style="width:100%;height:800" alt="airtel">
											<div class="carousel-caption">
											  <h3>Kaa Chonjo</h3>
											  <p>We will only call you through 0733100000</p>
											</div>
										  </div>
									  
										</div>

										<!-- Left and right controls -->
									<div >
										<a class="left carousel-control" href="#myCarousel" data-slide="prev">
										  <span style="background-color:blue;color:white" class="glyphicon glyphicon-chevron-left"></span>
										  <span class="sr-only">Previous</span>
										</a>
										<a class="right carousel-control" href="#myCarousel" data-slide="next">
										  <span style="background-color:blue;color:white" class="glyphicon glyphicon-chevron-right"></span>
										  <span class="sr-only">Next</span>
										</a>
									
									
									</div>
									
			
									  </div>		
					
					   
					   </div>
					   
					   <div class="col-lg-1">
					       <a  href="<?php echo base_url().'user/adverts/preview_full';?>"><br>
							  <span style="background-color:red;color:white;font-size:24;" ><i class="fa fa-times" aria-hidden="true"></i>  Close</span>
							  <span class="sr-only"></span>
							</a>
						</div>
					
		</div>		
<?php

load_footer();


?>              
