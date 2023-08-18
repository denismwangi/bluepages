
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
           <div class="block-fluid">



            <?php 
$attributes = array('class' => '', 'id' => '');
echo   form_open_multipart('user/settings/update_corporate', $attributes); 
?>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Full Name</label>
                <input type="text" name="name" class="form-control" id="inputEmail4" value="<?php echo $user->name; ?>">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Type</label>
               
                <select name="institution" class="select form-control" >
                

                <option value="2" <?php if ($user->type == '2') echo 'selected'; ?>>
                Private
              </option>
              <option value="1" <?php if ($user->type == '1') echo 'selected'; ?>>
                Public
              </option>

              </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Country</label>
               <select name="country" class="select form-control" required="required" >
                  <option value="" selected="selected">Select Country</option>
                      <?php

                      foreach ($countries as $country) {
                          ?>
                        

                          <option value="<?php echo $country->id; ?>" <?php if ($user->country == $country->id) echo 'selected'; ?>>
           <?php echo $country->name; ?>
        </option>
                          <?php
                      }
                      ?>

                    </select>         
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">County</label>
                <select name="county" class="select form-control" id="county" required="required" >
                      <option value="" selected="selected">Select County</option>
                      <option value="AZ">International / Unknown</option>
                       <?php

                              foreach ($counties as $county) {
                                  ?>
                                  
                                   <option value="<?php echo $county->id; ?>" <?php if ($user->county == $county->id) echo 'selected'; ?>>
           <?php echo $county->name; ?>
        </option>
                                  <?php
                              }
                              ?>
                          </select> 
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Sub County</label>
                <select name="sub_county" class="select form-control" id="sub_county">
                              <option value="" selected="selected">Select Sub County</option>

                               <?php

                                  foreach ($sub_counties as $subcounty) {
                                      ?>
                                     
                                       <option value="<?php echo $subcounty->id; ?>" <?php if ($user->sub_county == $subcounty->id) echo 'selected'; ?>>
           <?php echo $subcounty->name; ?>
        </option>
                                      <?php
                                  }
                                  ?>
                            </select>  
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Physical Address</label>
                <input type="text" name="address" value="<?php echo $user->address; ?>" class="form-control input-white" pattern=".{3,}" title="Enter a valid address" required="required"  /> 
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
               <label for="inputPassword4">Email Address</label>
                <input type="text" name="email" value="<?php echo $user->email; ?>" class="form-control input-white" pattern=".{3,}" title="Enter a valid address" required="required" readonly  /> 
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Phone Number</label>
                <input type="text" name="phone" value="<?php echo $user->phone; ?>" class="form-control input-white" pattern=".{3,}" title="Enter a valid address" required="required"  /> 
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
               <label for="inputPassword4">Website</label>
                <input type="text" name="website" value="<?php echo $user->website; ?>" class="form-control input-white" pattern=".{3,}" title="Enter a valid address" required="required"  /> 
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Designation</label>
                <input type="text" name="designation" value="<?php echo $user->designation; ?>" class="form-control input-white" pattern=".{3,}" title="Enter a valid address" required="required"  /> 
              </div>
            </div>

           

            <div class="form-row">
              <div class="form-group col-md-6">

              
                    <label for="inputEmail4">Profile Picture</label>
                 <input type="file" name="passport" id="image" class="form-control input-white">
                  
              </div>
              <div class="form-group col-md-6">

                <br>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">

                 <button type="submit" class="btn btn-primary" style="float: left;">UPDATE DETAILS</button>
                  
              </div>
              <div class="form-group col-md-6">
               
              </div>
            </div>

            
            
          
           <?php echo form_close();?>




<?php

load_footer();


?>