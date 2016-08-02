<?php 

$columns = get_field('columns');
$bannerImgID1 = get_field('banner_1_image');
$contentImg1 = wp_get_attachment_image_src( $bannerImgID1, '' ); 
$bannerText1 = get_field('banner_1_text');
$bannerURL1 = get_field('banner_1_url');

if ($columns == 2) {
	$bannerImgID2 = get_field('banner_2_image');
	$contentImg2 = wp_get_attachment_image_src( $bannerImgID2, '' ); 
	$bannerText2 = get_field('banner_2_text');
	$bannerURL2 = get_field('banner_2_url');
}

if(!empty($contentImg1)) : ?>
	<div class="banner-campus">
		<a href="<?php echo $bannerURL1; ?>" class="banner-campus__item" style="background: url(<?php echo $contentImg1[0]; ?>) no-repeat center center; background-size: cover;">
			<?php if(!empty($bannerText1)) :
				echo '<span>'.$bannerText1.'</span>';
			endif; ?>
		</a>

		<?php if ($columns == 2) :
			if(!empty($contentImg2)) : ?>
			<a href="<?php echo $bannerURL2; ?>" class="banner-campus__item" style="background: url(<?php echo $contentImg2[0]; ?>) no-repeat center center; background-size: cover;">
				<?php if(!empty($bannerText2)) :
					echo '<span>'.$bannerText2.'</span>';
				endif; ?>
			</a>
			<?php endif;
		endif; ?>
	</div>
<?php endif; ?>