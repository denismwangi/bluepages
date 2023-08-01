

<?php
$this->load->helper('assets');

load_top();
?>


<body style="background-color:lightgrey; background-image: url(); -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;; background-repeat: no-repeat; background-attachment: fixed;" >
        
		
		    <div class="row">
				<div class="col-md-12">
					<div style= "border-color: blue;" class=" recent-operations-card">
						<div class="card-block">  
						  <section id="highlight">
						<div class="container-fluid">
						
						
							<div class="row">
							
									<div id="left" class="left col-lg-3 col-md-8 "  ><br>
								
									
										 <a class="btn btn-sm btn-danger text-center" style="font-size:18px;" data-toggle="elementscroll" href=""><i class="fa fa-caret-left"></i> BACK TO PREVIOUS PAGE</a>

										
														
									</div>
									<div id="left" class="left col-lg-7 col-md-8 text-right">
							
							
										<h3 style="color:white;font-size:24px;">Welcome to Blue Pages - Gets you to the doorsteps of your clients  </h3>
										 <p style="font-size:25px; color:white;">Fast, Reliable  and  Accurate </p>
									</div>
									<div id="right" class="right col-lg-2 col-md-8 "  ><br>
								
									
										 <a class="btn btn-sm btn-danger text-center" style="font-size:18px;" data-toggle="elementscroll" href="<?php echo base_url().'user/home';?>"><i class="fa fa-caret-left"></i> BACK TO MAIN PAGE</a>

										
														
									</div>
										
							</div>
							<br><br><br>
							
							
							<div class="row">
							
									<div  class="left col-lg-2 col-md-8 "  >								
												
									</div>
									
									
										<div class="col-lg-8 col-md-8 default-grid-item">
											<div style= "background-color:lightblue; border-color: blue;"class="card gallery-desc">
											<div class="row">
											    <div class="col-lg-4"></div>
												
												<div Style="background-color:blue;"class="col-lg-4">
												
												<h4 style=" text-align:center;color:white;"><b>  PREVIEW </b> </h4></div>
												
												<div class="col-lg-4"></div>
											
											
											
											</div>
														
														
														
														<div class="row" >
															
															
															<div class="col-lg-12">
															<div class="card gallery-desc">
															<div class="masonry-media">
																
																	<video width="100%" height="540" controls id="safvid">
																	  <source src="<?php echo base_url().'public/video/saf.mp4';?>" type="video/mp4">
																	  
																	
																	</video>                                                      
															
															</div>
                                                        
                                                        </div>
															
																			
															</div>
															
															
														
														
														
														</div>
														
														
																												
														
														
														<div class="row"style="font-size:15px;text-align:center;margin-bottom:10">
															<div class="col-lg-2"></div>
															<div class="col-lg-8">
															 <a  Style="background-color:green;"href="" class="btn btn-success" role="button"><b>VIEW CONTACT<b></a>
															 <a  Style="background-color:tomato;" class="btn btn-warning" role="button" onclick="openFullscreen();"><b>FULL VIEW <b></a>
															 <a  Style="background-color:blue;" href="" class="btn btn-info" role="button"><b>VISIT WEBSITE<b></a>
															 <a  Style="background-color:purple;"href="" class="btn btn-primary" role="button"><b>COMMENT<b></a>
															
															</div>
															
															
															<div class="col-lg-2"></div>
														
														
														
														</div>
														
														
														
														
														
														
																							
												
												
												
												
											</div>
										</div>
									
									
									<div  class="right col-lg-2 col-md-8 "  >
												
									</div>
									

										
							</div>
							
							
							
							
							
							
							
						</div>
					</div>
				</div>
			</div>

<script>
var elem = document.getElementById("safvid");
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.webkitRequestFullscreen) { /* Safari */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE11 */
    elem.msRequestFullscreen();
  }
}
</script>			


<?php

load_footer();


?>