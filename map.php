<!DOCTYPE html>
<html>
  <head>
    <title>Geolocation</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 6
        });
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

              // alert("緯度：" + pos["lat"] + "軽度：" + pos["lng"]);
            infoWindow.setPosition(pos);
            // infoWindow.setContent('Location found.');
            infoWindow.setContent("緯度：" + pos["lat"] + "軽度：" + pos["lng"]);
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpcF5uFMC5EOCaxEx4Qf1F8wVKEJ7eMG4&callback=initMap">
    </script>
  </body>
</html>
<!-- <!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="/maps/documentation/javascript/demos/demos.css">
    <style>
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }
    #map {
      height: 100%;
    }

    </style>
  </head>
  <body>
    <div id="map"></div> -->
    <!-- <script>
    function initMap() {
      var london = {lat: 51.50, lng: -0.11};
      var birmngham = {lat: 52.48, lng: -1.89};
    }

      var map = new google.maps.Map(document.getElementById('map'), {
        center: london,
        scrollwheel: false,
        zoom: 7
        });


      var directionsDisplay = new google.maps.DirectionsRenderer({map: map});

      var request = {
        destination: birmingham,
        origin: london,
        travelMode: 'DRIVING'
      };

      var directionsService = new google.maps.DirectionsService();
      directionsService.route(request, function(response, status){
        if (status == 'OK') {
          directionDisplay.setDirections(response);
        }
      });
    }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpcF5uFMC5EOCaxEx4Qf1F8wVKEJ7eMG4&callback=initMap" async defer>
    </script> -->
  <!-- </body>
</html> -->