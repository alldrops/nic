<?php /* Template Name: Template - Faculty */ ?>

<?php include("header.php"); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php include("inc/top-banner.php") ?>

	<div class="page-content">
		<div class="row">
			<h1 class="page-title"><?php the_title(); ?></h1>
		</div>

		<?php include("inc/flexible-content.php") ?>
	</div>

<?php endwhile; ?>

<?php include("footer.php"); ?>
