<?php if( have_rows('hero_banner') ): ?>
    <div class="banner owl-carousel owl-carousel--banner">
        <?php while( have_rows('hero_banner') ): the_row(); ?>
            <?php $slide_image = get_sub_field('image'); ?>
            <div class="item owl-carousel__background" style="background: url('<?php $print_image = wp_get_attachment_image_src( $slide_image, 'full' ); echo $print_image[0]; ?>') no-repeat center center;" /></div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>

<div class="row">
    <span class="scroll-tip"></span>
</div>