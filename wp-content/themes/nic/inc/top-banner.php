<?php if( have_rows('slider') ): ?>
    <div class="banner owl-carousel owl-carousel--banner">
        <?php while( have_rows('slider') ): the_row(); ?>
            <?php $slide_image = get_sub_field('slide_image'); ?>
            <div class="item owl-carousel__background" style="background: url('<?php $print_image = wp_get_attachment_image_src( $slide_image, 'full' ); echo $print_image[0]; ?>') no-repeat center center;" /></div> 
        <?php endwhile; ?>
    </div>
<?php endif; ?>
<div class="banner__box text-center">
    <h2><?php the_field('banner_title'); ?></h2>
    <span class="icon-rio"></span>
    <p><?php the_field('banner_description'); ?></p>
</div>
<div class="row">
    <span class="scroll-tip">SCROLL</span>
</div>