<!DOCTYPE html>
<html>
  <head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      .wrap { max-width: 75em; min-height: 40em; height:100%; width:100%; margin: 0 auto; padding-top: 2.5%;}
      #map-canvas { height: 90%; }
    </style>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true">
    </script>
   
	
    <script type="text/javascript">
      var map;
      var centerPos = new google.maps.LatLng(-23.5637544,-46.65380859999999);
      var zoomLevel = 12;
      function initialize() {
        var mapOptions = {
          center: centerPos,
          zoom: zoomLevel
        };
        map = new google.maps.Map( document.getElementById("map-canvas"), mapOptions );
		
				var locations = [
		  ['First Shoppe', -23.5637544,-46.65380859999991],
		  ['Second Shoppe', -23.5637544,-46.65380859999992],
		  ['Third Shoppe', -23.5637544,-46.65380859999993],
		  ['Fourth Shoppe', -23.5637544,-46.65380859999994],
		  ['Fifth Shoppe', -23.5637544,-46.65380859999995],
		  ['Sixth Shoppe', -23.5637544,-46.65380859999996],
		  ['Seventh Shoppe', -23.5637544,-46.65380859999997]
		];

		for (i = 0; i < locations.length; i++) {  
		  marker = new google.maps.Marker({
		position: new google.maps.LatLng(locations[i][1], locations[i][2]),
			title: locations[i][0],
			map: map
		  });
		}
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
  <body>
  <div class="wrap">
    <div id="map-canvas"></div>
  </div>
  </body>
</html>