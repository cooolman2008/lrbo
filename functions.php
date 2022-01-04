<?php
/**
 * Lrbo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Lrbo
 */


if ( ! defined( 'LRBO_THEME_DIR_URL' ) ) {
	define( 'LRBO_THEME_DIR_URL', get_template_directory_uri() );
}

if ( ! defined( 'LRBO_THEME_DIR_PATH' ) ) {
	define( 'LRBO_THEME_DIR_PATH', get_template_directory() );
}

if ( ! defined( 'LRBO_THEME_URI' ) ) {
	define( 'LRBO_THEME_URI', get_stylesheet_directory_uri() );
}

wp_enqueue_script( 'lrbo-script', LRBO_THEME_DIR_URL . "/assets/js/lrbo.js", array(), '1.0', true );

wp_localize_script( 'lrbo-script', 'marker', LRBO_THEME_DIR_URL . "/assets/images/marker.png" );

require LRBO_THEME_DIR_PATH . '/helper_functions.php';
