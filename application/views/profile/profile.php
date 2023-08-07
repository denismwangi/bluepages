<?php


$this->load->helper('assets');

load_mixed_top();



//load_header();
$this->load->model('forum_m', true);
 $this->load->model('users_m', true);
 $this->load->model('counties_m', true);
  $this->load->model('countries_m');
  $this->load->model('subcounties_m');




 ?>
 <body   style="background-color:lightgrey; background-image: url(); -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;; background-repeat: no-repeat; background-attachment: fixed;" >
        <div id="pcoded" class="pcoded iscollapsed" nav-type="st2" theme-layout="vertical" vertical-placement="left" vertical-layout="wide" pcoded-device-type="desktop" vertical-nav-type="expanded" vertical-effect="shrink" vnavigation-view="view1" sidebar-img="false" sidebar-img-type="img1" layout-type="light">
            <div class="pcoded-overlay-box"></div>
            <div class="pcoded-container navbar-wrapper">
      <div class="containter-fluid">
      
       <section id="highlight">
          <div class="container-fluid">
              <div class="row">
        
        <div id="left" class="left col-lg-3 col-md-8 "  ><br>
      
        
           <a class="btn btn-sm btn-danger text-center" style="font-size:18px;" data-toggle="elementscroll" onclick="goBack();" href=""><i class="fa fa-caret-left"></i> BACK TO PREVIOUS</b></a>             
                    </div>
        
               
        
        
        
                  <div id="left" class="left col-lg-9 col-md-8 text-right">
          
          
                      <h3 style="color:white;font-size:24px;">Welcome to Blue Pages - Gets you to the doorsteps of your clients  </h3>
                         <p style="font-size:25px; color:white;">Fast, Reliable  and  Accurate </p>
                    </div>
                    
          
          
          
          
                
                </div>
            </div>
      
        </section>
      
      
      
      <div class="row">
      
        <?php


load_sidebar();

//print_r($user); die;

        ?>
        
        
        
        
        
        
        
        <div class="col-lg-8">

           <div  class="row" style=" " >
                            <div class="col-lg-1"style=" "></div>
                            <div class="col-lg-10">
                              
                                <div style= "height:auto; background-color:#0760f0; border-color: blue;"class="card gallery-desc">
                                        <div  class="row" style=" " >
                                    <div class="col-lg-3"style=" ">
                                         <div class="card  mb-8" style="background-color:#0760f0;width:190;margin-top:10;height:auto ">
                                          <br><br><br>
                                          <div style= "border-color: white;"class="card gallery-desc">
                                            <div Style="background-color:#0760f0" >
                                            
                                                <div Style="margin:10">
                                                 
                                                  <?php
                                if(!empty($user->passport)){

                                    ?>


                                   <img src="<?php echo base_url().'uploads/profile/'.$user->passport;?>" alt="user image" width="155" height="150">

                                    <?php
                                }else{

                                    ?>
                                    <img src="<?php echo base_url().'public/img/avatar.png';?>" alt="user image" width="155" height="150">
                                    <?php
                                }

                    ?>
                                              </div>
                                              
                                                          
                                            </div>
                                            
                                          </div>
                                      </div>
                                    
                                    
                                    </div>
                                    
                                    
                                    
                                    
                                    <div class="col-lg-9"style=" ">
                                    
                                    <div class="card bg-light mb-8" style="max-width: ;background-color:white;height:auto;margin:10">
                                      
                                      <div class="card-body">
                                          <p class="card-text"Style="color:black;margin-left:5;font-size:19"><b>Category</b> : <b><?php

                                          if($group_id == 3 ){
                                             echo $user->name; 

                                          }elseif($group_id == 4 || $group_id == 1){
                                            echo $user->full_name; 


                                        }
