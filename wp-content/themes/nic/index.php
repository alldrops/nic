<?php /* Template Name: Template - Home */ ?>

<?php include("header.php"); ?>

		
	<?php while ( have_posts() ) : the_post(); ?>

		<?php include("inc/top-banner.php") ?>

		<section class="section-programs section-programs--home">
			<h2 class="page-title">Programs</h2>
			<div class="programs">
				<div class="programs-row">
					<a href="#" class="hex program--film-acting"
					style="background: url(<?php echo get_template_directory_uri(); ?>/images/examples/programs/film-acting.jpg) no-repeat center center; background-size: cover">
						<span class="program__cat">Film Acting</span>
					</a>
					<a href="#" class="hex program--prosthetic-makeup"
					style="background: url(<?php echo get_template_directory_uri(); ?>/images/examples/programs/film-prosthetic-makeup.jpg) no-repeat center center; background-size: cover">
						<span class="program__cat">Film<br> + <br>Prosthetic Makeup</span>
					</a>
					<a href="#" class="hex program--beauty-makeup"
					style="background: url(<?php echo get_template_directory_uri(); ?>/images/examples/programs/high-fashion-beauty-makeup.jpg) no-repeat center center; background-size: cover">
						<span class="program__cat">High Fashion<br> + <br>Beauty Makeup</span>
					</a>
				</div>
				<div class="programs-row programs-row--even">
					<a href="#" class="hex program--cosmethology"
					style="background: url(<?php echo get_template_directory_uri(); ?>/images/examples/programs/esthetics-cosmethology.png) no-repeat center center; background-size: cover">
						<span class="program__cat">Esthetics<br> + <br>Cosmethology</span>
					</a>
					<a href="#" class="hex program--medical-esthetics"
					style="background: url(<?php echo get_template_directory_uri(); ?>/images/examples/programs/medical-esthetics.jpg) no-repeat center center; background-size: cover">
						<span class="program__cat">Medical Esthetics</span>
					</a>
				</div>
				<div class="programs-row">
					<a href="#" class="hex program--nail-design"
					style="background: url(<?php echo get_template_directory_uri(); ?>/images/examples/programs/nail-art-design.jpg) no-repeat center center; background-size: cover">
						<span class="program__cat">Nail Art<br> + <br>Design</span>
					</a>
					<a href="#" class="hex program--hair-design"
					style="background: url(<?php echo get_template_directory_uri(); ?>/images/examples/programs/hair-styling-design.jpg) no-repeat center center; background-size: cover">
						<span class="program__cat">Hair Styling<br> + <br>Design</span>
					</a>
					<a href="#" class="hex program--teen-career"
					style="background: url(<?php echo get_template_directory_uri(); ?>/images/examples/programs/teen-career.jpg) no-repeat center center; background-size: cover">
						<span class="program__cat">Teen Career Jumpstart</span>
					</a>
				</div>
			</div>
		</section>

		<?php include("inc/riverflow.php") ?>
		
	<?php endwhile; ?>

	<?php if( have_rows('testimonials') ): ?>
		<section class="banner banner--middle" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/images/testimonials-bg-after.jpg">
			<div class="banner__content">
				<div class="row">
					<h2 class="title-testimonials">TESTIMONIALS</h2>
					<div class="column medium-7 medium-centered">
						<div class="owl-carousel owl-carousel--testimonials">
							<?php while( have_rows('testimonials') ): the_row(); ?>
								<?php $testimonial_text = get_sub_field('testimonial_text'); ?>
								<?php $testimonial_name = get_sub_field('testimonial_name'); ?>

								<div class="item">
									<div class="columns listings__tile small-12">
										<?php if(!empty($testimonial_text)) { ?>
											<p class="testimonial__text"><?php echo $testimonial_text; ?></p>
										<?php } ?>
										<?php if(!empty($testimonial_name)) { ?>
											<span class="testimonial__name"><?php echo $testimonial_name; ?></span>
										<?php } ?>
									</div>
								</div>
							<?php endwhile; ?>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>

<?php include("footer.php"); ?>
