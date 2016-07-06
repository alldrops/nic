<?php
	$has_popup = get_field('has_popup');
	$popup_image = get_field('popup_image');
?>

<?php if($has_popup) { ?>
	<a class="banner-special__link" data-reveal-id="popupModal">open modal</a>
	<div class="reveal-modal" id="popupModal" data-reveal>
		<a class="close-reveal-modal" aria-label="Close">&#215;</a>
		<img src="<?php $print_image = wp_get_attachment_image_src( $popup_image, 'full' ); echo $print_image[0]; ?>" alt="">
	</div>
<?php } ?>