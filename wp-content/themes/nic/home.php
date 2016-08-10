<?php /* Template Name: Blog */ ?>

<?php include("header.php"); ?>

<?php include ("inc/top-banner.php") ?>

<div class="page-content"> 
    <div class="row">
        <h1 class="page-title">Blog</h1>
    </div>
	
	<div class="row">
		<?php $counter = 1; ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="block-post columns small-12 medium-4">
				<a href="<?php echo get_permalink(); ?>">
					<div class="post-info">
						<h3><?php the_title(); ?></h3>
						<span class="date"><?php the_date('d.m.Y'); ?> &nbsp;</span>
						<div class="text">
							<?php echo apply_filters('the_content', substr(get_the_content(), 0, 200) . '...' ); ?>
						</div>
						<span class="read-more">Read more</span>
					</div>
				</a>
			</div>
			<?php 
			if ($counter == 3) {
				echo '</div><div class="row">';
				$counter = 1;
			} else {
				$counter++;
			}
			?>
		<?php endwhile; ?>
	</div>
</div>

<?php include("footer.php"); ?>
