<?php 

/**
 *
 * @package WordPress
 * @subpackage YouandCo Theme
 * @since YouandCo Theme
 */

// Include Custom Posts and Taxonomies
include 'custom_posts/programs.php';
include 'custom_posts/faculty.php';
include 'custom_posts/events.php';
include 'custom_posts/nictalks.php';
include 'custom_posts/bringon.php';
include 'custom_posts/campuslife.php';

flush_rewrite_rules();

// Add menu functionality to this theme
add_theme_support( 'menus' );

// Set each menu id
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
          'main-nav' => 'Main Navigation',
		  'secondary-nav' => 'Secondary Navigation',
          'footer-nav' => 'Footer Navigation'
		)
	);
}

function display_taxonomy_terms($post_type, $display = false) {
    global $post;
    $term_list = wp_get_post_terms($post->ID, $post_type, array('fields' => 'names'));
 
    if($display == false) {
        echo $term_list[0];
    }elseif($display == 'return') {
        return  $term_list[0];
    }
}

function wpa_programs_permalinks( $post_link, $post ){
    if ( is_object( $post ) && $post->post_type == 'programs' ){
        $terms = wp_get_object_terms( $post->ID, 'school' );
        if( $terms ){
            return str_replace( '%school%' , $terms[0]->slug , $post_link );
        }
    }
    return $post_link;
}
add_filter( 'post_type_link', 'wpa_programs_permalinks', 1, 2 );

// Hide Posts from Menu

function remove_menus () {
    global $menu;
    $restricted = array(__('Posts'));
    end ($menu);
    while (prev($menu)){
        $value = explode(' ',$menu[key($menu)][0]);
        if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
    }
}
add_action('admin_menu', 'remove_menus');

// Image Sizes

add_image_size( 'square_img', 300, 300, true );
add_image_size( 'thumb_carousel', 150, 150, true );

// Custom styles - admin

add_action('admin_enqueue_scripts', function() {
    wp_enqueue_style( 'acf_styles', get_template_directory_uri() . '/css/admin.css');
});

// Add class to body

function page_bodyclass() {
    global $wp_query;
    $page = '';
    if (is_front_page() ) {
           $page = 'home';
    } elseif (is_page()) {
       $page = $wp_query->query_vars["pagename"];
    }
    if ($page)
        echo 'class= "'. $page. '"';
}

?>