<?php /* Template Name: Template - Contact */ ?>

<?php include("header.php"); ?>

<?php while ( have_posts() ) : the_post(); ?>

    <?php include("inc/top-banner.php") ?>

    <section class="row">
        <h1 class="page-title text-center has-border">Get in touch with us</h1>
        <div class="column medium-8 medium-centered">
            <?php the_content(); ?>
        </div>
    </section>

    <!-- Banner Link -->
        
    <?php include("inc/banner-link.php") ?>

<?php endwhile; ?>

<?php include("footer.php"); ?>