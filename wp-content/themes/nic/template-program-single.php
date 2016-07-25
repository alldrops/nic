<?php /* Template Name: Template - Program Single */ ?>

<?php include("header.php"); ?>

		
<?php while ( have_posts() ) : the_post(); ?>

	<?php include("inc/top-banner.php") ?>

	<?php # SECTION - ABOUT US ?>

	<section class="row">
		<h1 class="page-title text-center has-border">Menu</h1>
		<?php the_content(); ?>
	</section>

	<?php # SECTION - MENU ITEMS ?>
	
	<?php if( have_rows('menu_categories') ): ?>
		<section class="listings">
			<?php while( have_rows('menu_categories') ): the_row(); ?>
				<?php $category_title = get_sub_field('category_title'); ?>
				<?php if(!empty($category_title)) { ?>
					<div class="row">
						<h2 class="page-title text-center has-border"><?php echo $category_title; ?></h2>
					</div>
				<?php } ?>
				<?php if( have_rows('category_items') ): ?>
					<?php $count = 1;  ?>
					<div class="row">
						<?php while( have_rows('category_items') ): the_row(); ?>

							<?php if($count == 4) { ?>
								<?php $count = 0; ?>
								</div>
								<div class="row">
							<?php } else { ?>

							<?php $item_title = get_sub_field('item_title'); ?>
							<?php $item_description = get_sub_field('item_description'); ?>
							<?php $item_image = get_sub_field('item_image'); ?>
							<div class="columns listings__tile small-12 medium-6 large-4">
								<?php if(!empty($item_image)) { ?>
									<img class="listings__image" src="<?php $print_image = wp_get_attachment_image_src( $item_image, 'square_img' ); echo $print_image[0]; ?>" alt="">
								<?php } else { ?>
									<img class="listings__image" src="<?php echo get_template_directory_uri(); ?>/images/rio_default.jpg" alt="">
								<?php } ?>
								<?php if(!empty($item_title)) { ?>
									<span class="listings__title bold"><?php echo $item_title; ?></span>
								<?php } ?>
								<?php if(!empty($item_description)) { ?>
									<span class="listings__subtitle"><?php echo $item_description; ?></span>
								<?php } ?>
							</div>
							<?php } ?>

							<?php $count++; ?>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			<?php endwhile; ?>
		</section>
	<?php endif; ?>

	<!-- Banner Link -->
		
	<?php include("inc/banner-link.php") ?>

<?php endwhile; ?>

<?php include("footer.php"); ?>
