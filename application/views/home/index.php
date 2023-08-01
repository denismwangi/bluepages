<?php


$this->load->helper('assets');

load_top();
?>
	<body   style="background-color:lightgrey; background-image: url(<?php echo base_url().'public/img/sky.jpg';?>); -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;; background-repeat: no-repeat; background-attachment: fixed;" >
        
		
		    
						<div class="container-fluid">
						
						
							<div class="row">
							
									<div id="left" class="left col-lg-2 col-md-8 "  ><br>
								
									
										
														
									</div>
									<div  class="left col-lg-8 col-md-8 text-center"><br>
									        <br>
									    <h1 class="text-center text-bold"style="color:blue;"><b>THE SKY IS ALWAYS THE LIMIT AND IT IS BLUE<b></h1> 	 <br>  
											<img src="<?php echo base_url().'public/img/BLUEPAGES.jpg';?>" width="300" height="300">
							   
											 <br>
									
														
											<br>
										  														
														<h2 style="color:blue;text-align:center"><b>WELCOME TO BLUE PAGES   </b></h2>
										 <h3 style=" color:blue;text-align:center"><b>THE BEST PLACE TO FIND, ADVERTISE AND MARKET YOUR PRODUCTS AND SERVICES</b> </h3>
										 
										
									</div>
									<div id="left" class="left col-lg-2 col-md-8 "  ></div>
										
							</div><br>
							
							<div class="row">
							
									<div id="left" class="left col-lg-2 col-md-8 "  ></div>
									
									<div  class="left col-lg-8 col-md-8 text-center">
											<div class="row">
											<div class="col-lg-1 col-md-8 "  ></div>

											   <div class="col-lg-5" style="color:blue;background-color:#0760f0">
											   <h4 style="color:white;font-size:22"><b>Please select your country <b></h4>

												
											   
											   
											   </div>
											   <div class="col-lg-5" >
											   
													   <select name="county" onchange="javascript:handleSelect(this)">
													   <option value="">Select your country</option>
														<option value="<?php echo base_url().'home/regions';?>">Kenya</option>
														<option value="<?php echo base_url().'home/upcoming';?>">Tanzania</option>
														<option value="<?php echo base_url().'home/upcoming';?>">Uganda</option>
														<option value="<?php echo base_url().'home/upcoming';?>">Rwanda</option>
														<option value="<?php echo base_url().'home/upcoming';?>">Burundi</option>
														<option value="<?php echo base_url().'home/upcoming';?>">DR Congo</option>
														</select>

														<script type="text/javascript">
														  function handleSelect(elm)
														  {
															 window.location = elm.value;
														  }
														</script>
														
													

											   
											   
											   </div>
											
											
											
											</div>
												
								
									
											
									</div>
								
									  
										
									<div id="left" class="left col-lg-2 col-md-8 "  ></div>
										
						
											
							</div>

<?php

load_footer();


?>




