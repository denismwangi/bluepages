 
<?php
$this->load->helper('assets');

load_main_top();
?>          
   
 <body   style="background-color:lightgrey; background-image: url(); -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;; background-repeat: no-repeat; background-attachment: fixed;" >
        
		
		    <div class="row">
				<div class="col-md-12">
					<div style= "border-color: blue;" class=" recent-operations-card">
						<div class="card-block">  
						  <section id="highlight">
						<div class="container-fluid">
						
						
							<div class="row">
							
									<div id="left" class="left col-lg-3 col-md-8 "  ><br>
								
									
										 <a class="btn btn-sm btn-danger text-center" style="font-size:18px;" data-toggle="elementscroll" href="" onclick="history.back()"><i class="fa fa-caret-left"></i> BACK TO PREVIOUS PAGE</a>

										
														
									</div>
									<div id="left" class="left col-lg-7 col-md-8 text-right">
							
							
										<h3 style="color:white;font-size:24px;">Welcome to Blue Pages - Gets you to the doorsteps of your clients  </h3>
										 <p style="font-size:25px; color:white;">Fast, Reliable  and  Accurate </p>
									</div>
									<div id="right" class="right col-lg-2 col-md-8 "  ><br>
								
									
										 <a class="btn btn-sm btn-danger text-center" style="font-size:18px;" data-toggle="elementscroll" href="<?php echo base_url().'user/home';?>"><i class="fa fa-caret-left"></i> BACK TO HOME PAGE</a>

										
														
									</div>
										
							</div>
							<br><br><br>
							
							
							<div class="row">
							
									<div  class="left col-lg-2 col-md-8 "  >								
												
									</div>
									
									
										<div class="col-lg-8 col-md-8 default-grid-item">
											<div style= " background-color:lightblue; border-color: blue;"class="card gallery-desc">
											
											
														<div  class="row" style=" background-color:#0760f0;height:60" >
														
														
														<div class="col-lg-5" Style="margin-top:7">
															<h4 style=" color:white;margin-left:5"><b>  SELECT TYPE OF ADVERTISEMENT </b> </h4>
														
														</div>
														
													
														<div class="col-lg-7"Style="margin-top:11;text-align:right">
														
														     <a Style="background-color:purple" href="<?php echo base_url().'user/adverts/anchor_patner';?>" class="btn btn-info  " >ANCHOR PARTNER</a>
															 <a Style="background-color:brown" href="<?php echo base_url().'user/adverts/front_seat';?>" class="btn btn-info  " >FRONT SEAT</a>
															 <a Style="background-color:black"href="<?php echo base_url().'user/adverts/image_advert';?>" class="btn btn-warning  " >IMAGES</a>
															<a href="<?php echo base_url().'user/adverts/video_advert';?>" class="btn btn-success  " >VIDEOS</a>
														
														</div>
																				
																		
														</div><br>
														
														<div  class="row" style=" " >
														<div class="col-lg-2"></div>
														<div class="col-lg-8">
															<h2 style=" color:black;text-align:center;"><b>  VIDEO ADVERT </b> </h2>
															<p style=" color:brown;text-align:center;font-size:17;"><b>If a picture is worth a thousand words, then a video is worth a million words<b></p>
															
																	
														</div>
														
														<div class="col-lg-2"></div>
														
																				
																		
														</div><br>
														
														<div  class="row" style=" " >
														<div class="col-lg-1">
															
														
														</div>
														<div class="col-lg-11">
															<h4 style=" color:black;"><b>  Upload image to appear on the front cover page  </b> </h4>

															
																	<form action="/action_page.php">
																	  <input type="file" id="myFile" name="filename">
																	  
																	  <br>
																	  <div class="form-group">
																			<label for="exampleFormControlTextarea1" style=" text-align:center;color:black;">Description (actual size)</label>
																			<textarea Style="resize:none;text-transform: none;width:350"class="form-control" id="exampleFormControlTextarea1" rows="2">Brief image description (only two rows acceptable)</textarea>
																	  </div>
																	  
																	</form>
														</div>
														
														
														
																				
																		
														</div><br>
														<div  class="row" style=" " >
														<div class="col-lg-1"></div>
														<div class="col-lg-6"><h4 style=" color:black;"><b> Upload video file </b> </h4></div>
														
														</div>
														<div  class="row" style=" " >
														<div class="col-lg-1"></div>
														<div class="col-lg-3">
															

															
																
																	<form action="/action_page.php">
																	  <input type="file" id="myFile" name="filename">
																	  
																	  <br>
																	  
																	  
																	</form>
																	
																      
																      
														</div>
														
														<div class="col-lg-1"></div>
														
																				
																		
														</div>
														
														
														<br>
														
														<div class="row">
															        <div class="col-lg-1">
																	
																	</div>
																	<div class="col-lg-10"style="font-size:15px;text-align:center;margin-bottom:10">
																				<a class="btn btn-sm btn-success "  data-toggle="elementscroll" href="<?php echo base_url().'user/adverts/video_preview';?>"><i class="fa fa-caret-right"></i> PREVIEW</a>

																	</div>
																	<div class="col-lg-1">
																	
																	</div>
																	
																	
                    	
															 
															
															</div>
																
															
														
														
														
														
																							
												
												
												
												
											</div>
										</div>
									
									
									<div  class="right col-lg-1 col-md-8 "  >
												
									</div>
										
							</div>
							
							
							
							
							
							
						</div>
					</div>
				</div>
			</div>	
<?php

load_footer();

?>  