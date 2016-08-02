<?php
add_action('init', 'faculty_post_type');
add_action( 'init', 'create_team_taxonomy', 0 );

if(!(function_exists('faculty_post_type'))){ //We need this conditional to be able to overwrite the function as a blank function in the child theme
	function faculty_post_type() {
	 
		$labels = array(
			'name' => _x('Faculty', 'post type faculty'),
			'singular_name' => _x('Faculty', 'post type singular faculty'),
			'add_new' => _x('Add new faculty member', 'faculty'),
			'add_new_item' => __('Add new faculty member'),
			'edit_item' => __('Edit faculty member'),
			'new_item' => __('New faculty member'),
			'view_item' => __('View faculty member'),
			'search_items' => __('Search faculty'),
			'not_found' =>  __('Nothing found'),
			'not_found_in_trash' => __('Nothing found in Trash'),
			'parent_item_colon' => '',
			'menu_name' => 'Faculty'
		);
	 
		$args = array(
			'labels' => $labels,
			'public' => true,
			'menu_icon' => 'dashicons-menu',
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array('with_front' => false, 'slug' => 'faculty/%team%'),
			'taxonomies' => array( 'team'),
			'capability_type' => 'post',
			'hierarchical' => false,
			'menu_position' => 10,
			'menu_icon' => 'dashicons-groups',
			'show_in_nav_menus' => true,
			'supports' => array('title', 'taxonomy', 'thumbnail', 'editor', 'excerpt')
		  ); 
	 
		register_post_type( 'faculty' , $args );
		flush_rewrite_rules();
	}
}
function create_team_taxonomy() {
    register_taxonomy(
        'team',
        'faculty',
        array(
            'labels' => array(
                'name' => 'Teams',
                'add_new_item' => 'Add new team',
                'new_item_name' => "New team"
            ),
            'show_ui' => true,
            'show_in_nav_menus' => true,
            'show_admin_column' => true,
            'show_tagcloud' => false,
            'hierarchical' => true,
            'rewrite' => array( 'slug' => 'faculty', 'with_front' => false )
        )
    );
}