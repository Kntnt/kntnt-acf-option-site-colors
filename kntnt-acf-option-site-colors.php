<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt Advanced Custom Field Option Page For Site Colors
 * Plugin URI:        https://www.kntnt.com/
 * Description:       Allows ACF to add site color settings to the Apperence menu.
 * Version:           1.0.0
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */

defined( 'ABSPATH' ) || die;

add_action( 'acf/init', function () {

	acf_add_options_page( [
		'parent_slug' => 'themes.php',
		'menu_slug' => 'theme-color-scheme',
		'menu_title' => __( 'Color Scheme', 'kntnt-acf-option-site-colors' ),
		'page_title' => __( 'Theme color scheme', 'kntnt-acf-option-site-colors' ),
		'capability' => 'edit_theme_options',
		'redirect' => false,
	] );

} );


