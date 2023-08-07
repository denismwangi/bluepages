<?php


$this->load->helper('assets');

load_mixed_top();


load_sidebar();
//load_header();
$this->load->model('forum_m', true);
 $this->load->model('users_m', true);


 function time_ago($timestamp) {
    $current_time = time();
    $time_difference = $current_time - $timestamp;

    $seconds = $time_difference;
    $minutes = round($seconds / 60);
    $hours = round($seconds / 3600);
    $days = round($seconds / 86400);
    $weeks = round($seconds / 604800);
    $months = round($seconds / 2629440);
    $years = round($seconds / 31553280);

    if ($seconds <= 60) {
        return $seconds . ' seconds ago';
    } elseif ($minutes <= 60) {
        return $minutes . ' minutes ago';
    } elseif ($hours <= 24) {
        return $hours . ' hours ago';
    } elseif ($days <= 7) {
        return $days . ' days ago';
    } elseif ($weeks <= 4) {
        return $weeks . ' weeks ago';
    } elseif ($months <= 12) {
        return $months . ' months ago';
    } else {
        return $years . ' years ago';
    }
}
?>
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
                        
                            
                           
                            <a href="<?php echo base_url().'user/forum/create/'.$month.'/'.$year;?>"><button class="btn btn-success" style="text-transform: uppercase; font-size: "><span style="font-size:18px; " class="fa fa-plus"></span> New Discussion </button></a>
                            
                            <a href="" onclick="goBack();"><button class="btn btn-danger" ><span class="fa fa-caret-left"></span> PREVIOUS PAGE</button></a>
                        </div>                  

                    </div>
            </div>
            
        </section>

        <style type="text/css">
    
    .bg-blue{
        background-color: #0760f0 !important;
    }
    .recent-operations-card{
        background-color: #fff !important;
        margin-top: 70px !important;

    }
    .bg-red{

        background-color: #FC1616 !important;
    }
    .card-block{
        background-color: #fff;
    }
    #dis_reply{
        font-size: 15px !important;
    }
    .font-18{
        font-size: 25px !important; 
    }
    .m-b-0{
        font-size: 15px !important; 
    }
    .f-w-700{
        font-size: 12px !important; 
    }
    .text-c-white{
        color: #fff;
    }
    .font-15{
        font-size: 10px !important;
    }
    .m-b-0{

        font-size: 14px !important;

    }
     .schedule-block{
        border-left:none !important;
    }

</style>




<?php $status = $post->status;?>

