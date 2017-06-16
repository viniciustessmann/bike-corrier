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

		<div class="suport">
			<form>
				<input type="text" placeholder="Digite o endereço para entrega ..." />
				<input type="submit" value="Enviar" />
			</form>
		</div>

		<div id="map">
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
          	center: {lat: -31.7747258, lng: -52.4140721},
          	zoom: 10
        });
      }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFX4qcEShWOAxoBECP4OEtcgfhYfGKHMI&callback=initMap"></script>
