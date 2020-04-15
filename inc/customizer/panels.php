<?php
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$priority = 2;

Pudla_Kirki::add_section( 'general_options', array(
	'priority' => $priority ++,
	'title'    => esc_html__( 'General Options', 'pudla' ),
) );

Pudla_Kirki::add_section( 'blog_options', array(
	'priority' => $priority ++,
	'title'    => esc_html__( 'Blog Options', 'pudla' ),
) );

Pudla_Kirki::add_section( 'layout_options', array(
	'priority' => $priority ++,
	'title'    => esc_html__( 'Layout Options', 'pudla' ),
) );


Pudla_Kirki::add_section( 'header_options', array(
	'priority' => $priority ++,
	'title'    => esc_html__( 'Header Options', 'pudla' ),
) );

Pudla_Kirki::add_section( 'footer_options', array(
	'priority' => $priority ++,
	'title'    => esc_html__( 'Footer Options', 'pudla' ),
) );

Pudla_Kirki::add_section( 'social_links', array(
	'priority' => $priority ++,
	'title'    => esc_html__( 'Social Media Links', 'pudla' ),
) );

Pudla_Kirki::add_section( 'custom_code', array(
	'priority' => $priority ++,
	'title'    => esc_html__( 'Custom JS Code', 'pudla' ),
) );


// Add section and settings
require_once PUDLA_THEME_PATH . '/inc/customizer/general_options.php';
require_once PUDLA_THEME_PATH . '/inc/customizer/recipe_options.php';
require_once PUDLA_THEME_PATH . '/inc/customizer/layout_options.php';
require_once PUDLA_THEME_PATH . '/inc/customizer/header_options.php';
require_once PUDLA_THEME_PATH . '/inc/customizer/blog_options.php';
require_once PUDLA_THEME_PATH . '/inc/customizer/social_links.php';
require_once PUDLA_THEME_PATH . '/inc/customizer/footer_options.php';
require_once PUDLA_THEME_PATH . '/inc/customizer/custom_code.php';