<?php

/*
|-----------------------------------------
| Configuração do tema
|-----------------------------------------
*/

if(!defined('WP_THEME_URL')) {
  define( 'WP_THEME_URL', get_template_directory_uri());
}

if(!defined('WP_STYLE_URL')) {
  define( 'WP_STYLE_URL', get_stylesheet_uri());
}

if(!defined('WP_SCRIPT_URL')) {
  define( 'WP_SCRIPT_URL', WP_THEME_URL . '/build/js');
}

if(!defined('WP_IMAGE_URL')) {
  define( 'WP_IMAGE_URL', WP_THEME_URL . '/build/img');
}

$app_path = get_template_directory() . '/app/';

require_once( $app_path . 'theme-functions.php' );
require_once( $app_path . 'theme-setup.php' );