<?php /* Template Name: Template - About */ ?>

<?php include("header.php"); ?>

<div class="main-content">
		
	<?php while ( have_posts() ) : the_post(); ?>

		<?php include("inc/top-banner.php") ?>

		<?php # SECTION - ABOUT US ?>

		<section class="row">
			<div class="column small-12 small-centered">
				<h1 class="page-title text-center has-border">What you'll find here</h1>
				<?php the_content(); ?>


				<?php # SECTION - TIMELINE ?>
				
				<?php if( have_rows('about_timeline') ): ?>
					<section id="cd-timeline" class="cd-container">
						<?php while( have_rows('about_timeline') ): the_row(); ?>
								
							<?php $timeline_image = get_sub_field('timeline_item_image'); ?>
							<?php $timeline_title = get_sub_field('timeline_item_title'); ?>
							<?php $timeline_description = get_sub_field('timeline_item_description'); ?>

							<div class="cd-timeline-block">
								<div class="cd-timeline-img"></div>
								<div class="cd-timeline-content">
									<?php if(!empty($timeline_image)) { ?>
										<img src="<?php $print_image = wp_get_attachment_image_src( $timeline_image, 'full' ); echo $print_image[0]; ?>" alt="">
									<?php } ?>
									<?php if(!empty($timeline_title)) { ?>
										<h2><?php echo $timeline_title; ?></h2>
									<?php } ?>
									<?php if(!empty($timeline_description)) { ?>
										<p><?php echo $timeline_description; ?></p>
									<?php } ?>
								</div>
							</div>
						<?php endwhile; ?>
					</section>
				<?php endif; ?>
			</div>
		</section>
		
		<!-- Banner Link -->
		
		<?php include("inc/banner-link.php") ?>

	<?php endwhile; ?>
</div>

<?php include("footer.php"); ?>