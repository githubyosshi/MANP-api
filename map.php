<?php

echo
file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?address=1600+Amphitheatre+Parkway,+Mountain+View,+CA&key=AIzaSyDg17cdXyTvjl2aLn4vADfWgtUAzEWDR4I");

?>

<html>
  <head>
    <title>Geocoding An Address</title>
  </head>
  <body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script type="text/javascript">

    var position = {};
    $.ajax({
      url:"https://maps.googleapis.com/maps/api/geocode/json?address=1600+Amphitheatre+Parkway,+Mountain+View,+CA&key=AIzaSyDg17cdXyTvjl2aLn4vADfWgtUAzEWDR4I",
      type: "GET",
      success: function(data){
        // console.log(data);
        $.each(data['results'][0],["address_components"], function(key, value){
          // alert(key);
          if(value["types"][0] == "country"){
            alert(value["long_name"]);
          }
        })
      }
    })
  </script>
  </body>
</html>
