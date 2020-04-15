<?php
/**
 * Customizer
 *
 * @package WordPress
 * @param object $wp_customize
 */
 
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Remove Unused Sections
 * =============================
 */
function pudla_remove_customizer_sections( $wp_customize ) {
	$wp_customize->remove_section( 'nav' );
	$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_section( 'header_image' );
	$wp_customize->remove_section( 'static_front_page' );
	$wp_customize->remove_control( 'page_for_posts' );
	$wp_customize->get_section('title_tagline')->priority  = 1;
}

add_action( 'customize_register', 'pudla_remove_customizer_sections' );

/**
 * Add style for admin
 */
function pudla_customizer_style() {
	echo '<style>
		.kirki-customizer-loading-wrapper {
			background-image: none !important;
		}
		</style>';
}
add_action( 'wp_head', 'pudla_customizer_style' );


/**
 * General setups
 * ==============
 */
Pudla_Kirki::add_config( PUDLA_CONFIG_ID, array(
	'option_type' => 'theme_mod',
	'capability'  => 'edit_theme_options',
	'disable_output'  => true,
) );


// Add panels
require_once PUDLA_THEME_PATH . '/inc/customizer/panels.php';