<?php if(have_rows('riverflow')) : ?>
	<section class="riverflow">
		<div class="row">
			<?php while (have_rows('riverflow')) : the_row();
				$contentImgID = get_sub_field('image');
				$contentImg = wp_get_attachment_image_src( $contentImgID, '' );
				$contentHeadline = get_sub_field('headline');
				$contentDescription = get_sub_field('description');
				$contentHasLink = get_sub_field('has_link'); ?>

				<div class="riverflow__item">
					<?php if(!empty($contentImg)) : ?>
						<div class="riverflow__item__image" style="background: url(<?php echo $contentImg[0]; ?>) no-repeat center center; background-size: cover;"></div>
					<?php endif; ?>
					<div class="riverflow__item__content">
						<?php if(!empty($contentHeadline)) : ?>
							<h2 class="riverflow__item__title"><?php echo $contentHeadline; ?></h2>
						<?php endif; ?>
						<?php if(!empty($contentDescription)) : ?>
							<div class="riverflow__item__description">
								<?php echo $contentDescription; ?>
							</div>
						<?php endif; ?>
						<?php if ($contentHasLink) :
							$contentCtaUrl = get_sub_field('cta_url');
							$contentCtaText = get_sub_field('cta_text');
							
							if(!empty($contentCtaText)) : ?>
								<a href="<?php echo $contentCtaUrl; ?>" class="riverflow__item__link"><?php echo $contentCtaText; ?></a>
							<?php endif; ?>
						<?php endif; ?>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</section>
<?php endif; ?>
<!-- 
<section class="riverflow">
	<div class="row">
		<div class="riverflow__item">
			<div class="riverflow__item__image" style="background: url(<?php echo get_template_directory_uri(); ?>/images/examples/bring-on.jpg) no-repeat center center; background-size: cover;"></div>
			<div class="riverflow__item__content">
				<h2 class="riverflow__item__title">Bring on the success</h2>
				<div class="riverflow__item__description">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vel erat non mi condimentum consectetur imperdiet nec dolor. Suspendisse lacinia est nec vulputate finibus. Sed ultrices odio ut nulla euismod, ut varius arcu ornare.</p>
				</div>
				<a href="#" class="riverflow__item__link">Learn more</a>
			</div>
		</div>
		<div class="riverflow__item">
			<div class="riverflow__item__image" style="background: url(<?php echo get_template_directory_uri(); ?>/images/examples/nic-talks.jpg) no-repeat center center; background-size: cover;"></div>
			<div class="riverflow__item__content">
				<h2 class="riverflow__item__title">NIC Talks</h2>
				<div class="riverflow__item__description">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vel erat non mi condimentum consectetur imperdiet nec dolor. Suspendisse lacinia est nec vulputate finibus. Sed ultrices odio ut nulla euismod, ut varius arcu ornare.</p>
				</div>
				<a href="#" class="riverflow__item__link">Learn more</a>
			</div>
		</div>
		<div class="riverflow__item">
			<div class="riverflow__item__image" style="background: url(<?php echo get_template_directory_uri(); ?>/images/examples/events.jpg) no-repeat center center; background-size: cover;"></div>
			<div class="riverflow__item__content">
				<h2 class="riverflow__item__title">Events</h2>
				<div class="riverflow__item__description">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vel erat non mi condimentum consectetur imperdiet nec dolor. Suspendisse lacinia est nec vulputate finibus. Sed ultrices odio ut nulla euismod, ut varius arcu ornare.</p>
				</div>
				<a href="#" class="riverflow__item__link">Learn more</a>
			</div>
		</div>
	</div>
</section> -->