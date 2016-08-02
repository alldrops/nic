<?php if (have_rows('content_row')) : ?>
<section class="flexible-content">
	<?php while (have_rows('content_row')) : the_row(); ?>
		<div class="row">
			<?php $rowLayout = get_sub_field('row_layout');
			if ($rowLayout == 'full') : ?>
				<div class="column small-12">
				<?php if(have_rows('content_type')) :
					while (have_rows('content_type')) : the_row();
						if( get_row_layout() == 'content_heading' ) :

							$contentHeading = get_sub_field('heading_text');
							if(!empty($contentHeading)) :
								echo '<h2 class="section-heading">' . $contentHeading . '</h2>';
							endif;

						elseif( get_row_layout() == 'content_text' ) :

							$contentText = get_sub_field('text');
							if(!empty($contentText)) :
								echo $contentText;
							endif;

						elseif( get_row_layout() == 'content_image' ):
							$contentImgID = get_sub_field('image');
							$contentImg = wp_get_attachment_image_src( $contentImgID, '' ); 
							
							if(!empty($contentImg)) :
								echo "<img class=\"content-img\" src=".$contentImg[0]." />";
							endif;

						elseif( get_row_layout() == 'content_video' ):
							$contentVideoPlatform = get_sub_field('video_platform');
							$contentVideoID = get_sub_field('video_id');

							if(!empty($contentVideoID)) :
								
								if($contentVideoPlatform == 'youtube') :
									echo '<div class="video video--youtube"><div class="video-wrapper"><iframe src="https://www.youtube.com/embed/'.$contentVideoID.'" frameborder="0" allowfullscreen></iframe></div></div>';
								elseif ($contentVideoPlatform == 'vimeo') :
									echo '<div class="video video--vimeo"><div class="video-wrapper"><iframe src="https://player.vimeo.com/video/'.$contentVideoID.'" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div></div>';
								endif;
							endif;
						endif;
					endwhile;
				endif; ?>
				</div>
			<?php elseif ($rowLayout == '21') : ?>
				<div class="columns small-12 medium-8">
					<?php if(have_rows('content_type')) :
						while (have_rows('content_type')) : the_row();
							if( get_row_layout() == 'content_text' ) :

								$contentText = get_sub_field('text');
								if(!empty($contentText)) :
									echo $contentText;
								endif;

							elseif( get_row_layout() == 'content_image' ):
								$contentImgID = get_sub_field('image');
								$contentImg = wp_get_attachment_image_src( $contentImgID, '' ); 
								
								if(!empty($contentImg)) :
									echo "<img class=\"content-img\" src=".$contentImg[0]." />";
								endif;

							elseif( get_row_layout() == 'content_video' ):
								$contentVideoPlatform = get_sub_field('video_platform');
								$contentVideoID = get_sub_field('video_id');

								if(!empty($contentVideoID)) :
									
									if($contentVideoPlatform == 'youtube') :
										echo '<div class="video video--youtube"><div class="video-wrapper"><iframe src="https://www.youtube.com/embed/'.$contentVideoID.'" frameborder="0" allowfullscreen></iframe></div></div>';
									elseif ($contentVideoPlatform == 'vimeo') :
										echo '<div class="video video--vimeo"><div class="video-wrapper"><iframe src="https://player.vimeo.com/video/'.$contentVideoID.'" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div></div>';
									endif;
								endif;
							endif;
						endwhile;
					endif; ?>
				</div>
				<div class="columns small-12 medium-4">
					<?php if(have_rows('content_type_2')) :
						while (have_rows('content_type_2')) : the_row();
						
							if( get_row_layout() == 'content_text' ) :

								$contentText = get_sub_field('text');
								if(!empty($contentText)) :
									echo $contentText;
								endif;

							elseif( get_row_layout() == 'content_image' ):
								$contentImgID = get_sub_field('image');
								$contentImg = wp_get_attachment_image_src( $contentImgID, '' ); 
								
								if(!empty($contentImg)) :
									echo "<img class=\"content-img\" src=".$contentImg[0]." />";
								endif;

							elseif( get_row_layout() == 'content_video' ):
								$contentVideoPlatform = get_sub_field('video_platform');
								$contentVideoID = get_sub_field('video_id');

								if(!empty($contentVideoID)) :
									
									if($contentVideoPlatform == 'youtube') :
										echo '<div class="video video--youtube"><div class="video-wrapper"><iframe src="https://www.youtube.com/embed/'.$contentVideoID.'" frameborder="0" allowfullscreen></iframe></div></div>';
									elseif ($contentVideoPlatform == 'vimeo') :
										echo '<div class="video video--vimeo"><div class="video-wrapper"><iframe src="https://player.vimeo.com/video/'.$contentVideoID.'" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div></div>';
									endif;
								endif;
							endif;
						endwhile;
					endif; ?>
				</div>
			<?php elseif ($rowLayout == '12') : ?>
				<div class="columns small-12 medium-4">
					<?php if(have_rows('content_type')) :
						while (have_rows('content_type')) : the_row();
							if( get_row_layout() == 'content_text' ) :

								$contentText = get_sub_field('text');
								if(!empty($contentText)) :
									echo $contentText;
								endif;

							elseif( get_row_layout() == 'content_image' ):
								$contentImgID = get_sub_field('image');
								$contentImg = wp_get_attachment_image_src( $contentImgID, '' ); 
								
								if(!empty($contentImg)) :
									echo "<img class=\"content-img\" src=".$contentImg[0]." />";
								endif;

							elseif( get_row_layout() == 'content_video' ):
								$contentVideoPlatform = get_sub_field('video_platform');
								$contentVideoID = get_sub_field('video_id');

								if(!empty($contentVideoID)) :
									
									if($contentVideoPlatform == 'youtube') :
										echo '<div class="video video--youtube"><div class="video-wrapper"><iframe src="https://www.youtube.com/embed/'.$contentVideoID.'" frameborder="0" allowfullscreen></iframe></div></div>';
									elseif ($contentVideoPlatform == 'vimeo') :
										echo '<div class="video video--vimeo"><div class="video-wrapper"><iframe src="https://player.vimeo.com/video/'.$contentVideoID.'" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div></div>';
									endif;
								endif;
							endif;
						endwhile;
					endif; ?>
				</div>
				<div class="columns small-12 medium-8">
					<?php if(have_rows('content_type_2')) :
						while (have_rows('content_type_2')) : the_row();
							if( get_row_layout() == 'content_text' ) :

								$contentText = get_sub_field('text');
								if(!empty($contentText)) :
									echo $contentText;
								endif;

							elseif( get_row_layout() == 'content_image' ):
								$contentImgID = get_sub_field('image');
								$contentImg = wp_get_attachment_image_src( $contentImgID, '' ); 
								
								if(!empty($contentImg)) :
									echo "<img class=\"content-img\" src=".$contentImg[0]." />";
								endif;

							elseif( get_row_layout() == 'content_video' ):
								$contentVideoPlatform = get_sub_field('video_platform');
								$contentVideoID = get_sub_field('video_id');

								if(!empty($contentVideoID)) :
									
									if($contentVideoPlatform == 'youtube') :
										echo '<div class="video video--youtube"><div class="video-wrapper"><iframe src="https://www.youtube.com/embed/'.$contentVideoID.'" frameborder="0" allowfullscreen></iframe></div></div>';
									elseif ($contentVideoPlatform == 'vimeo') :
										echo '<div class="video video--vimeo"><div class="video-wrapper"><iframe src="https://player.vimeo.com/video/'.$contentVideoID.'" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div></div>';
									endif;
								endif;
							endif;
						endwhile;
					endif; ?>
				</div>
			<?php elseif ($rowLayout == '3') : ?>
				<div class="columns small-12 medium-4">
					<?php if(have_rows('content_type')) :
						while (have_rows('content_type')) : the_row();
							if( get_row_layout() == 'content_text' ) :

								$contentText = get_sub_field('text');
								if(!empty($contentText)) :
									echo $contentText;
								endif;

							elseif( get_row_layout() == 'content_image' ):
								$contentImgID = get_sub_field('image');
								$contentImg = wp_get_attachment_image_src( $contentImgID, '' ); 
								
								if(!empty($contentImg)) :
									echo "<img class=\"content-img\" src=".$contentImg[0]." />";
								endif;

							elseif( get_row_layout() == 'content_video' ):
								$contentVideoPlatform = get_sub_field('video_platform');
								$contentVideoID = get_sub_field('video_id');

								if(!empty($contentVideoID)) :
									
									if($contentVideoPlatform == 'youtube') :
										echo '<div class="video video--youtube"><div class="video-wrapper"><iframe src="https://www.youtube.com/embed/'.$contentVideoID.'" frameborder="0" allowfullscreen></iframe></div></div>';
									elseif ($contentVideoPlatform == 'vimeo') :
										echo '<div class="video video--vimeo"><div class="video-wrapper"><iframe src="https://player.vimeo.com/video/'.$contentVideoID.'" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div></div>';
									endif;
								endif;
							endif;
						endwhile;
					endif; ?>
				</div>
				<div class="columns small-12 medium-4">
					<?php if(have_rows('content_type_2')) :
						while (have_rows('content_type_2')) : the_row();
							
							if( get_row_layout() == 'content_text' ) :

								$contentText = get_sub_field('text');
								if(!empty($contentText)) :
									echo $contentText;
								endif;

							elseif( get_row_layout() == 'content_image' ):
								$contentImgID = get_sub_field('image');
								$contentImg = wp_get_attachment_image_src( $contentImgID, '' ); 
								
								if(!empty($contentImg)) :
									echo "<img class=\"content-img\" src=".$contentImg[0]." />";
								endif;

							elseif( get_row_layout() == 'content_video' ):
								$contentVideoPlatform = get_sub_field('video_platform');
								$contentVideoID = get_sub_field('video_id');

								if(!empty($contentVideoID)) :
									
									if($contentVideoPlatform == 'youtube') :
										echo '<div class="video video--youtube"><div class="video-wrapper"><iframe src="https://www.youtube.com/embed/'.$contentVideoID.'" frameborder="0" allowfullscreen></iframe></div></div>';
									elseif ($contentVideoPlatform == 'vimeo') :
										echo '<div class="video video--vimeo"><div class="video-wrapper"><iframe src="https://player.vimeo.com/video/'.$contentVideoID.'" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div></div>';
									endif;
								endif;
							endif;
						endwhile;
					endif; ?>
				</div>
				<div class="columns small-12 medium-4">
					<?php if(have_rows('content_type_3')) :
						while (have_rows('content_type_3')) : the_row();
							
							if( get_row_layout() == 'content_text' ) :

								$contentText = get_sub_field('text');
								if(!empty($contentText)) :
									echo $contentText;
								endif;

							elseif( get_row_layout() == 'content_image' ):
								$contentImgID = get_sub_field('image');
								$contentImg = wp_get_attachment_image_src( $contentImgID, '' ); 
								
								if(!empty($contentImg)) :
									echo "<img class=\"content-img\" src=".$contentImg[0]." />";
								endif;

							elseif( get_row_layout() == 'content_video' ):
								$contentVideoPlatform = get_sub_field('video_platform');
								$contentVideoID = get_sub_field('video_id');

								if(!empty($contentVideoID)) :
									
									if($contentVideoPlatform == 'youtube') :
										echo '<div class="video video--youtube"><div class="video-wrapper"><iframe src="https://www.youtube.com/embed/'.$contentVideoID.'" frameborder="0" allowfullscreen></iframe></div></div>';
									elseif ($contentVideoPlatform == 'vimeo') :
										echo '<div class="video video--vimeo"><div class="video-wrapper"><iframe src="https://player.vimeo.com/video/'.$contentVideoID.'" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div></div>';
									endif;
								endif;
							endif;
						endwhile;
					endif; ?>
				</div>
			<?php endif; ?>
		</div>
	<?php endwhile; ?>
</section>
<?php endif; ?>