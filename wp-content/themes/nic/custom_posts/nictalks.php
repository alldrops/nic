<?php
add_action('init', 'nictalks_post_type');
// add_action( 'init', 'create_school_taxonomy', 0 );

if(!(function_exists('nictalks_post_type'))){ //We need this conditional to be able to overwrite the function as a blank function in the child theme
	function nictalks_post_type() {
	 
		$labels = array(
			'name' => _x('NIC Talks', 'post type nic-talks'),
			'singular_name' => _x('Event', 'post type singular nic-talks'),
			'add_new' => _x('Add new NIC Talk', 'nic-talk'),
			'add_new_item' => __('Add new NIC Talk'),
			'edit_item' => __('Edit NIC Talk'),
			'new_item' => __('New NIC Talk'),
			'view_item' => __('View NIC Talk'),
			'search_items' => __('Search NIC Talks'),
			'not_found' =>  __('Nothing found'),
			'not_found_in_trash' => __('Nothing found in Trash'),
			'parent_item_colon' => '',
			'menu_name' => 'NIC Talks'
		);
	 
		$args = array(
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array('with_front' => false, 'slug' => 'nic-talks/'),
			// 'taxonomies' => array( 'school'),
			'capability_type' => 'post',
			'hierarchical' => false,
			'menu_position' => 7,
			'menu_icon' => 'dashicons-id',
			'show_in_nav_menus' => true,
			'supports' => array('title', 'taxonomy', 'thumbnail', 'editor', 'excerpt')
		  ); 
	 
		register_post_type( 'nic-talks' , $args );
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