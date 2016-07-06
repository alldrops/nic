<?php include("header.php"); ?>

<div class="main-content blog-post">

	<div class="banner banner-top blog-post" style="background: url('http://youand.codes/wwp/wp-content/uploads/2015/03/banner-plumb-1.jpg') no-repeat center top; background-size: cover;">
		<div class="banner-content">
			<div class="call-bar">
				<div class="wrapper">
					<p>Give us a Call <a class="phone-number" href="tel:0405-692-151">0405 692 151</a></p>
				</div>
			</div>
		</div>
		<span class="banner-title">Our Blog</span>
	</div>

	<div class="wrapper">
		<div class="content-section">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="content-block">
					<div class="content-wrapper">
						<div class="wrapper-blog">
							<a class="back-blog" href="/blog">Back to Blog</a>
							<h2><?php the_title(); ?></h2>
							<div class="post-info">
								<span class="date"><?php the_date('d.m.Y'); ?></span>
								<span class="author">By <?php echo get_the_author(); ?></span>
							</div>
							<div class="text">
								<?php the_content(); ?>
							</div>
							<div class="author-info">
								<?php echo get_avatar( get_the_author_meta( 'user_email' ), 150 ); ?>
								<div class="text-author">
									<span class="author-name">About <?php echo get_the_author(); ?></span>
									<p><?php the_author_description(); ?></p>
									<a href="/contact">Contact <?php echo get_the_author(); ?></a>
									<a href="/meet-wwp">Meet the Team</a>
								</div>
							</div>
							<?php comments_template(); ?>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>


<?php include("footer.php"); ?>