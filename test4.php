<!DOCTYPE html>
<html>

<body>

<div id="map" style="width:100%;height:500px"></div>

<script>
function myMap() {

  var b =  new google.maps.LatLng(-6.564341, 144.052819);

  var myCenter = new google.maps.LatLng(-5.833142, 106.503365);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 5};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
    
   
  marker.setMap(map);

}
</script>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSllmlvjIXEZ1q8o_-VnWcNHmm-YD6WYI&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
