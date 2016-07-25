<?php
add_action('init', 'programs_post_type');
add_action( 'init', 'create_school_taxonomy', 0 );

if(!(function_exists('programs_post_type'))){ //We need this conditional to be able to overwrite the function as a blank function in the child theme
	function programs_post_type() {
	 
		$labels = array(
			'name' => _x('Programs', 'post type programs'),
			'singular_name' => _x('Program', 'post type singular programs'),
			'add_new' => _x('Add new program', 'program'),
			'add_new_item' => __('Add new program'),
			'edit_item' => __('Edit program'),
			'new_item' => __('New program'),
			'view_item' => __('View program'),
			'search_items' => __('Search programs'),
			'not_found' =>  __('Nothing found'),
			'not_found_in_trash' => __('Nothing found in Trash'),
			'parent_item_colon' => '',
			'menu_name' => 'Programs'
		);
	 
		$args = array(
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array('with_front' => false, 'slug' => 'programs/%school%'),
			// 'rewrite' => array('with_front' => false, 'slug' => 'programs'),
			'taxonomies' => array( 'school'),
			'capability_type' => 'post',
			'hierarchical' => false,
			'menu_position' => 9,
			'menu_icon' => 'dashicons-book-alt',
			'show_in_nav_menus' => true,
			'supports' => array('title', 'taxonomy', 'thumbnail', 'editor', 'excerpt')
		  ); 
	 
		register_post_type( 'programs' , $args );
		flush_rewrite_rules();
	}
}
function create_school_taxonomy() {
    register_taxonomy(
        'school',
        'programs',
        array(
            'labels' => array(
                'name' => 'Schools',
                'add_new_item' => 'Add new school',
                'new_item_name' => "New school"
            ),
            'show_ui' => true,
            'show_in_nav_menus' => true,
            'show_admin_column' => true,
            'show_tagcloud' => false,
            'hierarchical' => true,
            'rewrite' => array( 'slug' => 'programs', 'with_front' => false )
        )
    );
}