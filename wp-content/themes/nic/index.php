<?php /* Template Name: Template - Home */ ?>

<?php include("header.php"); ?>

		
	<?php while ( have_posts() ) : the_post(); ?>

		<?php include("inc/top-banner.php") ?>

		<section class="intro-home row">
			<h1 class="page-title text-center has-border">Programs</h1>
			<p class="text-center">
				<?php the_content(); ?>
			</p>
		</section>

		<!-- Banner Link -->
		
		<?php include("inc/banner-link.php") ?>

		<!-- Reservation widget -->

		<?php include("inc/reservation.php") ?>
		
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
