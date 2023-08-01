<?php


$this->load->helper('assets');

load_mixed_top();


load_sidebar();
//load_header();
$this->load->model('forum_m', true);
 $this->load->model('users_m', true);


//print_r($user); die;

 ?>
 <style type="text/css">
     .profile-th{
        background-color: #fff;

     }
     .p-det{

        color: black !important;

     }
     .profile-text td p strong {
          color: black !important;
      }
      .title-bg{
         background-color: #0760f0 !important;
      }

 </style>
   <script type="text/javascript" src="https://demo.dsms.co.ke/assets/js/jquery.min.js"></script>

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
                        
                            
                           
                            <a href=""><button class="btn btn-success" style="text-transform: uppercase; font-size: "><span style="font-size:18px; " class="fa fa-plus"></span> New Discussion </button></a>
                            
                            <a href="" onclick="goBack();"><button class="btn btn-danger" ><span class="fa fa-caret-left"></span> PREVIOUS PAGE</button></a>
                        </div>                  

                    </div>
            </div>
            
        </section>
        <br>
        <br>

                <div class="card recent-operations-card">
<div class="row">
<div class="col-md-12">
   <div class="block-fluid">
        
          
  <div class="image text-center" >
          

<table style="width: 100%; float: left;" border="1" class="profile-text">
        <tbody>
                <tr style="height: 7px !important;" class=" ">
                        <td style="height: ;" rowspan="7" width="191" class="text-center img-area" >
                             <div class="image text-center img-area" >
                                   <image src="https://www.test.bluepages.co.ke/public/img/admin/admin.jpg"  class="text-center" width="250" height="250" > 
                                </div>
                        </td>
                        <td style="height:7px !important;" colspan="4" width="544" class="title-bg">
                                <h3 style="text-align: center; color: #fff;"><strong>USER DETAILS</strong></h3>
                        </td>
                </tr>
                <tr style="height:;" class="profile-th">
                        <td style="text-align: center; height: 20px;" width="181">
                                <p class="p-det"><strong>Names</strong></p>
                        </td>
                        <td style="text-align: center; height:;" width="181">
                                <p class="p-det"><?php echo ucwords($user->full_name); ?> </p>
                        </td>
                        
                </tr>
                
               <tr style="height:;" class="profile-th">
                        <td style="text-align: center; height: 20px;" width="181">
                                <p class="p-det"><strong>Date Joined</strong></p>
                        </td>
                        <td style="text-align: center; height:;" width="181">
                                <p class="p-det"><?php //echo date('d M Y',$user->created_at)?> 4th March 2023</p>
                        </td>
                        
                </tr>
                
                <!-- <tr style="height: 41px;" class="profile-th">
                        <td style="text-align: center; height: 41px;" width="181">
                                <p><strong>Date of Birth</strong></p>
                        </td>
                        <td style="text-align: center; height: 41px;" width="181">
                                <p><strong>Gender</strong></p>
                        </td>
                        
                </tr> -->
        
              
                
                
        </tbody>
</table>


   




<?php

load_footer();


?>