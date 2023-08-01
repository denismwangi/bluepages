<?php


$this->load->helper('assets');

load_mixed_top();

load_sidebar();
//load_header();



?>


<div class="pcoded-content">
                            <div class="pcoded-inner-content">
                                <div class="main-body">
                                    <div class="page-wrapper">
                                        <div class="page-body">

                                            <div class="page-cotent" id="scroll-fill">
<div class="overflow-auto p-3 bg-light"  style="max-width: 100%; max-height: 800px;">                                                 <!-- statustic card start -->
<div class="row">
    <div class="col-md-12">
        <div class=" recent-operations-card">
            <div class="card-block">  
               <section id="highlight">
            <div class="container-fluid">
                <div style= " background-color: #0760f0;" class="row">
                
<!-- 
                            <div class="pull-left" style="margin-top: 25px;padding-left: 10px; width: 0px;">
                                <a href="/contacts/user.php"><button class="btn btn-danger" ><span class="fa fa-caret-left"></span> PREVIOUS PAGE</button></a>
                            </div>  -->

                        <div class="col-md-7 ">
                            <div class="col-md-12">
                                <h3 class="m-b-12" style="color: white;">Blue Pages gets you to the doorsteps of your clients</h3>
                                <p><h4 style="color: white;">Fast, Reliable and Accurate</h4></p>
                            </div>
                        </div>

                    <div class="col-md-5">

                        <div class="pull-right" style="margin-top: 25px; padding-right: 3px;">
						
                            
                           
                             <a href="<?php echo base_url().'user/forum/create/'.$month.'/'.$year;?>"><button class="btn btn-success" style="text-transform: uppercase; font-size: "><span style="font-size:18px; " class="fa fa-plus"></span> New Discussion </button></a>
							
							<a href="" onclick="goBack();"><button class="btn btn-danger" ><span class="fa fa-caret-left"></span> PREVIOUS PAGE</button></a>
                        </div>                  

                    </div>
            </div>
            
        </section>



          	<div class="container-fluid">
	            	<div class="row">               

	                    <div class="center col-md-9 text-center">
	                        <h3 style="text-align:center;"class="uppercase">Discussion Forum</h3>
	                    </div><br>


						
	                     <div id="right" class="col-lg-3 col-md-8 text-right" >
							
								<input type="search" id="form1" class="form-control" />
										<label class="form-label" for="form1"></label>
										
										
													  
	                    </div>


	                 </div>
						<style type="text/css">
							.table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
							 font-size: 16px !important;
							}
						</style>

		                <table id="dom-jqry" class="table table-striped table-bordered " >
							<thead >
								<tr>
									<th style="text-align:center;">#</th>
									<th style="text-align:center;">TOPIC</th>
									<th style="text-align:center;">COMMENTS</th>
									<th style="text-align:center;">TIME</th>
									
									<th style="text-align:center;">ACTION</th>
								</tr>

							</thead>

								
        <tbody>
        	<?php
              $i = 1;
             foreach ($forum as $fr) {
             	?>
             	 <tr>                           
             

	            <td><?php echo $i++ . '.'; ?></td>
	            <td><?php  echo $fr->title;

	         

				$this->load->model('forum_m', true);
				$this->load->model('users_m', true);
				$u = $this->users_m->find($fr->created_by);

	             ?>
	            	
	            	<br> <br> 
				<small><b>
				<i>By: <?php echo $u->full_name; ?> </i><br>
				<i><?php echo date('d M Y',$fr->created_on)?></i>
				</b></small>



	            </td>
	             <td><?php echo $this->forum_m->count_where('discussion_id',$fr->id,'forum_replies')?></td>
	             <td><span class="label label-warning"><?php echo date('d M Y',$fr->created_on)?></span></td>
				
	            

	            <td>
	            <div class="btn-toolbar">
	               

	                 <a  class="btn btn-success" href='<?php echo site_url('user/forum/join/'.$month.'/'.$year.'/'.$fr->id);?>'><i class='fa fa-comment-o'></i> Join Discussion</a>
	        </tr>


             	<?php
             }
             ?>
       

       


       
                </td>

                </tr>
		        </tbody>

		    </table>

	 
</div>





<?php

load_footer();


?>