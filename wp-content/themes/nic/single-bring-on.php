<?php

get_header(); ?>

<?php include ("inc/top-banner.php") ?>

<?php while ( have_posts() ) : the_post(); ?>

    <div class="page-content"> 
        <div class="row">
            <h1 class="page-title"><?php the_title(); ?></h1>
        </div>
        <div class="row post-content">
            <?php the_content(); ?>
        </div>

        <?php include("inc/flexible-content.php") ?>
    </div>

<?php endwhile; ?>

<?php get_footer(); ?>