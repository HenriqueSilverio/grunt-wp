<?php

function theme_setup() {

	/*
	|-----------------------------------------
	| Back-end
	|-----------------------------------------
	*/

	// Remove unecessary wp head tags
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'wp_generator' );
	remove_action( 'wp_head', 'feed_links', 2 );
	remove_action( 'wp_head', 'wp_shortlink_wp_head' );
	remove_action( 'wp_head', 'parent_post_rel_link' );
	remove_action( 'wp_head', 'start_post_rel_link' );
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head' );

	// Enable post thumbnails
	add_theme_support( 'post-thumbnails' );

	// Custom image sizes
	// add_image_size( $name, $width = 0, $height = 0, $crop = false );

	// Custom logo
	add_action( 'login_head', 'custom_logo_login' );

	// Custom logo url
	add_filter( 'login_headerurl', 'custom_logo_login_url' );

	// Custom logo title
	add_filter( 'login_headertitle', 'custom_logo_login_title' );

	// Custom admin footer
	add_filter( 'admin_footer_text', 'custom_admin_footer' );

	// Hide WP version on admin footer
	add_filter( 'update_footer', 'hide_footer_version', 999 );

	// Remove WP logo from admin toolbar
	add_action( 'admin_bar_menu', 'remove_logo_toolbar', 999 );

	// Hide unecessary menu links on admin sidebar
	add_action( 'admin_menu', 'hide_admin_menu_links' );

	// Remove default dashboard widgets
	add_action( 'wp_dashboard_setup', 'remove_dashboard_widgets' );

	/*
	|-----------------------------------------
	| Front-end
	|-----------------------------------------
	*/

	// Register and Enqueue scripts
	add_action( 'wp_enqueue_scripts', 'custom_scripts' );

	// Filtering wp_title for better SEO
	add_filter( 'wp_title', 'filter_wp_title' );

}

add_action( 'after_setup_theme', 'theme_setup' );

?>