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


// Add featured image support to this theme
add_theme_support('post-thumbnails');

//
define('UPLOADS', 'media');
add_filter( 'http_request_host_is_external', '__return_true' );

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
        $terms = wp_get_object_terms( $post->ID, 'department' );
        if( $terms ){
            return str_replace( '%department%' , $terms[0]->slug , $post_link );
        }
    }
    return $post_link;
}
add_filter( 'post_type_link', 'wpa_programs_permalinks', 1, 2 );

function wpa_faculty_permalinks( $post_link, $post ){
    if ( is_object( $post ) && $post->post_type == 'faculty' ){
        $terms = wp_get_object_terms( $post->ID, 'team' );
        if( $terms ){
            return str_replace( '%team%' , $terms[0]->slug , $post_link );
        }
    }
    return $post_link;
}
add_filter( 'post_type_link', 'wpa_faculty_permalinks', 1, 2 );

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
// add_action('admin_menu', 'remove_menus');

// Image Sizes

add_image_size( 'square_img', 300, 300, true );
add_image_size( 'thumb_carousel', 150, 150, true );

// Custom styles - admin

add_action('admin_enqueue_scripts', function() {
    wp_enqueue_style( 'acf_styles', get_template_directory_uri() . '/css/admin.css');
});

















function jt_register_meta() {
    register_meta( 'term', 'color', 'jt_sanitize_hex' );
}
add_action( 'init', 'jt_register_meta' );

function jt_sanitize_hex( $color ) {
    $color = ltrim( $color, '#' );
    return preg_match( '/([A-Fa-f0-9]{3}){1,2}$/', $color ) ? $color : '';
}

function jt_get_term_color( $term_id, $hash = false ) {
    $color = get_term_meta( $term_id, 'color', true );
    $color = jt_sanitize_hex( $color );

    return $hash && $color ? "#{$color}" : $color;
}


function ccp_new_term_color_field() {

    wp_nonce_field( basename( __FILE__ ), 'jt_term_color_nonce' ); ?>

    <div class="form-field jt-term-color-wrap">
        <label for="jt-term-color"><?php _e( 'Color', 'jt' ); ?></label>
        <input type="text" name="jt_term_color" id="jt-term-color" value="" class="jt-color-field" data-default-color="#ffffff" />
    </div>
<?php }

add_action( 'department_add_form_fields', 'ccp_new_term_color_field' );





function ccp_edit_term_color_field( $term ) {

    $default = '#ffffff';
    $color   = jt_get_term_color( $term->term_id, true );

    if ( ! $color )
        $color = $default; ?>

    <tr class="form-field jt-term-color-wrap">
        <th scope="row"><label for="jt-term-color"><?php _e( 'Color', 'jt' ); ?></label></th>
        <td>
            <?php wp_nonce_field( basename( __FILE__ ), 'jt_term_color_nonce' ); ?>
            <input type="text" name="jt_term_color" id="jt-term-color" value="<?php echo esc_attr( $color ); ?>" class="jt-color-field" data-default-color="<?php echo esc_attr( $default ); ?>" />
        </td>
    </tr>
<?php }
add_action( 'department_edit_form_fields', 'ccp_edit_term_color_field' );



function jt_save_term_color( $term_id ) {
    if ( ! isset( $_POST['jt_term_color_nonce'] ) || ! wp_verify_nonce( $_POST['jt_term_color_nonce'], basename( __FILE__ ) ) )
        return;

    $old_color = jt_get_term_color( $term_id );
    $new_color = isset( $_POST['jt_term_color'] ) ? jt_sanitize_hex( $_POST['jt_term_color'] ) : '';

    if ( $old_color && '' === $new_color )
        delete_term_meta( $term_id, 'color' );

    else if ( $old_color !== $new_color )
        update_term_meta( $term_id, 'color', $new_color );
}
add_action( 'edit_department',   'jt_save_term_color' );
add_action( 'create_department', 'jt_save_term_color' );




function jt_edit_term_columns( $columns ) {
    $columns['color'] = __( 'Color', 'jt' );
    return $columns;
}
add_filter( 'manage_edit-department_columns', 'jt_edit_term_columns' );




function jt_manage_term_custom_column( $out, $column, $term_id ) {
    if ( 'color' === $column ) {
        $color = jt_get_term_color( $term_id, true );

        if ( ! $color )
            $color = '#ffffff';
        $out = sprintf( '<span class="color-block" style="background:%s; width: 30px; height: 30px; display: block;">&nbsp;</span>', esc_attr( $color ) );
    }
    return $out;
}
add_filter( 'manage_department_custom_column', 'jt_manage_term_custom_column', 10, 3 );
















//Image sizes

add_image_size( 'hero_banner', 1920, 800, true );
add_image_size( 'blog_images', 350, 350, true );























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