<?php /* Template Name: Template - Files */ ?>

<?php include("header.php"); ?>

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&callback=initialize"></script>
<script type="text/javascript">
    google.maps.event.addDomListener(window, 'load', init);
    function init() {
        var locations = [
            ['Rio Vancouver', 49.292374, -123.134339, '/locations/vancouver'],
            ['Rio Coquitlam', 49.278437, -122.811956, '/locations/coquitlam']
        ];

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 11,
            scrollwheel: false,
            center: new google.maps.LatLng(49.300279, -122.975273),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var infowindow = new google.maps.InfoWindow();

        var marker, i;

        for (i = 0; i < locations.length; i++) {  
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map,
                url: locations[i][3],
                icon: 'http://alldrops.ca/rio/rio_map_marker.png'
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    window.location.href = locations[i][3];
                }
            })(marker, i));
        }
    }
</script>

<?php while ( have_posts() ) : the_post(); ?>

	<?php include("inc/top-banner-locations.php") ?>

	<br><br>

	<?php $locations_main = get_field('location_main_info'); ?>
	<?php $locations_description = get_field('location_description'); ?>
	<?php $locations_hours = get_field('location_hours'); ?>
	<?php $locations_price = get_field('location_prices'); ?>

	<section>
		<div class="row">
			<div class="column medium-8 medium-centered text-center">
				<?php echo $locations_main; ?>
			</div>
			<br><br>
			<?php if(!empty($locations_description)) { ?>
				<?php echo $locations_description; ?>
			<?php } ?>
		</div>
		<br><br>
		<div class="row">
			<div class="columns medium-5">
				<h3>HOURS</h3>
				<?php echo $locations_hours ?>
			</div>
			<div class="columns medium-5">
				<h3>PRICES</h3>
				<?php echo $locations_price ?>
			</div>
		</div>
	</section>
	<br><br><br>

	<?php include("inc/reservation.php") ?>

	<section class="map">
	    <div id="map"></div>
	</section>

<?php endwhile; ?>

<?php include("footer.php"); ?>