?>
                                          
                                             

                                           </b></p>
                                          <?php

                                          $c = $this->counties_m->find($user->county);
                                          $cu = $this->subcounties_m->find($user->country);
               
                                          ?>
                                      <p class="card-text"Style="color:black;margin-left:5;font-size:17"><b>Category: </b>Access Controll</p> 
                                      <p class="card-text"Style="color:black;margin-left:5;font-size:17"><b>County:</b> <?php echo $c->name; ?></p>
                                      <p class="card-text"Style="color:black;margin-left:5;font-size:17"><b Style="margin-left:20;">Sub-County: </b><?php echo $cu->name; ?></p>
                                      <p class="card-text"Style="color:black;margin-left:5;font-size:17"><b>Postal Address: </b><?php echo $user->address;?></p>
                                      
                                      <p class="card-text"Style="color:black;margin-left:5;font-size:17"><b>Telephone Number:</b> <?php echo $user->phone; ?></p>
                                      <p class="card-text"Style="color:black;margin-left:5;font-size:17"><b>Email:</b><?php echo $user->email; ?></p>
                                      <div class="card-header" Style="text-align:center;font-size:17">
                                          <a href="<?php echo base_url().'user/contacts/chat';?>" class="btn btn-primary">POSTA CHAT</a> 
                                          <a href="#" class="btn btn-primary">SCHEDULE FACE TO FACE LIVE CHAT</a>
                                      </div>
                                      
                                      </div>
                                    </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    </div>
                                
                                    
            
            
            
                                
                                     
                                </div>
                                  

                            
                                  
                            </div>
                            
                            <div class="col-lg-1"></div>
                            
                                      
                                    
                            </div><hr>
         
        
        
        
        
        
        
        <div class="row">
           
        
          <div class="col-lg-12 col-md-6 default-grid-item">
            <div style= "border-color: blue;"class="card gallery-desc">
              <div class="overflow-auto p-3 bg-light"  style="max-width: 100%; max-height: 700;">
              
              
                  <div  class="row" style=" " >
                    <div class="col-lg-6"style=" "></div>
                    <div class="col-lg-6">
                            <nav class="navbar navbar-light bg-light">
                          <form class="form-inline">
                          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
                          </form>
                        </nav>
                                                                      
                        
                          

                    
                          
                    </div>
                    
                    
                    
                          
                        
                </div>
              
                  

              
                
              
                <div  class="row" style=" " >
                            <div class="col-lg-1"style=" "></div>
                            <div class="col-lg-10">
                              
                                <div style= "height:auto; background-color:#0760f0; border-color: blue;"class="card gallery-desc">
                                        <div  class="row" style=" " >
                                    <div class="col-lg-3"style=" ">
                                         <div class="card  mb-8" style="background-color:#0760f0;width:190;margin-top:10;height:auto;margin-left:20 ">
                                          <br><br><br>
                                          <div style= "border-color: white;"class="card gallery-desc">
                                            <div Style="background-color:#0760f0;" >
                                            
                                                <div Style="margin:10">
                                                 <img  src="<?php echo base_url().'public/img/access4.png';?>" width="155" height="150" alt="icons2/uploads" />
                                              </div>
                                              
                                                          
                                            </div>
                                            
                                          </div>
                                      </div>
                                    
                                    
                                    </div>
                                    
                                    
                                    
                                    
                                    <div class="col-lg-9"style=" ">
                                    
                                    <div class="card bg-light mb-8" style="max-width: ;background-color:white;height:auto;margin:10">
                                      
                                      <div class="card-body">
                                          <p class="card-text"Style="color:black;margin-left:5;font-size:19"><b>Access Kenya Home Security</b></p>
                                      <p class="card-text"Style="color:black;margin-left:5;font-size:17"><b>Category: </b>Access Controll</p> 
                                      <p class="card-text"Style="color:black;margin-left:5;font-size:17"><b>County:</b> Nairobi          <b Style="margin-left:20;">Sub-County:</b> Westlands</p>
                                      <p class="card-text"Style="color:black;margin-left:5;font-size:17"><b>Postal Address: </b>P. O. Box 19234 – 00502, Mombasa</p>
                                      <p class="card-text"Style="color:black;margin-left:5;font-size:17"><b>Physical Address:</b> Rehema House, Westlands</p>
                                      <p class="card-text"Style="color:black;margin-left:5;font-size:17"><b>Telephone Number:</b> 0703670134</p>
                                      <p class="card-text"Style="color:black;margin-left:5;font-size:17"><b>Email:</b> homeaccess@posta.co.ke</p>
                                      <div class="card-header" Style="text-align:center;font-size:17">
                                          <a href="#" class="btn btn-primary">VISIT WEBSITE</a> 
                                          <a href="<?php echo base_url().'user/contacts/chat';?>" class="btn btn-primary">POSTA CHAT</a>
                                      </div>
                                      
                                      </div>
                                    </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    </div>
                                
                                    
            
            
            
                                
                                     
                                </div>
                                  

                            
                                  
                            </div>
                            
                            <div class="col-lg-1"></div>
                            
                                      
                                    
                            </div><hr>
                            
                            
                            <div  class="row" style=" " >
                            <div class="col-lg-1"style=" "></div>
                            <div class="col-lg-10">
                              
                                <div style= "height:auto; background-color:#0760f0; border-color: blue;"class="card gallery-desc">
                                        <div  class="row" style=" " >
                                    <div class="col-lg-3"style=" ">
                                         <div class="card  mb-8" style="background-color:#0760f0;width:190;margin-top:10;height:auto;margin-left:20 ">
                                          <br><br><br>
                                          <div style= "border-color: white;"class="card gallery-desc">
                                            <div Style="background-color:#0760f0" >
                                            
                                                <div Style="margin:10">
                                                 <img  src="<?php echo base_url().'public/img/access2.jpg';?>" width="155" height="150" alt="icons2/uploads" />
                                              </div>
                                              
                                                          
                                            </div>
                                            
                                          </div>
                                      </div>
                                    
                                    
                                    </div>
                                    
                                    
                                    
                                    
                                    <div class="col-lg-9"style=" ">
                                    
                                    <div class="card bg-light mb-8" style="max-width: ;background-color:white;height:auto;margin:10">
                                      
                                      <div class="card-body">
                                          <p class="card-text"Style="color:black;margin-left:5;font-size:19"><b>ACS Kenya</b></p>
                                      <p class="card-text"Style="color:black;margin-left:5;font-size:17"><b>Category: </b>Access Control</p> 
                                      <p class="card-text"Style="color:black;margin-left:5;font-size:17"><b>County:</b> Mombasa          <b Style="margin-left:20;">Sub-County:</b> Changamwe</p>
                                      <p class="card-text"Style="color:black;margin-left:5;font-size:17"><b>Postal Address: </b>P. O. Box 51514 – 00502, Mombasa</p>
                                      <p class="card-text"Style="color:black;margin-left:5;font-size:17"><b>Physical Address:</b>  Kings House, Mombasa</p>
                                      <p class="card-text"Style="color:black;margin-left:5;font-size:17"><b>Telephone Number:</b> 0717222186</p>
                                      <p class="card-text"Style="color:black;margin-left:5;font-size:17"><b>Email:</b> mysecurity@posta.co.ke</p>
                                      <div class="card-header" Style="text-align:center;font-size:17">
                                          <a href="#" class="btn btn-primary">VISIT WEBSITE</a> 
                                          <a href="<?php echo base_url().'user/contacts/chat';?>" class="btn btn-primary">POSTA CHAT</a>
                                      </div>
                                      
                                      </div>
                                    </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    </div>
                                
                                    
            
            
            
                                
                                     
                                </div>
                                  

                            
                                  
                            </div>
                            
                            <div class="col-lg-1"></div>
                            
                                      
                                    
                            </div>
              
              
              
              
              
              
                   
              
              
              
              
              </div>
            </div>
          </div>
          </div>
        
        
        
        
        </div>


        <?php


load_right_bar();

        ?>
        
        
        
      
      
      
      
      
      </div>
      
      
      
      
      
      
      
      
      </div>
      
      
      
      
      
      
      
      
      </div>
     </div>

<?php

load_footer();


?>