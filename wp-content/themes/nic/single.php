<?php include("header.php"); ?>

<div class="page-content"> 
    <div class="row">
        <h1 class="page-title"><?php the_title(); ?></h1>
    </div>
	
	<div class="row">
		<?php while ( have_posts() ) : the_post(); ?>
			<a class="back-blog" href="/nic/blog">Back to Blog</a>
			<h2><?php the_title(); ?></h2>
			<div class="post-info">
				<span class="date"><?php the_date('d.m.Y'); ?></span>
			</div>
			<div class="text">
				<?php the_content(); ?>
			</div>
			<?php comments_template(); ?>
		<?php endwhile; ?>
	</div>
</div>


<?php include("footer.php"); ?>