<?php
add_action('init', 'events_post_type');
// add_action( 'init', 'create_school_taxonomy', 0 );

if(!(function_exists('events_post_type'))){ //We need this conditional to be able to overwrite the function as a blank function in the child theme
	function events_post_type() {
	 
		$labels = array(
			'name' => _x('Events', 'post type events'),
			'singular_name' => _x('Event', 'post type singular events'),
			'add_new' => _x('Add new event', 'event'),
			'add_new_item' => __('Add new event'),
			'edit_item' => __('Edit event'),
			'new_item' => __('New event'),
			'view_item' => __('View event'),
			'search_items' => __('Search events'),
			'not_found' =>  __('Nothing found'),
			'not_found_in_trash' => __('Nothing found in Trash'),
			'parent_item_colon' => '',
			'menu_name' => 'Events'
		);
	 
		$args = array(
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array('with_front' => false, 'slug' => 'events/'),
			// 'taxonomies' => array( 'school'),
			'capability_type' => 'post',
			'hierarchical' => false,
			'menu_position' => 8,
			'menu_icon' => 'dashicons-location-alt',
			'show_in_nav_menus' => true,
			'supports' => array('title', 'taxonomy', 'thumbnail', 'editor', 'excerpt')
		  ); 
	 
		register_post_type( 'events' , $args );
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