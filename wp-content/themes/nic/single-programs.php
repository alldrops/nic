<?php
 /*Template Name: Programs
 */
 
get_header(); ?>

<?php include ("inc/top-banner.php") ?>

<?php
    $term_list = wp_get_post_terms($post->ID, 'department', array("fields" => "all"));
    $termID = $term_list[0]->term_id;
    $termName = $term_list[0]->name;
    $termLink = get_term_link($termID);
    $colour = '#' . get_term_meta( $termID, 'color', true );

    wp_reset_query();

    ?>

    <style>
        .owl-carousel--banner .box-banner__cta {
            background: <?php echo $colour; ?>;
        }
        .owl-carousel--banner .box-banner__cta:hover {
            opacity: 0.8;
            background: <?php echo $colour; ?>;
        }
        .banner.owl-carousel--banner .owl-controls .owl-dots .owl-dot span {
            background: <?php echo $colour; ?>;
        }

        .tabs a:hover,
        .tabs .current a {
            background: <?php echo $colour; ?>;
            color: #FFF;
        }

        .tabs a {
            color: <?php echo $colour; ?>;
            border-bottom: 2px solid <?php echo $colour; ?>;
        }

        .tabs_item h4 {
            color: <?php echo $colour; ?>;
        }

        .accordion dt a, .accordion dd a,
        .accordion dt a:after, .accordion dd a:after {
            color: <?php echo $colour; ?>;
        }

    </style>

<?php wp_reset_query(); ?>

<div class="page-content"> 
    <div class="row">
        <h1 class="page-title"><?php the_title(); ?></h1>
    </div>
    
    <?php include("inc/flexible-content.php") ?>

    <?php include("inc/tabs.php") ?>

    <?php include("inc/riverflow.php") ?>
</div>

<?php get_footer(); ?>