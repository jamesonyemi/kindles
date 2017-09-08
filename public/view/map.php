<?php include 'layout/header.php'; ?>
	   
			<div id="map"></div>
                <script>

                  if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (p) {
                    var LatLng = new google.maps.LatLng(p.coords.latitude, p.coords.longitude);
                    var mapOptions = {
                        center: LatLng,
                        zoom: 17,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };

                    var map = new google.maps.G.Map(document.getElementById("map"), mapOptions);
                    var image ='';
                    var marker = new google.maps.Marker({
                        position: LatLng,
                        map: map,
                        draggable: true,
                        animation: google.maps.Animation.DROP,
                        icon:image,
                        title: "CURRENT LOCATION CORDINATES:" + '\n'  +  "Latitude  :   "  + '   '
                                     + p.coords.latitude    +  '\n' +    "Longitude :  " 
                                     + p.coords.longitude
                    });

                            marker.addListener('click', toggleBounce);
                            
                            function toggleBounce() {
                      if (marker.getAnimation() !== null) {
                        marker.setAnimation(null);
                      } else {
                        marker.setAnimation(google.maps.Animation.BOUNCE);
                      }
                    }

                    google.maps.event.addListener(marker, "click", function (e) {
                        var infoWindow = new google.maps.InfoWindow();
                        infoWindow.setContent(marker.title);
                        infoWindow.open(map, marker);
                    });
                });
            } else {
                alert('Geo Location feature is not supported in this browser.');
            }</script>

<?php include 'layout/footer.php'; ?>