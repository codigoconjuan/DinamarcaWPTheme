<?php

// Register Testimonial Post Type
function testimonials_post_type() {

	$labels = array(
		'name'                => _x( 'Testimonials', 'Post Type General Name', 'dinamarca' ),
		'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'dinamarca' ),
		'menu_name'           => __( 'Testimonials', 'dinamarca' ),
		'name_admin_bar'      => __( 'Testimonials', 'dinamarca' ),
		'parent_item_colon'   => __( 'Parent Item:', 'dinamarca' ),
		'all_items'           => __( 'All Testimonials', 'dinamarca' ),
		'add_new_item'        => __( 'Add New Testimonial', 'dinamarca' ),
		'add_new'             => __( 'Add New', 'dinamarca' ),
		'new_item'            => __( 'New Testimonial', 'dinamarca' ),
		'edit_item'           => __( 'Edit Testimonial', 'dinamarca' ),
		'update_item'         => __( 'Update Testimonial', 'dinamarca' ),
		'view_item'           => __( 'View Testimonial', 'dinamarca' ),
		'search_items'        => __( 'Search Testimonial', 'dinamarca' ),
		'not_found'           => __( 'Not found', 'dinamarca' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'dinamarca' ),
	);
	$args = array(
		'label'               => __( 'testimonials', 'dinamarca' ),
		'description'         => __( 'Add Testimonials to your site', 'dinamarca' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 6,
		'menu_icon'           => 'dashicons-format-chat',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'testimonials', $args );

}

// Hook into the 'init' action
add_action( 'init', 'testimonials_post_type', 0 );


// Register Slider Post Type
function slider_post_type() {

	$labels = array(
		'name'                => _x( 'Slider', 'Post Type General Name', 'dinamarca' ),
		'singular_name'       => _x( 'Slider', 'Post Type Singular Name', 'dinamarca' ),
		'menu_name'           => __( 'Slider', 'dinamarca' ),
		'name_admin_bar'      => __( 'Slider', 'dinamarca' ),
		'parent_item_colon'   => __( 'Parent Slider', 'dinamarca' ),
		'all_items'           => __( 'All Sliders', 'dinamarca' ),
		'add_new_item'        => __( 'Add New Slider', 'dinamarca' ),
		'add_new'             => __( 'Add New', 'dinamarca' ),
		'new_item'            => __( 'New Slide', 'dinamarca' ),
		'edit_item'           => __( 'Edit', 'dinamarca' ),
		'update_item'         => __( 'Update', 'dinamarca' ),
		'view_item'           => __( 'View', 'dinamarca' ),
		'search_items'        => __( 'Search', 'dinamarca' ),
		'not_found'           => __( 'Not found', 'dinamarca' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'dinamarca' ),
	);
	$args = array(
		'label'               => __( 'slider', 'dinamarca' ),
		'description'         => __( 'Add an Slider', 'dinamarca' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'thumbnail', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 7,
		'menu_icon'           => 'dashicons-images-alt',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'slider', $args );

}

// Hook into the 'init' action
add_action( 'init', 'slider_post_type', 0 );