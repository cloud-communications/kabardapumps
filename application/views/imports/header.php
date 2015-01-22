<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Kabarda</title>

		<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>
		

		<link rel="stylesheet" href="/assets/owl-carousel/owl.carousel.css"> 
		<link rel="stylesheet" href="/assets/owl-carousel/owl.theme.css">
		<link href="/assets/css/kabarda.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<?php if($this->router->fetch_class() == "contact") { ?>
		
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	    <script type="text/javascript">
	      function initialize() {
	      	var myLatlng = new google.maps.LatLng(51.218874,4.421677);
	        var mapOptions = {
	          center: { lat: 51.218874, lng: 4.421677},
	          zoom: 15,
	          featureType: "road.local"
	          
	        };
	        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
	        var contentString = 
	          '<h2>Location</h1>'+
		      '<p>Hidrostal Limited 4 &amp; 5<br>The Galloway Centre<br>Hambridge Lane<br>Newbury RG14 5TL<br>ENGLAND</p>';
		
			  var infowindow = new google.maps.InfoWindow({
			      content: contentString
			  });
	        
	        
	        var marker = new google.maps.Marker({
			      position: myLatlng,
			      map: map,
			      title: 'Kabarda',
			      icon: '/assets/images/marker.png'
			  });
			  google.maps.event.addListener(marker, 'click', function() {infowindow.open(map,marker);});
	      }
	      
	      google.maps.event.addDomListener(window, 'load', initialize);
	      
	    </script>
	    
	    <?php } ?>
	    
	</head>