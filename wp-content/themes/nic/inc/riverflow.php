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