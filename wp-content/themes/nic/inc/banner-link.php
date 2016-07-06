<?php # Banner Link ?>
<?php $item_title = get_field('banner_link_title'); ?>
<?php $item_description = get_field('banner_link_description'); ?>
<?php $item_image = get_field('banner_link_image'); ?>
<?php $item_link = get_field('banner_link_link'); ?>

<section class="banner banner--text banner--middle" data-parallax="scroll" data-image-src="<?php $print_image = wp_get_attachment_image_src( $item_image, 'full' ); echo $print_image[0]; ?>">
	<a href="<?php echo $item_link ?>">
		<div class="banner__content">
			<div class="row">
				<div class="column medium-12 medium-centered">
					<h2><?php echo $item_title; ?></h2>
					<p><?php echo $item_description; ?></p>
				</div>
			</div>
		</div>
	</a>
</section>