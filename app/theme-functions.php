<?php

/*
|-----------------------------------------
| Back-end
|-----------------------------------------
*/

/**
 * Customiza o logo no login
 */
function custom_logo_login() {
	echo '
		<style  type="text/css">
			h1 a {
				background-image: url(' . WP_IMAGE_URL . '/login.png) !important;
			}
		</style>
	';
}

/**
 * Customiza a URL da logo no login
 */
function custom_logo_login_url() {
	return home_url();
}

/**
 * Customiza o titulo da logo no login
 */
function custom_logo_login_title() {
    return get_bloginfo( 'name' );
}

/**
 * Customiza o rodapé no admin
 */
function custom_admin_footer() {
	echo '<a target="_blank" href="http://www.seudominioaqui.com.br">Nome da empresa</a> &copy; ' . date( 'Y' );
}

/**
 * Esconde a versão do WordPress no admin
 */
function hide_footer_version() {
	return '';
}

/**
 * Remove o logo do WordPress da barra de topo
 */
function remove_logo_toolbar( $wp_toolbar ) {
	global $wp_admin_bar;
	$wp_toolbar->remove_node( 'wp-logo' );
}

/**
 * Esconde links desnecessários do menu lateral no admin
 */
function hide_admin_menu_links() {
	// remove_menu_page( 'tools.php' );
	// remove_submenu_page( 'themes.php', 'theme-editor.php' );
}

/**
 * Remove widgets do dashboard
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
 * Registra e coloca os scripts na fila para execução
 */
function custom_scripts() {
	if( !is_admin() ) {
		wp_deregister_script( 'jquery' );
		
		wp_register_script( 'jquery', WP_SCRIPT_URL . '/vendor/jquery-2.0.3.min.js', array(), null, true );
		wp_register_script( 'app', WP_SCRIPT_URL . '/app.min.js', array( 'jquery' ), null, true );

		wp_enqueue_script( 'app' );
	}
}

/**
 * Otimização para o título das páginas
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
	$filtered_title .= ( 2 <= $paged || 2 <= $page ) ? ' | ' . sprintf( __( 'Página %s' ), max( $paged, $page ) ) : '';

	return $filtered_title;
}

?>
