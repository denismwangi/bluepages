
<?php


$this->load->helper('assets');

load_mixed_top();

load_sidebar();
load_header();
?>



<div class="container-fluid">
            	<div class="container-fluid">
            	<div class="row">
                
                	
					
                     <div id="right" class="col-lg-2 col-md-8 text-right" >
					  
                    </div>
					<div id="left" class="left col-lg-8 col-md-8 text-left">
                    	<h3 style="text-align:center;"class="uppercase"><b>Forum<b></h3>
                        
                     
                    </div>
					
                    <div id="right" class="col-lg-2 col-md-8 text-right" >
					  
                    </div>

                 </div>



                    <div class="row">
                        <div class=" col-md-12 clearfix"></div>

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
                                $url = 'forum/months/'.$start_year;
                            }elseif(date('Y') > $start_year){
                                        $bg = 'bg-black';
                                        $url = 'forum/months/'.$start_year;
                                    }else{
                                        $url = 'forum/years/#';
                                    }
                        ?>  
                            
                    
							<div class="col-lg-2 col-md-6 default-grid-item">
								<div class="card gallery-desc <?php echo $bg; ?>">                             
                                    <div class="masonry-media">
                                        <a  class="media-middle"  href="<?php echo base_url().'user/'.$url; ?>">
                                            <img src="<?php echo base_url().'public/img/discussion.jpg';?>" width="100%" height="180" alt="Files/board" />                                                            </a>
                                    </div>
                                    <div class="home_card">
                                        <a  class="media-middle"  href="<?php echo base_url().'user/'.$url; ?>">
                                            <h6 style="color:;" class="text-center text-18-bold <?php echo $color;?>" > <?php echo $start_year;?>  </h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
 <?php $start_year +=1; } ?>

			

                           <hr> 							
                    </div>










				 
				 
		

		

			 
</div>


</div>
</div>
</div>                                            </div></div>

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