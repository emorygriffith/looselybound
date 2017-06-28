<?php
/*
 Template Name: Contact
*/
?>

<?php get_header(); ?>

<!-- API KEY FOR GOOGLE MAPS: -->
<!-- AIzaSyDZdVT9j7G5rSr0HpHDraPBgogAbYr4tsc -->



			<div id="content">

							    <!-- <script src="http://maps.google.com/maps/api/js?sensor=false"></script> -->
									<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZdVT9j7G5rSr0HpHDraPBgogAbYr4tsc&callback=initMap" type="text/javascript"></script>

									<script>
											function init_map() {
											var var_location = new google.maps.LatLng(40.743760, -73.978769);

											var var_mapoptions = {
											center: var_location,
												zoom: 17,
												draggable: !("ontouchend" in document)
												};

												var var_marker = new google.maps.Marker({
												position: var_location,
												map: var_map,

												title:"Monarch"});

												var var_map = new google.maps.Map(document.getElementById("map-container"),
												var_mapoptions);

												var_marker.setMap(var_map);

												}

												google.maps.event.addDomListener(window, 'load', init_map);
									</script>




							<div id="map-container" class="col-md-12">
									<!-- GOOGLE MAP GOES HERE -->
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
										<a href="mailto:info@monarchmgmtllc.com"><h4>info@monarchmgmtllc.com</h4></a>
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
