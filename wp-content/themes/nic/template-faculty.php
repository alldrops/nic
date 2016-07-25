<?php /* Template Name: Template - Faculty */ ?>

<?php include("header.php"); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<?php if( have_rows('slider') ) { ?>
        <?php while( have_rows('slider') ): the_row(); ?>
            <?php $slide_image = get_sub_field('slide_image'); ?>
			<section class="banner banner--locations" data-parallax="scroll" data-image-src="<?php $print_image = wp_get_attachment_image_src( $slide_image, 'full' ); echo $print_image[0]; ?>">
        <?php endwhile; ?>
	<?php } else { ?>
		<section class="banner banner--locations" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/images/image_1.jpg">
	<?php } ?>
		<div class="banner__content">
			<a href="vancouver" class="button button--locations">Vancouver</a>
			<a href="coquitlam" class="button button--locations">Coquitlam</a>
		</div>
	</section>
<?php endwhile; ?>

<?php include("footer.php"); ?>
