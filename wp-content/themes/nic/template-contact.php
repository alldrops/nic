<?php /* Template Name: Template - Contact */ ?>

<?php include("header.php"); ?>
<!-- AIzaSyD7uurb9In-u_exfccOSfS-M6E8xMurjQw -->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyD7uurb9In-u_exfccOSfS-M6E8xMurjQw&sensor=false&callback=initialize"></script>
<script type="text/javascript">
    google.maps.event.addDomListener(window, 'load', init);
    function init() {
        var locations = [
            ['West Hastings', 49.284031, -123.112327, '/locations/vancouver'],
            ['Granville', 49.279489, -123.123088, '/locations/coquitlam']
        ];

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            scrollwheel: false,
            center: new google.maps.LatLng(49.283440, -123.117649),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var infowindow = new google.maps.InfoWindow();

        var marker, i;

        for (i = 0; i < locations.length; i++) {  
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map,
                url: locations[i][3],
                icon: 'http://alldrops.ca/files/nic-marker.png'
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

	<?php include("inc/top-banner.php") ?>

	<div class="page-content">
		<div class="row">
			<h1 class="page-title text-center has-border">Contact Us</h1>
			<div class="medium-10 medium-centered columns">
				<?php the_content(); ?>

				<div class="contact-form">
					<?php echo do_shortcode('[contact-form-7 id="139" title="Contact Page"]'); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="columns small-12 medium-5 medium-offset-1">
				<h2>Office Hours</h2>
				<p>
					Monday - Friday <br>
					8:30am PST - 6:00pm PST
				</p>
				<h2>Address</h2>
				<p>
					New Image College <br>
					Penthouse Suite 1500 - 510 West Hastings St. <br>
					Vancouver, BC - Canada <br>
					V6B 1L8
				</p>
				<h2>Phone</h2>
				<p>
					Local: (604) 685-8807 <br>
					Toll-free: 1 (866) 354-6243
				</p>
				<h2>FAX</h2>
				<p>
					(604) 685-8870
				</p>
			</div>
			<div class="columns small-12 medium-5">
				<h2>Language Admissions</h2>
				<p>
					English <br>
					Charie Van Dyke, <a href="#">charie@newimage.ca</a>
				</p>
				<p>
					Spanish &amp; French <br>
					Alejandra Uribe, <a href="#">alejandra@newimage.ca</a>
				</p>
				<p>
					Portuguese <br>
					Janaina Mallagoli, <a href="#">janaina@newimage.ca</a>
				</p>
				<p>
					Japanese <br>
					Shoko Kawakami, <a href="#">shokok@newimage.ca</a>
				</p>
				<p>
					Korean <br>
					Sung Jun Yoon, <a href="#">sung@newimage.ca</a>
				</p>
				<h2>General Contact Email</h2>
				<p>
					<a href="#">info@newimage.ca</a>
				</p>
			</div>
		</div>

		<section class="map">
			<div id="map"></div>
		</section>
	</div>

<?php endwhile; ?>

<?php include("footer.php"); ?>