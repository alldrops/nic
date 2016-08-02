<?php

/* Default template */
?>

<?php include("header.php"); ?>

<div class="main-content">
		
	<?php while ( have_posts() ) : the_post(); ?>

		<?php include("inc/top-banner.php") ?>

		<div class="page-content">
			<div class="row">
				<h1 class="page-title"><?php the_title(); ?></h1>
			</div>

			<?php include("inc/flexible-content.php") ?>
			
			<?php include("inc/riverflow.php") ?>
		</div>

	<?php endwhile; ?>
</div>

<?php include("footer.php"); ?>