<?php /* Template Name: Template - International Education */ ?>

<?php include("header.php"); ?>

<style>
	html, body {
		overflow-x: initial;
	}
</style>

<div class="main-content">
		
	<?php while ( have_posts() ) : the_post(); ?>

		<?php include("inc/top-banner.php") ?>

		<?php
			$image1 = get_field('image_1');
			$image2 = get_field('image_2');
			$image3 = get_field('image_3');
		?>
		
		<div class="page-content">
			<div class="scroll-container">
				<div class="block--international-education">
					<h1 class="page-title"><?php the_title(); ?></h1>
				</div>
				<span class="scroll-tip"></span>
				<div class="block--image-1" style="background: url('<?php $print_image = wp_get_attachment_image_src( $image1, 'full' ); echo $print_image[0]; ?>') no-repeat center center; background-size: cover; background-attachment: fixed;"></div>
				<div class="block--image-2" style="background: url('<?php $print_image = wp_get_attachment_image_src( $image2, 'full' ); echo $print_image[0]; ?>') no-repeat right center; background-size: cover; background-attachment: fixed;"></div>
				<div class="block--image-3" style="background: url('<?php $print_image = wp_get_attachment_image_src( $image3, 'full' ); echo $print_image[0]; ?>') no-repeat left center; background-size: cover; background-attachment: fixed;"></div>
			</div>
			<?php include("inc/banner-campus.php") ?>
			<section class="scroll-nic">
				<img class="scroll-nic--img" src="<?php echo get_template_directory_uri(); ?>/images/nic.svg" alt="NIC">
			</section>

			<?php include("inc/flexible-content.php") ?>
			
			<?php include("inc/riverflow.php") ?>
		</div>

	<?php endwhile; ?>
</div>

<?php include("footer.php"); ?>