<?php
/**
 * Post Types
 * This file registers any custom post types
 */
 
function foothumbnailgallery_cpt() {

	$labels = array(
		'name'                => _x( 'FooThumbnail Galleries', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'FooThumbnail Gallery', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'FooThumbnails', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Thumbnail Gallery', 'text_domain' ),
		'all_items'           => __( 'FooThumbnails', 'text_domain' ),
		'view_item'           => __( 'View Thumbnail Gallery', 'text_domain' ),
		'add_new_item'        => __( 'Add New Thumbnail Gallery', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Thumbnail Gallery', 'text_domain' ),
		'update_item'         => __( 'Update Thumbnail Gallery', 'text_domain' ),
		'search_items'        => __( 'Search Thumbnail Galleries', 'text_domain' ),
		'not_found'           => __( 'No Thumbnail Galleries found', 'text_domain' ),
		'not_found_in_trash'  => __( 'No Thumbnail Galleries in Trash', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                => 'foothumbnail-gallery',
		'with_front'          => true,
		'pages'               => false,
		'feeds'               => false,
	);
	$args = array(
		'label'               => __( 'foothumbnailgallery', 'text_domain' ),
		'description'         => __( 'Thumb Galleries', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'slug', 'revisions' ),
		'hierarchical'        => false,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => false,
		'show_in_admin_bar'   => true,
		'menu_position'       => 10,
		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => false,
		'rewrite'             => $rewrite,
		'capability_type'     => 'post',
	);
	register_post_type( 'foothumbnailgallery', $args );

}

// Hook into the 'init' action
add_action( 'init', 'foothumbnailgallery_cpt', 0 );