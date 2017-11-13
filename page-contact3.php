<?php
/*
 Template Name: Contact3
*/
?>

<?php get_header(); ?>

			<div id="content">

							    <!-- <script src="http://maps.google.com/maps/api/js?sensor=false"></script> -->
									<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZdVT9j7G5rSr0HpHDraPBgogAbYr4tsc&callback=initMap" type="text/javascript"></script> -->
									<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZdVT9j7G5rSr0HpHDraPBgogAbYr4tsc&callback=initMap" type="text/javascript"></script>

https://maps.googleapis.com/maps/api/js?sensor=false

<script>

									// *
									// * Two maps on the same page
									// * 2015 - en.marnoto.com
									// *

									// necessary variables
									var mapLeft, mapRight;
									var infoWindowLeft, infoWindowRight;

									// markersData variable stores the information necessary to each marker
									var markersDataLeft = [
									   {
									      lat: 40.743760,
									      lng: -73.978769,
									      name: "New York, NY",
									      address1:"Rua Diogo Cão, 125",
									      address2: "Praia da Barra",
									      postalCode: "3830-772 Gafanha da Nazaré" // don't insert comma in the last item of each marker
									   }
									];

									var markersDataRight = [
									   {
									      lat: 40.6386333,
									      lng: -8.745,
									      name: "Camping Praia da Barra",
									      address1:"Rua Diogo Cão, 125",
									      address2: "Praia da Barra",
									      postalCode: "3830-772 Gafanha da Nazaré" // don't insert comma in the last item of each marker
									   }
									];

									function initialize(setMap) {

									   var mapOptions;

									   if(setMap == "mapLeft") {
									      mapOptions = {
									         center: new google.maps.LatLng(40.601203,-8.668173),
									         zoom: 11,
									         mapTypeId: 'roadmap',
									      };

									      mapLeft = new google.maps.Map(document.getElementById('map-canvas-left'), mapOptions);

										   // a new Info Window is created
										   infoWindowLeft = new google.maps.InfoWindow();

										   // Event that closes the Info Window with a click on the map
										   google.maps.event.addListener(mapLeft, 'click', function() {
										      infoWindowLeft.close();
									   	});

									   } else {

									      mapOptions = {
									         center: new google.maps.LatLng(40.601203,-8.668173),
									         zoom: 9,
									         mapTypeId: 'roadmap',
									      };

										   mapRight = new google.maps.Map(document.getElementById('map-canvas-right'), mapOptions);

										   // a new Info Window is created
										   infoWindowRight = new google.maps.InfoWindow();

										   // Event that closes the Info Window with a click on the map
										   google.maps.event.addListener(mapRight, 'click', function() {
										      infoWindowRight.close();
									   	});
									   }

									   // Finally displayMarkers() function is called to begin the markers creation
									   displayMarkers(setMap);

									   // Create second map only when initialize function is called for the first time.
									   // Second time setMap is equal to mapRight, so this condition returns false and it will not run
									   if(setMap == "mapLeft"){
									      initialize("mapRight");
									   }

									}
									google.maps.event.addDomListener(window, 'load', function(){ initialize("mapLeft") });


									// This function will iterate over markersData array
									// creating markers with createMarker function
									function displayMarkers(setMap){

									   var markersData;
									   var map;

									   if(setMap == "mapLeft"){
									      markersData = markersDataLeft;
									      map = mapLeft;
									   } else {
									      markersData = markersDataRight;
									      map = mapRight;
									   }

									   // this variable sets the map bounds according to markers position
									   var bounds = new google.maps.LatLngBounds();

									   // for loop traverses markersData array calling createMarker function for each marker
									   for (var i = 0; i < markersData.length; i++){

									      var latlng = new google.maps.LatLng(markersData[i].lat, markersData[i].lng);
									      var name = markersData[i].name;
									      var address1 = markersData[i].address1;
									      var address2 = markersData[i].address2;
									      var postalCode = markersData[i].postalCode;

									      createMarker(setMap, latlng, name, address1, address2, postalCode);

									      // marker position is added to bounds variable
									      bounds.extend(latlng);
									   }

									   // Finally the bounds variable is used to set the map bounds
									   // with fitBounds() function
									   map.fitBounds(bounds);
									}

									// This function creates each marker and it sets their Info Window content
									function createMarker(setMap, latlng, name, address1, address2, postalCode){

									   var map;
									   var infoWindow;

									   if(setMap == "mapLeft"){
									      map = mapLeft;
									      infoWindow = infoWindowLeft;
									   } else {
									      map = mapRight;
									      infoWindow = infoWindowRight;
									   }

									   var marker = new google.maps.Marker({
									      map: map,
									      position: latlng,
									      title: name
									   });

									   // This event expects a click on a marker
									   // When this event is fired the Info Window content is created
									   // and the Info Window is opened.
									   google.maps.event.addListener(marker, 'click', function() {

									      // Creating the content to be inserted in the infowindow
									      var iwContent = '<div id="iw_container">' +
									            '<div class="iw_title">' + name + '</div>' +
									         '<div class="iw_content">' + address1 + '<br />' +
									         address2 + '<br />' +
									         postalCode + '</div></div>';

									      // including content to the Info Window.
									      infoWindow.setContent(iwContent);

									      // opening the Info Window in the current map and at the current marker location.
									      infoWindow.open(map, marker);
									   });
									}

</script>




<div class="row">


							<div id="map-canvas-left" class="col-md-6">
									<!-- GOOGLE MAP GOES HERE -->
							</div>
							<div id="map-canvas-right" class="col-md-6">
									<!-- GOOGLE MAP GOES HERE -->
							</div>

</div>

							<div class="clearfix contain contact-info row page-header">
								<div class="row col-lg-6 col-md-6 field">
									<div class="col-lg-6 col-md-6 col-sm-6 field-label">
										<h4 style="font-weight:bold !important;">Address</h4>
									</div>
									<div class="col-lg-6 col-md-6 ">
										<h4>209 East 31st Street <br> New York, NY 10016</h4>
									</div>
								</div>
								<div class="row col-lg-6 col-md-6 field">
									<div class="col-lg-6 col-md-6 col-sm-6 field-label">
										<h4 style="font-weight:bold !important;">Email</h4>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6">
										<a href="mailto:info@monarchbw.com"><h4>info@monarchbw.com</h4></a>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 field-label">
										<h4 style="font-weight:bold !important;">Phone</h4>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6">
										<h4>(212) 894-8100</h4>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 field-label">
										<h4 style="font-weight:bold !important;">Fax</h4>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6">
										<h4>(212) 894-8120</h4>
									</div>
								</div>
							</div>

			</div>





<?php get_footer(); ?>
