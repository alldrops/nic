<?php /* Template Name: Template - Wines */ ?>

<?php include("header.php"); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php include("inc/top-banner.php") ?>

	<?php # SECTION - ABOUT US ?>

	<section class="row">
		<h1 class="page-title text-center has-border">Beverages</h1>
		<?php the_content(); ?>
	</section>

	<?php # SECTION - BEVERAGE ITEMS ?>
	
	<?php if( have_rows('beverages') ): ?>
		<section class="listings">
			<?php while( have_rows('beverages') ): the_row(); ?>
				<?php $beverage_cat_title = get_sub_field('beverages_category_title'); ?>
				<section class="row">
					<h2 class="page-title text-center has-border"><?php echo $beverage_cat_title; ?></h2>
				</section>
				<?php if( have_rows('beverages_items') ): ?>
					<div class="row">
						<?php while( have_rows('beverages_items') ): the_row(); ?>
							<?php $beverage_title = get_sub_field('beverage_title'); ?>
							<?php $beverage_description = get_sub_field('beverage_description'); ?>

							<div class="columns listings__tile small-12 medium-6">
								<?php if(!empty($beverage_title)) { ?>
									<span class="listings__title bold"><?php echo $beverage_title; ?></span>
								<?php } ?>
								<?php if(!empty($beverage_description)) { ?>
									<span class="listings__description"><?php echo $beverage_description; ?></span>
								<?php } ?>
							</div>
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
