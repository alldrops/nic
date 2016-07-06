<?php /* Template Name: Blog */ ?>

<?php include("header.php"); ?>

<div class="main-content">

	<div class="banner banner-top blog" style="background: url('http://youand.codes/wwp/wp-content/uploads/2015/03/banner-plumb-1.jpg') no-repeat center center; background-size: cover;">
		<span class="banner-overlay"></span>
		<div class="banner-content">
			<div class="call-bar">
				<div class="wrapper">
					<p>Give us a Call <a class="phone-number" href="tel:0405-692-151">0405 692 151</a></p>
				</div>
			</div>
			<span class="banner-title">Our Blog</span>
			<a href="#" class="btn-arrow-down"></a>
		</div>
	</div>

	<section class="content-block">
		<div class="wrapper">
			<div class="content-wrapper">
				<div class="tabs-container">
					<a href="" class="active">Recent</a>
					<a href="">Most Popular</a>
					<a href="">Archive</a>
				</div>
			</div>
		</div>
	</section>
	
	<section class="content-block">
		<div class="wrapper">
			<div class="wrapper-blog">
				<div class="posts-list">
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="block-post">
							<a href="<?php echo get_permalink(); ?>">
							<?php echo get_avatar( get_the_author_meta( 'user_email' ), 150 ); ?>
							<div class="post-info">
								<h3><?php the_title(); ?></h3>
								<div class="post-date-author">
									<span class="date"><?php the_date('d.m.Y'); ?> &nbsp;</span>
									<span class="author">By <?php echo get_the_author(); ?></span>
								</div>
								<div class="text">
									<?php echo apply_filters('the_content', substr(get_the_content(), 0, 200) . '...' ); ?>
								</div>
								<span class="read-more">Read more</span>
							</div>
							</a>
						</div>
					<?php endwhile; ?>
					<a href="#" class="btn-load-more">Load More</a>
				</div>
			</div>
		</div>
	</section>
</div>

<?php include("footer.php"); ?>
