<?php
// Register Custom Post Type Game Build
// Post Type Key: gamebuild
function create_gamebuild_cpt() {

	$labels = array(
		'name' => __( 'Game Builds', 'Post Type General Name', 'textdomain' ),
		'singular_name' => __( 'Game Build', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => __( 'Game Builds', 'textdomain' ),
		'name_admin_bar' => __( 'Game Build', 'textdomain' ),
		'archives' => __( 'Game Build Archives', 'textdomain' ),
		'attributes' => __( 'Game Build Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Game Build:', 'textdomain' ),
		'all_items' => __( 'All Game Builds', 'textdomain' ),
		'add_new_item' => __( 'Add New Game Build', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Game Build', 'textdomain' ),
		'edit_item' => __( 'Edit Game Build', 'textdomain' ),
		'update_item' => __( 'Update Game Build', 'textdomain' ),
		'view_item' => __( 'View Game Build', 'textdomain' ),
		'view_items' => __( 'View Game Builds', 'textdomain' ),
		'search_items' => __( 'Search Game Build', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Game Build', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Game Build', 'textdomain' ),
		'items_list' => __( 'Game Builds list', 'textdomain' ),
		'items_list_navigation' => __( 'Game Builds list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Game Builds list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Game Build', 'textdomain' ),
		'description' => __( 'A Custom Post Type for Game Builds', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-category',
		'supports' => array('title', 'editor', 'excerpt', ),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'gamebuild', $args );

}
add_action( 'init', 'create_gamebuild_cpt', 0 );
