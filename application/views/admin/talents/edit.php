
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
           <div class="block-fluid col-md-6">



            <?php 
$attributes = array('class' => '', 'id' => '');
echo   form_open_multipart('admin/talents/edit_talent'.$talent->id, $attributes); 
?>
              <div class="form-group">
                <label for="inputEmail4">Category Name</label>
                <input type="text" name="name" value="<?php echo $talent->name;?>" class="form-control" id="inputEmail4" value="">
              </div>
             
              <div class="form-group">

              
                    <label for="inputEmail4">Image</label>
                 <input type="file" name="image" id="image" class="form-control input-white">
                  
              </div>
            
              <div class="form-group">

                 <button type="submit" class="btn btn-primary" style="float: left;">Submit</button>
                  
             
              
            </div>
           <?php echo form_close();?>
<?php

load_footer();


?>