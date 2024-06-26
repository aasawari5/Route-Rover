<html>
    <head>
        <script src="http://code.jquery.com/jquery-1.9.0.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.2/mqttws31.min.js" type="text/javascript"></script>
        <script src="scania_details.js" type="text/javascript"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3&&key=AIzaSyDjWaybaCZ_jcenMg0wSts00ceN-Sm-Neo&callback=myMap" type="text/javascript"></script>
        <style type="text/css">
            #map{
                width: 100%;
                height: 900px;
                border: 0px;
                padding: 0px;
            }
            .wrapper {
         margin-left: auto;
         margin-right: auto;
         width: 60%;
         padding-right: 10px;
         padding-left: 10px;
     }
     
     input {
         width : 150px;
         margin: 0;
         -webkit-box-sizing: border-box;
         -moz-box-sizing: border-box;
         box-sizing: border-box;
     }
     input[type=text] {
       width:100%;
         padding: 12px 12px;
             height: 10px;
     
         margin: 8px 0;
     }
     input[type=password] {
       width:100%;
         padding: 12px 12px;
             height: 10px;
     
         margin: 4px 2px;
     }
     input[type=button] {
         background-color: gray;
         border: none;
         color: black;
         
         text-decoration: none;
         font-weight: bold;
             height: 20px;
     
         margin: 4px 2px;
         cursor: pointer;
     }
     input[type=text]:focus {
         background-color: lightblue;
     }
     input[type=button]:hover {
         background-color: #686868;
     }
     
     #Main_heading{
          text-align: center;
     }
     
     #messages {
         margin-top: 12px;
         margin-bottom: 12px;
         padding: 12px;
         width:100%;
         display: inline-block;
         border:1px solid black;
         max-height: 250px;
         min-height: 250px;
         overflow: scroll;
     }
     #messages span {
         overflow-y: scroll;
         overflow: scroll;
     }
     
        </style>
    </head>
        <body style= "font-family: 'Candara', cursive;">
        <?php include 'navbar.php';?><br><br>
            <section class="mappageList">
                <div>
                    <div class="google-mapsPage">
                        <div class="map-responsive">
                           <!-- Define the div area on which the map will be loaded. -->
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
            </section>
            <script type="text/javascript">
            // Set initial latitude and longitude for map and starting point for marker.
            var lat_initial  = 28.631280;
            var long_initial = 77.370926;
            // Load initial map with initial latitude and longitude on page load.
            initMap();
            function initMap()
            {
                map = new google.maps.Map(document.getElementById("map"), {
                    center: new google.maps.LatLng(lat_initial,long_initial),
                    zoom: 15,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    mapTypeControl: true,
                    mapTypeControlOptions:
                    {
                        style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
                    },
                    scrollwheel: true,
                    navigationControl: true,
                    scaleControl: false,
                    disableDoubleClickZoom: true,
                    zoomControl: true,
                    zoomControlOptions: {
                        position: google.maps.ControlPosition.RIGHT_TOP,
                    },
                });
                        
            }
            var INTERVAL = 5000;
            var markers_array = [];
            var lat_array=[28.631280,28.631280,28.631299,28.631308,28.631301,28.631359,28.631374,28.631415,28.631485,28.631493,28.631472,28.631450,28.631460,28.631568,28.631669,28.631815,28.631933,28.631935,28.631945,28.631935,28.631945,28.631942,28.631942,28.632133,28.632416,28.632551,28.632585,28.632559,28.632566,28.632579,28.632559,28.632539,28.632546,28.632532,28.632433,28.632460,28.632433,28.632433,28.632446,28.632407,28.632380,28.632393,28.632393,28.632373,28.632367,28.632367,28.632347,28.632367,28.632435,28.632505,28.632667,28.632786,28.632895,28.633056,28.633156,28.633459,28.633644,28.633801,28.633896,28.633977,28.634174,28.634362,28.634529,28.634722,28.635002,28.635198,28.635437,28.635650,28.635876,28.636085,28.636269,28.636449,28.636641,28.636901,28.637118,28.637328,28.637411,28.637627,28.637796,28.638078];
            var long_array=[77.370926,77.370926,77.370562,77.370083,77.369120,77.366837,77.365845,77.364991,77.365071,77.365365,77.365662,77.366174,77.366536,77.366697,77.366971,77.367113,77.367041,77.366676,77.366386,77.365895,77.365407,77.364790,77.364468,77.363984,77.363978,77.363989,77.364498,77.365252,77.366203,77.367123,77.368209,77.369243,77.370170,77.370668,77.371159,77.371777,77.372750,77.373399,77.374017,77.374313,77.375045,77.376033,77.376983,77.377708,77.378794,77.379759,77.380551,77.380672,77.381431,77.381967,77.382970,77.383553,77.383985,77.384547,77.384888,77.385920,77.386471,77.387049,77.387659,77.387971,77.388595,77.389172,77.389720,77.390377,77.391183,77.391840,77.392598,77.393241,77.393909,77.394542,77.395071,77.395734,77.396277,77.397235,77.397931,77.398499,77.398838,77.399514,77.400048,77.400912];
          
            getMarkers();
            
            function getMarkers() {
                {
                for(j=1; j<markers_array.length; j++){
                    lat_initial  = lat_array[j];
                    long_initial = long_array[j];}
                    for(i=0; i<markers_array.length; i++){
                        markers_array[i].setMap(null);
                    }
                     
                    addMarkers(lat_initial, long_initial);
                    
                    window.setTimeout(getMarkers,INTERVAL);
                }
            
                
            
            }
           
            function addMarkers(lats, longs) {
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(lats, longs),
                    map:map
                });
                markers_array.push(marker);
            }
        
            
        </script>
        <div class="wrapper">
            <input type="button" onclick="startConnect()"  value="Connect">
            <input type="button"  onclick="startDisconnect()" value="Disconnect"> <br>
         </form>
         <div id="messages"></div>
      </div>
            
        </body>
</html>