<div class="col-xl-12 col-md-12">
                            <div class="card recent-operations-card">
                                <div class="card-header bg-blue">
                                    <h4 class="text-c-white text-center"><?php echo strtoupper($post->title)?></h4>
                                    
                                </div>
                                <div class="card-block">
                                                    
                                                        <div class="row m-b-40">
                                                            <div class="col-sm-4">
                                                                
                                                                <div class="d-inline-block align-middle">
                                                                
                                                                
                                        <?php 
                                            $u = $this->users_m->find($post->created_by);
                                                 
                                                ?> 
                                            
                                                <a href="<?php echo base_url().'user/profile/view/'.$u->id;?>">

                                                   

                                <?php
                                if(!empty($u->passport)){

                                    ?>


                                   <img src="<?php echo base_url().'uploads/profile/'.$u->passport;?>" alt="user image" width="80" height="80" class="img-radius img-80 align-top m-r-10"  style="margin-top: -125px !important; margin-right: 10px !important;">

                                    <?php
                                }else{

                                    ?>
                                    <img src="<?php echo base_url().'public/img/avatar.png';?>" alt="user image" width="80" height="80" class="img-radius img-80 align-top m-r-10"  style="margin-top: -125px !important; margin-right: 10px !important;">
                                    <?php
                                }

                    ?>
                                                 </a>
                                                    
                                                <?php
                                                

                                                ?>
                                                <div class="d-inline-block">
                                                    
                                                   <a href="<?php echo base_url().'user/profile/view/'.$u->id;?>"><h5 style="" >
                                        <b>By:</b> <?php 
                                                
                                                
                                                echo $u->full_name;
                     

                                                ?></h5></a>
                                            
                                                
                                                 
                                                    <p class="m-b-0 text-muted"><?php echo date('d M Y',$post->created_on)?></p>
                                                    <small class=" text-c-blue f-w-700"><?php echo time_ago($post->created_on);?></small>
                                                     
                                          
                                         
                                                <a><br><b><?php if($post->status==1) echo '<span class="label label-success font-12">Open</span>'; else echo'<span class="label label-warning font-12">Closed</span>'; ?></b> </a>    
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-sm-8 col-auto align-self-right font-18" >
                                              <?php echo $post->discussion?>
                                        </div>
                                    </div>
                                <hr>
                                
                                <div class="text-center">

                                    <a><i class="fa fa-comment-o text-c-blue m-r-10 m-l-20"></i>Comments (<?php echo $replies_count?>) </a>
                                    <a><i class="fa fa-eye text-c-blue m-r-10 m-l-20"></i>Views (<?php echo $post->views;?>) </a>

                                </div>
                                    
                                </div>
                                
                                
                                
                            </div>
                        </div>

          
                            
                    
                 <div class="col-xl-12 col-md-12">
                    <div class="card">
                        <div class="card-header bg-blue">
                            <h4 class="text-c-white text-center ">COMMENTS, REVIEWS, REPLIES AND REACTIONS </h4>
                        </div>
                            <div class="card-block">
                                <div class="schedule-block"  id="chat_load">
         
                                            </div>

                                            <hr>
                                            <br>
<?php

                                            if($status==1){
         ?>
      
           <a id="dis_reply" onclick="" class="label" style="background-color: #218838 !important;"><i class="fa fa-reply-all m-r-10 text-c-white"></i>Click here to comment</a>
           <br>
           <br>
           <br>

             <div class="col-xl-12 col-md-12" id="respond" style="display:none">
            
            <?php 
            $attributes = array('class' => 'form-horizontal', 'id' => '');
            echo   form_open_multipart('user/forum/post_comment/'.$month.'/'.$year.'/'.$post->id, $attributes); 
            ?>
            <div class="form-group row">
            <div class="col-sm-12" >
                     <textarea required="required" class="res_comment form-control" rows="4" name="response" placeholder="Your response here"></textarea>
                     
                </div>
            <div class="col-sm-12" >
            <br>
             <a id="cancel" class="btn btn-danger btn-sm pull-right" style="margin-right:20px" >CANCEL</a>
                 <input id="submit" type="submit" class="btn btn-success btn-sm pull-right" style="margin-right:10px" value="SUBMIT">
                
                <br>
                <br>
                <hr>
                <hr>
              </div>
              </div>
              <?php echo form_close(); ?>
              
              </div>
              

          <?php }?>



                                            </div>
                              
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
              </div>
        </div>
    </div>
</div>


         <script>

            
       


                    $(document).ready(function ()
                    {
                        

                        $("#dis_reply").click(function () {
                            
                           $('#respond').toggle('fast');

                            
                        });
                        
                        $("#submit").click(function () {
                            
                           var ck = $('.res_comment').value="";
                          
                        });

                        $("#cancel").click(function () {
                            
                            $('#respond').hide('fast');
                        });
                    
                     });

                     $(function(){
                        const new_url = "<?php echo base_url().'user/forum/get_comments/'.$post->id;?>";
                     
                         setInterval(function(){
                          $.ajax({
                            type:'GET',
                            url:new_url,
                          //  data:'',
                            success:function(data){
                            
                              $('#chat_load').html(data);
                            }
                          });   
                         }, 150);
                });

            </script>


             



<?php

load_footer();


?>