<?php if( have_rows('hero_banner') ): ?>
    <div class="banner owl-carousel owl-carousel--banner">
        <?php while( have_rows('hero_banner') ): the_row(); ?>
            <?php $slide_image = get_sub_field('image'); ?>
            <?php $hasBox = get_sub_field('has_box'); ?>
            <div class="item owl-carousel__background" style="background: url('<?php $print_image = wp_get_attachment_image_src( $slide_image, 'full' ); echo $print_image[0]; ?>') no-repeat center center;" />
            	
            	<?php if($hasBox) : ?>
            		<?php 
            			$boxPosition = get_sub_field('box_position', option);
                        $boxHeadline = get_sub_field('headline');
            			$boxHeadline = get_sub_field('headline');
            			$boxDescription = get_sub_field('description');
            			$boxCtaLink = get_sub_field('cta_link');
            			$boxCtaText = get_sub_field('cta_text');
            		?>
	            	<div class="box-banner box-banner--<?php echo $boxPosition; ?>">
	            		<?php if(!empty($boxHeadline)) { ?> 
	            			<h2 class="box-banner__title"><?php echo $boxHeadline ?></h2>
	            		<?php } ?>
	            		<?php if(!empty($boxDescription)) { ?> 
	            			<div class="box-banner__description"><?php echo $boxDescription ?></div>
	            		<?php } ?>
	            		<?php if(!empty($boxCtaLink)) { ?> 
	            			<a class="button success box-banner__cta" href="<?php echo $boxCtaLink ?>"><?php echo $boxCtaText ?></a>
	            		<?php } ?>
	            	</div>
            	<?php endif; ?>

            </div>
        <?php endwhile; ?>
    </div>
	<div class="row">
	    <span class="scroll-tip"></span>
	</div>
<?php endif; ?>
