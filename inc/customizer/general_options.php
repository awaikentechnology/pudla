<?php
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$section    = 'general_options';

$priority = 1;

Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
	'type'        => 'toggle',
	'settings'    => 'show_preloader',
	'label'       => esc_html__( 'Preloader Hide/Show', 'pudla' ),
	'description' => esc_html__( 'Whether to display preloader, When the page being loading', 'pudla' ),
	'section'     => $section,
	'default'     => '0',
	'priority'    => $priority ++,
) );

Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
	'type'        => 'toggle',
	'settings'    => 'smooth_scrolling',
	'label'       => esc_html__( 'Smooth Scrolling Disable/Enable', 'pudla' ),
	'section'     => $section,
	'default'     => '0',
	'priority'    => $priority ++,
) );