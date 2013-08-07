<?php

/*
|-----------------------------------------
| Back-end
|-----------------------------------------
*/

/**
 * Custom logo
 */
function custom_logo_login() {
	echo '
		<style  type="text/css"> 
			h1 a { 
				background-image: url(' . get_template_directory_uri() . '/build/img/login.png) !important; 
			} 
		</style>
	';
}

/**
 * Custom logo URL
 */
function custom_logo_login_url() {
	return home_url();
}

/**
 * Custom logo title
 */
function custom_logo_login_title() {
    return get_bloginfo( 'name' );
}

/**
 * Custom admin footer
 */
function custom_admin_footer() {
	echo '<a target="_blank" href="http://www.yourcompany.com/">Company name</a> &copy; ' . date( 'Y' );
}

/**
 * Hide WP version on admin footer
 */
function hide_footer_version() {
	return '';
}

/**
 * Remove WP logo from admin toolbar
 */
function remove_logo_toolbar( $wp_toolbar ) {
	global $wp_admin_bar;
	$wp_toolbar->remove_node( 'wp-logo' );
}

/**
 * Hide unecessary menu links on admin sidebar
 */
function hide_admin_menu_links() {
	// remove_menu_page( 'tools.php' );
	// remove_submenu_page( 'themes.php', 'theme-editor.php' );
}

/** 
 * Remove default dashboard widgets
 */
function remove_dashboard_widgets() {
	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
}

/*
|-----------------------------------------
| Front-end
|-----------------------------------------
*/

/**
 * Register and Enqueue scripts
 */
function custom_scripts() {
	if( !is_admin() ) {
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', get_template_directory_uri() . '/build/js/vendor/jquery-2.0.3.min.js', array(), null, true );
		wp_register_script( 'app', get_template_directory_uri() . '/build/js/app.min.js', array( 'jquery' ), null, true );
		wp_enqueue_script( 'app' );
	}
}

/**
 * Filtering wp_title for better SEO
 * http://bavotasan.com/2012/filtering-wp_title-for-better-seo/
 */
function filter_wp_title( $title ) {
	global $page, $paged;

	if ( is_feed() ) {
		return $title;
	}

	$site_description = get_bloginfo( 'description' );

	$filtered_title  = $title . get_bloginfo( 'name' );
	$filtered_title .= ( ! empty( $site_description ) && ( is_home() || is_front_page() ) ) ? ' | ' . $site_description: '';
	$filtered_title .= ( 2 <= $paged || 2 <= $page ) ? ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) ) : '';

	return $filtered_title;
}

?>