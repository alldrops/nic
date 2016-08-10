<?php
add_action('init', 'bringon_post_type');
// add_action( 'init', 'create_school_taxonomy', 0 );

if(!(function_exists('bringon_post_type'))){ //We need this conditional to be able to overwrite the function as a blank function in the child theme
	function bringon_post_type() {
	 
		$labels = array(
			'name' => _x('Bring On The Success', 'post type bring-on'),
			'singular_name' => _x('Bring On The Success', 'post type singular bring-on'),
			'add_new' => _x('Add new story', 'bring-on'),
			'add_new_item' => __('Add new story'),
			'edit_item' => __('Edit story'),
			'new_item' => __('New story'),
			'view_item' => __('View story'),
			'search_items' => __('Search stories'),
			'not_found' =>  __('Nothing found'),
			'not_found_in_trash' => __('Nothing found in Trash'),
			'parent_item_colon' => '',
			'menu_name' => 'Bring On The Success'
		);
	 
		$args = array(
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array('with_front' => false, 'slug' => 'bring-on'),
			// 'taxonomies' => array( 'school'),
			'capability_type' => 'post',
			'hierarchical' => false,
			'menu_position' => 4,
			'menu_icon' => 'dashicons-star-filled',
			'show_in_nav_menus' => true,
			'supports' => array('title', 'taxonomy', 'thumbnail', 'editor', 'excerpt')
		  ); 
	 
		register_post_type( 'bring-on' , $args );
		flush_rewrite_rules();
	}
}
// function create_school_taxonomy() {
//     register_taxonomy(
//         'school',
//         'events',
//         array(
//             'labels' => array(
//                 'name' => 'Schools',
//                 'add_new_item' => 'Add new school',
//                 'new_item_name' => "New school"
//             ),
//             'show_ui' => true,
//             'show_in_nav_menus' => true,
//             'show_admin_column' => true,
//             'show_tagcloud' => false,
//             'hierarchical' => true,
//             'rewrite' => array( 'slug' => 'events', 'with_front' => false )
//         )
//     );
// }