<?php /* Template Name: Template - Programs */ ?>

<?php include("header.php"); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php include("inc/top-banner.php") ?>

	<div class="page-content">
		<section class="row">
			<h1 class="page-title">Programs</h1>
			<div class="column small-12 medium-10 medium-centered">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pellentesque lacinia quam vel laoreet. Praesent eget arcu venenatis, suscipit tellus quis, consectetur urna. Phasellus facilisis justo magna, in mattis urna gravida a. Duis fermentum tristique odio, non semper nisl semper id. Nullam ac luctus nisi.
				</p>
				<p>
					Duis venenatis orci hendrerit, feugiat arcu a, mollis libero. Proin at tincidunt nibh, nec semper lorem. Sed eget cursus lectus. Duis semper, urna ut vulputate mollis, purus justo egestas ipsum, et pretium tortor magna ut massa.
				</p>
			</div>
			<?php the_content(); ?>
		</section>

		<section class="category-container">
			<div class="row">
				<a href="#" class="box-bg program--film-acting"
				style="background: url(<?php echo get_template_directory_uri(); ?>/images/examples/programs/film-acting.jpg) no-repeat center center; background-size: cover">
					<span class="program__cat">Film Acting</span>
				</a>
				<a href="#" class="box-bg program--prosthetic-makeup"
				style="background: url(<?php echo get_template_directory_uri(); ?>/images/examples/programs/film-prosthetic-makeup.jpg) no-repeat center center; background-size: cover">
					<span class="program__cat">Film<br> + <br>Prosthetic Makeup</span>
				</a>
				<a href="#" class="box-bg program--beauty-makeup"
				style="background: url(<?php echo get_template_directory_uri(); ?>/images/examples/programs/high-fashion-beauty-makeup.jpg) no-repeat center center; background-size: cover">
					<span class="program__cat">High Fashion<br> + <br>Beauty Makeup</span>
				</a>
				<a href="#" class="box-bg program--cosmethology"
				style="background: url(<?php echo get_template_directory_uri(); ?>/images/examples/programs/esthetics-cosmethology.png) no-repeat center center; background-size: cover">
					<span class="program__cat">Esthetics<br> + <br>Cosmethology</span>
				</a>
				<a href="#" class="box-bg program--medical-esthetics"
				style="background: url(<?php echo get_template_directory_uri(); ?>/images/examples/programs/medical-esthetics.jpg) no-repeat center center; background-size: cover">
					<span class="program__cat">Medical Esthetics</span>
				</a>
				<a href="#" class="box-bg program--nail-design"
				style="background: url(<?php echo get_template_directory_uri(); ?>/images/examples/programs/nail-art-design.jpg) no-repeat center center; background-size: cover">
					<span class="program__cat">Nail Art<br> + <br>Design</span>
				</a>
				<a href="#" class="box-bg program--hair-design"
				style="background: url(<?php echo get_template_directory_uri(); ?>/images/examples/programs/hair-styling-design.jpg) no-repeat center center; background-size: cover">
					<span class="program__cat">Hair Styling<br> + <br>Design</span>
				</a>
				<a href="#" class="box-bg program--teen-career"
				style="background: url(<?php echo get_template_directory_uri(); ?>/images/examples/programs/teen-career.jpg) no-repeat center center; background-size: cover">
					<span class="program__cat">Teen Career Jumpstart</span>
				</a>
			</div>
		</section>

		<span class="categories-separator arrow-separator"></span>

		<section class="section-programs section-programs--programs">
			<div class="programs">
				<div class="programs-row">
					<a href="#" class="box-bg hex program--film-acting">
						<span class="program__cat">Film Acting</span>
					</a>
					<a href="#" class="box-bg hex program--prosthetic-makeup">
						<span class="program__cat">Fashion and Film Makeup Design</span>
					</a>
					<a href="#" class="box-bg hex program--beauty-makeup">
						<span class="program__cat">Beauty Design</span>
					</a>
				</div>
				<div class="programs-row programs-row--even">
					<a href="#" class="box-bg hex program--hair-design">
						<span class="program__cat">Hair Styling and Design</span>
					</a>
					<a href="#" class="box-bg hex program--beauty-makeup">
						<span class="program__cat">Avant Garde Makeup Design</span>
					</a>
					<a href="#" class="box-bg hex program--medical-esthetics">
						<span class="program__cat">Advanced Spa Technician</span>
					</a>
					<a href="#" class="box-bg hex program--film-acting">
						<span class="program__cat">Film Acting Intermediate</span>
					</a>
				</div>
				<div class="programs-row">
					<a href="#" class="box-bg hex program--nail-design">
						<span class="program__cat">Nail Technician</span>
					</a>
					<a href="#" class="box-bg hex program--nic">
						<span class="program__cat"><img src="<?php echo get_template_directory_uri(); ?>/images/nic_white.svg" alt=""></span>
					</a>
					<a href="#" class="box-bg hex program--teen-career">
						<span class="program__cat">Teen Acting</span>
					</a>
				</div>
				<div class="programs-row programs-row--even">
					<a href="#" class="box-bg hex program--teen-career">
						<span class="program__cat">Teen Makeup</span>
					</a>
					<a href="#" class="box-bg hex program--film-acting">
						<span class="program__cat">Film Acting Advanced</span>
					</a>
					<a href="#" class="box-bg hex program--prosthetic-makeup">
						<span class="program__cat">Cutting Edge Advanced Prosthetics</span>
					</a>
					<a href="#" class="box-bg hex program--beauty-makeup">
						<span class="program__cat">Fashion and Film Makeup Design</span>
					</a>
				</div>
				<div class="programs-row">
					<a href="#" class="box-bg hex program--beauty-makeup">
						<span class="program__cat">Beauty Makeup Artist</span>
					</a>
					<a href="#" class="box-bg hex program--cosmethology">
						<span class="program__cat">Spa Technician</span>
					</a>
					<a href="#" class="box-bg hex program--teen-career">
						<span class="program__cat">Teen Spa</span>
					</a>
				</div>
			</div>
		</section>

	</div>

<?php endwhile; ?>

<?php include("footer.php"); ?>
