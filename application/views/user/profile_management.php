 <body class="">
    
    
    <?php
    
   $this->load->view('template/nav');
    
    
    ?>









<div class="container">
    
    <div class="col-md-4">
        
         <div class="timeline-block">
                <div class="panel panel-default event">
                    <div class="panel-heading title">
                       PM Rankings (latest) 
                    </div>
                    <ul class="list-group">
                        
                         <li class="list-group-item"><i class="fa fa-calendar-o"></i> <a href="<?php echo base_url('user/profile') ?>"> All Post  </a></li>

                        
                        <li class="list-group-item"><i class="fa fa-calendar-o"></i> <a href="<?php echo base_url('user/profile?page=t') ?>"> Trending Post  </a></li>

                        <li class="list-group-item"><i class="fa fa-globe"></i> <a href="<?php echo base_url('user/profile?page=q') ?>"> Questions  </a></li>
                        <!--<li class="list-group-item"><i class="fa fa-clock-o"></i> <a href="?page=t"> Questions  </a></li>-->
                        <li class="list-group-item"><i class="fa fa-users"></i>   <a href="<?php echo base_url('user/profile?page=a') ?>">Answered</a>
                        </li>
                    </ul>
                 
                    <div class="clearfix"></div>
                </div>
            </div>     
        
        
        
        
        
    </div>

    <div class="col-md-8"><h4 style="text-align: center">Profile Manager</h4>
        
        <hr/>
        
        
        <?php
        
        $page_tab = $this->input->get('page');
        
       // if($page_tab){
            
            switch ($page_tab){
                
                case 'p' :
                    $this->load->view('profile/tabs/post');
                    break;
                
                case 't' : 
                    $this->load->view('user/profile/tabs/trending');
                    break;
                
                case 'q' : 
                    $this->load->view('user/profile/tabs/questions');
                    break;
                
                case 'a' : 
                    $this->load->view('user/profile/tabs/answered');
                    break;
                
                default :
                    $this->load->view('user/profile/tabs/post');
                
            }
            
            
            
            
            
            
        //}
        
        
        
        
        ?>
        
        
        
       
    </div>
    
</div>