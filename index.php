<!DOCTYPE html>
<html>
	<head>
		<title>220 Bike entregas</title>

		<link rel="stylesheet" href="resources/css/style.css">

	</head>
	<body>
		<?php
			include __DIR__ . '/vendor/autoload.php';
			new Tessmann\Core\Kernel();
		?>

		<header>
		</header>

		<div id="map">
			HERE THE MAP
		</div>
	</body>
</html>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		//alert('test');
	});


	var map;
      	function initMap() {
        	map = new google.maps.Map(document.getElementById('map'), {
          	center: {lat: -34.397, lng: 150.644},
          	zoom: 8
        });
      }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFX4qcEShWOAxoBECP4OEtcgfhYfGKHMI&callback=initMap"></script>
