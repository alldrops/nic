<?php /* Template Name: Template - Sitemap */ ?>

<?php include("header.php"); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php include("inc/top-banner.php") ?>

	<div class="page-content">
		<section class="row">
			<h1 class="page-title"><?php the_title(); ?></h1>
		</section>

		<?php include("inc/flexible-content.php") ?>
	</div>

<?php endwhile; ?>

<?php include("footer.php"); ?>
