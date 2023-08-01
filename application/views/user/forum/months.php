
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
                                $url = 'user/forum/list/'.$m.'/'.$year;
                            }elseif(date('m') > $m){
                                $bg = 'bg-black';
                                $url =  'user/forum/list/'.$m.'/'.$year;
                            }
                            else{
                                $url = 'user/forum/list/'.$m.'/'.$year.'#';
                            }
                        }
                ?>  
        <div class="col-lg-2 col-md-6 default-grid-item">
            <div style= "border-color: blue;"class="card gallery-desc <?php echo $bg;?>">
                <div class="masonry-media">
                <a href="<?php echo base_url().$url; ?>">
                    <img src="<?php echo base_url().'public/img/discussion.jpg';?>" width="100%" height="180" alt="icons2/uploads" />                    </a>
                </div>
                <div class="home_card">
                 <a class="media-middle" target="" href="<?php echo base_url().$url; ?>">
                    <h6 style="color:white;"class="text-center text-18-bold<?php echo $color;?> "> <?php echo date('F', mktime(0, 0, 0, $m, 1));?></h6>
                  </a>
                </div>
            </div>
        </div>

    
        
         <?php  } ?>
    
</div>



   
    <?php

load_footer();


?>