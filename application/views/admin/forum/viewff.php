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
						
                            
                           
                            <a href="<?php echo base_url().'admin/forum/create/'.$month.'/'.$year;?>"><button class="btn btn-success" ><span style="font-size:18px;"class="fa fa-plus"></span>New Discussion </button></a>
							
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
    .m-b-0{

        font-size: 14px !important;

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
                                                                <h6 class="m-b-20">Posted By :</h6>
                                                                <div class="d-inline-block align-middle">
                                                                
                                                                
                                        <?php 
                                            
                                                 
                                                ?> 
                                            
                                                 <img src="https://www.test.bluepages.co.ke/public/img/admin/admin.jpg" alt="user image" width="80" height="80" class="img-radius img-80 align-top" style="margin-top: -125px !important; margin-right: 10px !important;">
                                                    
                                                
                                                <div class="d-inline-block">
                                                <?php 
                                                
                                                $u = $this->users_m->find($post->created_by);


                                                ?>
                                                    <h6 class="m-b-5"><?php echo $u->full_name;?></h6>
                                                    <p class="m-b-0 text-muted"><?php echo date('d M Y',$post->created_on)?></p>
                                                    <small class=" text-c-blue f-w-700"><?php echo time_ago($post->created_on);?></small>
                                                     
                                          
                                            <p class="m-b-0 text-muted">Category: </p>
                                                <a href="#!"><br><b><?php if($post->status==1) echo '<span class="label label-success font-12">Open</span>'; else echo'<span class="label label-warning font-12">Closed</span>'; ?></b> </a>    
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-sm-8 col-auto align-self-right font-18" >
                                              <?php echo $post->discussion?>
                                        </div>
                                    </div>
                                <hr>
                                <?php if($status==1){?>
                                    <a href="#!" id="dis_reply" class="label label-danger" ><i class="fa fa-reply-all text-c-blue m-r-10"></i>Click here to comment</a>
                                <?php } ?>
                                    <a href="#!"><i class="fa fa-comment-o text-c-blue m-r-10 m-l-20"></i>Comments (<?php echo $replies_count?>) </a>
                                    <a href="#!"><i class="fa fa-eye text-c-blue m-r-10 m-l-20"></i>Views (<?php echo $replies_count?>) </a>
                                    <a href="#!"><i class="fa fa-unlock text-c-blue m-r-10 m-l-20"></i>Status <b><span class="label label-info font-12">Joined</span></b> </a>
                                    
                                
                                 
                                </div>
                                
                                
                                
                            </div>
                        </div>

            <div class="col-xl-12 col-md-12" id="respond" style="display:none">
            
            <?php 
            $attributes = array('class' => 'form-horizontal', 'id' => '');
            echo   form_open_multipart(current_url(), $attributes); 
            ?>
            <div class="form-group row">
            <div class="col-sm-12" >
                     <textarea required="required" class="res_comment form-control" rows="4" name="response"   placeholder="Your response here"></textarea>
                     
                </div>
            <div class="col-sm-12" >
            <br>
             <a href="#" id="cancel" class="btn btn-danger btn-sm pull-right" style="margin-right:20px" > Cancel</a>
                 <input id="submit" type="submit" class="btn btn-success btn-sm pull-right" style="margin-right:10px" value="Submit">
                
                <br>
                <br>
                <hr>
                <hr>
              </div>
              </div>
              <?php echo form_close(); ?>
              
              </div>
                            
                    
                <div class="col-xl-12 col-md-12">
                        <div class="card">
                            <div class="card-header bg-red">
                                    <h4 class="text-c-white text-center ">COMMENTS, REVIEWS, REPLIES AND REACTIONS </h4>
                             
                            </div>
                            <div class="card-block">
                                <div class="schedule-block">
                                
                                <?php 
                                
                                $path ='';
                                
                                foreach($replies as $r){
                                   

                                     $u = $this->users_m->find($r->created_by);
                                    
                                      $posted_response = $this->forum_m->posted_response($r->id);
                                      $count_response = $this->forum_m->count_response($r->id);
                                    ?>
                                    <div class="schedule-list">
                                    
                              
                         <img src="https://www.test.bluepages.co.ke/public/img/admin/admin.jpg" alt="user image" width="50"  height="50" class="schedule-image">
                            
                   
                
                             
        <p>


              <span class="label label-info font-15">
                <?php



                if($u->group_id == 1){

                ?>

              Admin 
              <?php
          }else{
              ?>
              User
              <?php

          }?>
          </span>
                    </p>
                     
                        
                     
                                        <h6 style="margin-left:10px !important" >
                                        <b>By:</b> <?php echo $u->full_name;?> 
                                        <small class="m-l-10 text-c-blue f-w-700"><?php echo date('d M Y',$post->created_on);?></small>
                                        </h6>
                                        <span class="m-b-0 font-15" > <?php echo $r->comment?> </span>
                                        
                                         <p>
                                            <a href="#!">
                                            <i class="fa fa-calendar text-c-blue m-r-10"></i>
                                            <?php echo time_ago($r->created_on);?>
                                            </a>
                                            &nbsp;&nbsp;&nbsp;
                                            <?php if($status==1){?>
                                            <a href="#!" class="waves-effect1 md-trigger" id="resp_<?php echo $r->id;?>" ><i class="fa fa-reply-all text-c-blue m-r-10"></i>Reply</a>
                                            <?php }?>
                                            <a href="#!" id="view_replies_<?php echo $r->id;?>"><i class="fa fa-comment-o text-c-blue m-r-10 m-l-20"></i>Replies (<?php echo $count_response?>) </a>
                                          </p>
                                        

                                          <div id="response_row_<?php echo $r->id;?>" style="display:none"> 
                                            <div class="col-md-12" id="hide_reply_form_<?php echo $r->id;?>">
                                                   <div class='form-group row'>
                                                     
                                                          <div class="col-md-9">
                                                             <textarea class="res_comment form-control" rows="2" name="response" id="comment_<?php echo $r->id;?>" placeholder="Reply to <?php echo $u->full_name;?>..."></textarea>
                                                          </div>
                                                          <div class="col-md-3">
                                                          <button type="button" id="submt_<?php echo $r->id;?>"  class="pull-left btn  btn-primary btn-outline-primary btn-sm">Reply</button>
                                                          </div>
                                                          </div>
                                                      
                                                 </div>
                                             </div> 
                                             
                                             <div class="col-sm-12" id="response_replies_<?php echo $r->id; ?>" style="display:none">
                                             
                                                    <div class="card-header1">
                                                        <b>Comments (<?php echo $count_response; ?>)</b>
                                                        <hr>
                                                      
                                                    </div>
                                                    
                                             <!--- POST REPLIES ------------>                                            
                                                           
                                               
                                                    
                                                    <div class=" row" id="u_response_display_<?php echo $r->id;?>" style="display:none">
                                                        <div class="col-sm-1 text-center">
                                                             <img src="https://www.test.bluepages.co.ke/public/img/admin/admin.jpg"   alt="user image" class="img-radius text-center" width="40" height="40">
                                                        </div>
                                                    <div class="col-sm-11">
                                                            <h6>
                                                            <?php
                                                             echo $u->full_name;?> 
                                                            <small class="m-l-10 text-c-blue f-w-700"><?php echo date('d M Y');?></small>
                                                            </h6>
                                                            <p class="text-muted m-b-0" id="user_response_<?php echo $r->id;?>"></p>
                                                        </div>
                                                        
                                                    </div>
                                                    <hr>


                                                    <?php 
                                            //    $fpath = image_path('avatar-blank.jpg');
                                                
                                                foreach($posted_response as $rep){
                                                    $ru = $this->users_m->find($r->created_by);
                                                    
                                                   
                                                    
                                                    
                                                    ?>
                                                   
                                                    
                                                    <div class=" row">
                                                        <div class="col-sm-1 text-center">
                                                             <img src="https://www.test.bluepages.co.ke/public/img/admin/admin.jpg"   alt="user image" class="img-radius text-center" width="40" height="40">
                                                        </div>
                                                    <div class="col-sm-11">
                                                            <h6>
                                                            <?php echo $ru->full_name;?> 
                                                            <small class="m-l-10 text-c-blue f-w-700"><?php echo date('d M Y',$rep->created_on);?></small>
                                                            </h6>
                                                            <span class="text-muted m-b-0 font-15"><?php echo $rep->comment?></span>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                
                                                   
                                                <?php } ?>
                                                           
                                                     
                                            </div>
                                             
                                             
             <script>
            $(document).ready(function ()
            {
                        $('#response_row_<?php echo $r->id;?>').hide();

                    //****** OPEN COMMENT FORM ************///
                    
                        $("#resp_<?php echo $r->id;?>").click(function () {
                            
                           $('#response_row_<?php echo $r->id;?>').toggle('fast');
                            
                        });
                        
                        
                    //****** OPEN REPLIES ARRAY ************///
                    
                        $("#view_replies_<?php echo $r->id;?>").click(function () {
                            
                           $('#response_replies_<?php echo $r->id; ?>').toggle('fast');
                           $('#response_row_<?php echo $r->id;?>').show();
                           $('#response_row_<?php echo $r->id;?>').toggle();
                           
                        });
                    
                  //******   POST THE COMMENT ON REPLIES ******//
                  
                    $("#submt_<?php echo $r->id;?>").click(function () {    
                                                            
                            var id = <?php echo $r->id;?>;
                            var comment = $('#comment_<?php echo $r->id;?>').val();
                            
                            var dataString = '&comment='+ comment + '&id='+ id;
                            
                            if(comment==''||id=='')
                            {
                               alert("Please Fill All Fields");
                            }
                            else
                            { 
                        //alert(comment);
                                // AJAX Code To Submit Form.
                                $.ajax({
                                type: "POST",
                                url: "<?php echo base_url('user/forum/post_reply');?>",
                                data: dataString,
                                cache: false,
                                success: function(result){
                                
                            
                                    document.getElementById("user_response_<?php echo $r->id;?>").innerHTML += "<span>"+comment+"</span>"; 
              
                                    $('#u_response_display_<?php echo $r->id;?>').show('fast');
                                    
                                     $('#hide_reply_form_<?php echo $r->id;?>').hide('fast');
                                     $('#response_replies_<?php echo $r->id; ?>').show('fast');

                                    }
                                }); 
                                    
                            }
                                                            
                                                        
                        });
            })
                        

                </script>

    </div>
                                    
                                



                                <?php } ?>
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
                    
                    })

            </script>









<?php

load_footer();


?>