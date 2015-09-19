  <!-- Footer -->
    <div class="footer">
        Social Network Template &copy; Copyright Notice
    </div>

    <!-- // Footer -->
<<<<<<< HEAD


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
=======
>>>>>>> origin/master

    
    
<<<<<<< HEAD
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

=======
  
>>>>>>> origin/master
</body>
</html>
