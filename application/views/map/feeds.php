 <body class="">
    
    
    <?php
    
   $this->load->view('template/nav');
    
    
    ?>




     <style>
         #map-canvas {
    width: 747px;
    height: 500px;
}
     </style>



<div class="container">
    
    <div class="col-md-4">
        
         <div class="timeline-block">
                <div class="panel panel-default event">
                    <div class="panel-heading title">
                       Filter by Category
                    </div>


                        <div class="form-group">
                                <!--<label class="col-sm-3 control-label">Select</label>-->
                                <div class="col-sm-9">

                                    
                                    <ul class="list-group" style="margin-top: 30px">
                                        <!--<li class="list-group-item">-->
                                            
                                          <p>       <label>
    <input type="radio" name="optionsRadios" id="optionsRadios3"  onchange="filterMarkers(this.value);"  value="" >
    All Data
                                              </label></p>
                                       
                                            
              <p>                                                                    <label>
    <input type="radio" name="optionsRadios" id="optionsRadios3" onchange="filterMarkers(this.value);" value="health" >
   Health
  </label></p>
            
  <p>   <label>
    <input type="radio" name="optionsRadios" id="optionsRadios3" onchange="filterMarkers(this.value);"  value="education" >
   Education
  </label>
             </p>                               
                                            
             <p>   <label> 
            
             <input type="radio" name="optionsRadios" id="optionsRadios3" onchange="filterMarkers(this.value);"  value="agriculture" >
  Agriculture  
  </label>
             </p>                                  
                                            
<!--                                            <span value="" onclick="filterMarkers(this.value);"> All Data </span> </li>
                                        <li class="list-group-item"> <span value="health" onclick="filterMarkers(this.value);"> Health </span></a></li>
                                        <li class="list-group-item"> <span value="education" onclick="filterMarkers(this.value);">Education </span></li>
                                        <li class="list-group-item"> <span value="agriculture" onclick="filterMarkers(this.value);">Agriculture </span></li>
                                    </ul>-->
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                </div>
                            </div>
                 
                    <div class="clearfix"></div>
                </div>
            </div>     
        
        
        
        
        
    </div>

    <div class="col-md-8">
        
        
        <div id="map-canvas"></div>

       
        
        
       
    </div>
    
</div>
     
 