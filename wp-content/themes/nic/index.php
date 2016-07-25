<?php /* Template Name: Template - Home */ ?>

<?php include("header.php"); ?>

		
	<?php while ( have_posts() ) : the_post(); ?>

		<?php include("inc/top-banner.php") ?>

		<div class="page-content">
			<div class="row">
				<section class="section-programs section-programs--home">
					<h2 class="page-title">Programs</h2>
					<div class="programs">
						<div class="programs-row">
							<a href="#" class="box-bg hex program--film-acting"
							style="background: url(<?php echo get_template_directory_uri(); ?>/images/examples/programs/film-acting.jpg) no-repeat center center; background-size: cover">
								<span class="program__cat">Film Acting</span>
							</a>
							<a href="#" class="box-bg hex program--prosthetic-makeup"
							style="background: url(<?php echo get_template_directory_uri(); ?>/images/examples/programs/film-prosthetic-makeup.jpg) no-repeat center center; background-size: cover">
								<span class="program__cat">Film<br> + <br>Prosthetic Makeup</span>
							</a>
							<a href="#" class="box-bg hex program--beauty-makeup"
							style="background: url(<?php echo get_template_directory_uri(); ?>/images/examples/programs/high-fashion-beauty-makeup.jpg) no-repeat center center; background-size: cover">
								<span class="program__cat">High Fashion<br> + <br>Beauty Makeup</span>
							</a>
						</div>
						<div class="programs-row programs-row--even">
							<a href="#" class="box-bg hex program--cosmethology"
							style="background: url(<?php echo get_template_directory_uri(); ?>/images/examples/programs/esthetics-cosmethology.png) no-repeat center center; background-size: cover">
								<span class="program__cat">Esthetics<br> + <br>Cosmethology</span>
							</a>
							<a href="#" class="box-bg hex program--medical-esthetics"
							style="background: url(<?php echo get_template_directory_uri(); ?>/images/examples/programs/medical-esthetics.jpg) no-repeat center center; background-size: cover">
								<span class="program__cat">Medical Esthetics</span>
							</a>
						</div>
						<div class="programs-row">
							<a href="#" class="box-bg hex program--nail-design"
							style="background: url(<?php echo get_template_directory_uri(); ?>/images/examples/programs/nail-art-design.jpg) no-repeat center center; background-size: cover">
								<span class="program__cat">Nail Art<br> + <br>Design</span>
							</a>
							<a href="#" class="box-bg hex program--hair-design"
							style="background: url(<?php echo get_template_directory_uri(); ?>/images/examples/programs/hair-styling-design.jpg) no-repeat center center; background-size: cover">
								<span class="program__cat">Hair Styling<br> + <br>Design</span>
							</a>
							<a href="#" class="box-bg hex program--teen-career"
							style="background: url(<?php echo get_template_directory_uri(); ?>/images/examples/programs/teen-career.jpg) no-repeat center center; background-size: cover">
								<span class="program__cat">Teen Career Jumpstart</span>
							</a>
						</div>
					</div>
				</section>
			</div>
		</div>

		<?php include("inc/banner-campus.php") ?>

		<?php include("inc/riverflow.php") ?>

	<?php endwhile; ?>

<?php include("footer.php"); ?>
