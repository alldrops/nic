<?php /* Template Name: Template - Blog */ ?>

<?php include("header.php"); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php include("inc/top-banner.php") ?>

	<div class="page-content">
		<div class="row">
			<h1 class="page-title"><?php the_title(); ?></h1>
		</div>

		<?php include("inc/flexible-content.php") ?>

		<div class="container-posts">
			<?php
				$type = array('campus-life', 'nic-talks', 'bring-on');
				$args=array(
					'post_type' => $type,
					'post_status' => 'publish',
					'posts_per_page' => -1,
					'orderby' => 'menu_order'
					// 'orderby' => 'date'
				);

				$my_query = null;
				$my_query = new WP_Query($args);

				if( $my_query->have_posts() ) :
					$counter = 1;

					echo '<div class="row">';

					while ($my_query->have_posts()) : $my_query->the_post();
						
						$postID = get_the_ID();
						$title = get_the_title();
						$featuredImage = wp_get_attachment_url( get_post_thumbnail_id($postID) );
						$featuredImageFallback = 'http://localhost:3000/nic/wp-content/themes/nic/images/nic.svg';

						if(($my_query->current_post + 1) < ($my_query->post_count)) {
							echo '<div class="post-block columns small-12 medium-4">';
						} else {
							echo '<div class="post-block columns small-12 medium-4 end">';
						} ?>
							
							<a href="<?php the_permalink() ?>" class="post-thumb">
								<?php if(!empty($featuredImage)) {
									echo '<img src="'.$featuredImage.'">';
								} else {
									echo '<img src="'.$featuredImageFallback.'">';
								} ?>	
							</a>
							<a href="<?php the_permalink() ?>" class="post-title"><?php echo $title; ?></a>
						</div>
		    		<?php

		    		$counter++;

		    		if ($counter > 3) {
		    			echo '</div><div class="row">';
		    			$counter = 1;
		    		}

		    		endwhile;

		    		echo '</div>';
				endif;
				
				wp_reset_query();
			?>
		</div>
	</div>

<?php endwhile; ?>

<?php include("footer.php"); ?>
