    <!-- Footer -->
<!--    <div class="footerk">
        Social Network Template &copy; Copyright Notice
    </div>-->

    <!-- // Footer -->
    
<!-- Vendor Scripts Bundle --><script src="/kathanayake/dist/js/vendor.min.js"></script>

    <!-- App Scripts Bundle -->
    <script src="/kathanayake/dist/js/scripts.min.js"></script>
         <script src="https://maps.googleapis.com/maps/api/js?key=&v=3.0&sensor=true&language=ee"></script>

      <script>
                
                $(document).ready(function(){
                    
                    //22DB52
                    
                    $('.feeds .timeline-block .panel').hover(function(){
                        $(this).css('border','2px solid #3DC1ED')
                    },function(){
                        $(this).removeAttr('style')
                    });
                    
                })
                
            </script>
            
            
                <script>
         
         $(document).ready(function(){
             
          
         
         var gmarkers1 = [];
var markers1 = [];
var infowindow = new google.maps.InfoWindow({
    content: ''
});

//health
//education 
//agriculture

// Our markers
markers1 = [
    ['0', '   <div class="panel panel-default"><div class="panel-heading" style="background:  #869694 !important"><div class="media"><a href="" class="pull-left"><img src="/kathanayake/dist/images/people/50/guy-2.jpg" class="media-object"></a><div class="media-body"><div class="rating text-left pull-right"><span>   <i  style="cursor: pointer" class="fa fa-thumbs-up"></i> <span style="font-size: 12px;"> 20 </span> </span><span>  <i style="cursor: pointer" class="fa fa-thumbs-down"></i><span style="font-size: 12px;"> 7 </span> </span><!--                                <span class="star"></span><span class="star "></span><span class="star "></span><span class="star "></span><span class="star "></span>--></div><a href="">Jonathan</a><span>on 15th January, 2014</span></div></div></div><div class="panel-body"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad blanditiis perspiciatis praesentium quaerat repudiandae soluta? Cum doloribus esse et eum facilis impedit officiis omnis optio, placeat, quia quo reprehenderit sunt velit? Asperiores cumque deserunt eveniet hic reprehenderit sit, ut voluptatum?</p></div><div class="view-all-comments"><a href="#"><i class="fa fa-comments-o"></i> View all</a> 10 comments</div><ul class="comments"><li><div class="media"><a href="" class="pull-left"><img src="/kathanayake/dist/images/people/50/woman-5.jpg" class="media-object"></a><div class="media-body"><a href="" class="comment-author">Mary</a><span>Thanks Bill</span><div class="comment-date">2 days</div></div></div></li><li><div class="media"><a href="" class="pull-left"><img src="/kathanayake/dist/images/people/50/guy-5.jpg" class="media-object"></a><div class="media-body"><a href="" class="comment-author">Bill D.</a><span>What time did it finish?</span><div class="comment-date">14 min</div></div></div></li><li class="comment-form"><div class="input-group"><input type="text" class="form-control" /><span class="input-group-addon"><a href=""><i class="fa fa-photo"></i></a></span></div></li></ul></div>', 6.952204, 79.922993, 'health'],
    ['1', 'Title', 7.087428, 80.014373, 'health'],
    
    ['2', 'Title', 6.838686, 79.965009, 'education'],
    ['3', 'Title', 6.905897, 79.969466, 'education'],
    ['4', 'Title', 6.952204, 79.922993, 'education'],
    ['5', 'Title', 5.954852, 80.553409, 'education'],
    
    ['6', 'Title', 8.345512, 80.393069, 'agriculture'],
    ['7', 'Title', 6.972908, 79.915998, 'agriculture'],
    
];

/**
 * Function to init map
 */

function initialize() {
    var center = new google.maps.LatLng( 6.950480, 80.004683);
    var mapOptions = {
        zoom: 7,
        center: center,
        mapTypeId: google.maps.MapTypeId.TERRAIN
    };

    map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
    for (i = 0; i < markers1.length; i++) {
        addMarker(markers1[i]);
    }
}

/**
 * Function to add marker to map
 */

function addMarker(marker) {
    var category = marker[4];
    var title = marker[1];
    var pos = new google.maps.LatLng(marker[2], marker[3]);
    var content = marker[1];

    marker1 = new google.maps.Marker({
        title: title,
        position: pos,
        category: category,
        map: map
    });

    gmarkers1.push(marker1);

    // Marker click listener
    google.maps.event.addListener(marker1, 'click', (function (marker1, content) {
        return function () {
            console.log('Gmarker 1 gets pushed');
            infowindow.setContent(content);
            infowindow.open(map, marker1);
            map.panTo(this.getPosition());
            map.setZoom(15);
        }
    })(marker1, content));
}

/**
 * Function to filter markers by category
 */

filterMarkers = function (category) {
    for (i = 0; i < markers1.length; i++) {
        marker = gmarkers1[i];
        // If is same category or category not picked
        if (marker.category == category || category.length === 0) {
            marker.setVisible(true);
        }
        // Categories don't match 
        else {
            marker.setVisible(false);
        }
    }
}

// Init map
initialize();

   
             
         })
         
     </script>
</body>
</html>