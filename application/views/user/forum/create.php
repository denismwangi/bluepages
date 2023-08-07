
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

        <style type="text/css">
    
    .labl{
        font-size: 15px;
    }
</style>



        <div class="card recent-operations-card"> 			      
				   <div class="block-fluid">

<?php 
$attributes = array('class' => 'form-horizontal', 'id' => '');
echo   form_open_multipart('user/forum/post_forum/'.$month.'/'.$year, $attributes); 
?>
<div class='form-group row'>
	<div class="col-md-3 labl" for='title'>Title / Topic <span class='required'>*</span> </div><div class="col-md-6">
	<?php echo form_input('title', '','id="title"  class="form-control" ' );?>
 	<?php echo form_error('title'); ?>
</div>
</div>

<div class='form-group row'>
	<div class="col-md-3 labl" for='category'>Viewer / Access <span class='required'>*</span></div>
<div class="col-md-6">
                <?php 
			
				$items = array(
				"everyone"=>"Everyone",
				"contacts"=>"Contacts",				
				
				);		
     echo form_dropdown('category', $items,'' ,   ' class=" select form-control" data-placeholder="Select Options..." ');
     echo form_error('category'); ?>
</div></div>

<div class='form-group row'>
	<div class="col-md-3 labl" for='status'>Status <span class='required'>*</span></div>
<div class="col-md-6">
                <?php $items = array("1"=>"Publish",'0' =>'Draft');		
     echo form_dropdown('status', $items, '' ,   ' class=" select form-control" data-placeholder="Select Options..." ');
     echo form_error('status'); ?>
</div></div>

 <div class='form-group row'>
        <div class="col-md-12 labl">
	<h4>Discussion <span class='required'>*</span></h4></div>
	 <div class="col-md-12">
	<textarea id="discussion"  class="discussion"  name="discussion"  /></textarea>
	<?php echo form_error('discussion'); ?>
    </div>

     <script type="text/javascript">
              CKEDITOR.replace( 'discussion' );
          </script>
</div>

<!-- <div class='form-group row'>
	<div class="col-md-3 labl" for='file'>(file) </div>
 <div class="col-md-6">
	<input id='file' type='file' name='file' />

	
</div>
</div> -->
<hr>
<div class='form-group row'><div class="col-md-3"></div><div class="col-md-6">
    

    <?php echo form_submit( 'submit','Save Changes',  "id='submit' class='btn btn-primary'"); ?>
	<?php echo anchor('admin/forum','Cancel','class="btn  btn-default"');?>
</div></div>
 
<?php echo form_close(); ?>
<div class="clearfix"></div>
 </div>
            </div>
            </div>
            </div>
            </div>


<?php

load_footer();


?>