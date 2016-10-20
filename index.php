<!DOCTYPE html>
<html>
<head>
	<title>Motorcycle Scenic Routes</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvdVX_1XSspY2xXN-io92hxZLDj0RTTZg&libraries=drawing,places">
    </script>

</head>
<body>
<div id="panel">
	<h3>The Best Motorcycle Routes</h3>
</div>
<div id="map"></div>

<script>
	var map;
	var mapCanvas;
	var mapDescription;
	var drawingManager;
	function initMap(){
		//Constructor creates a new map (only center and zoom are required)
		mapCanvas = document.getElementById('map');
		mapDescription = {
			center: {lat: 29.7604, lng: -95.3698},
			zoom: 10
		};
		map = new google.maps.Map(mapCanvas, mapDescription);
		
		// Enables the polyline drawing control. Click on the map to start drawing a
		// polyline. Each click will add a new vertice. Double-click to stop drawing.
		drawingManager = new google.maps.drawing.DrawingManager({
		  drawingMode: google.maps.drawing.OverlayType.POLYLINE,
		  drawingControl: true,
		  drawingControlOptions: {
		    position: google.maps.ControlPosition.BOTTOM_CENTER,
		    drawingModes: [
		      google.maps.drawing.OverlayType.POLYLINE
		    ]
		  },
		  polylineOptions: {
		    strokeColor: '#696969',
		    strokeWeight: 2
		  },
		  map: map
		});

		drawingManager.addListener('polylinecomplete',function(polyLineObject){
			//Retreive lat long values from the polyLineObject
			var path = polyLineObject.getPath();
			
		})

	}

	$(window).load(initMap)
</script>


</body>
</html>