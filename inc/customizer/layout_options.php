<?php
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$section    = 'layout_options';

$priority = 1;

Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
	'type'        => 'radio',
	'settings'    => 'recipe_home_page_layout',
	'label'       => esc_html__( 'Recipe Home', 'pudla' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'    => 'with-sidebar',
	'choices'     => array(
		'no-sidebar'   => esc_attr__( 'No Sidebar', 'pudla' ),
		'with-sidebar' => esc_attr__( 'With Sidebar', 'pudla' ),
	),
) );

Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
	'type'        => 'radio',
	'settings'    => 'recipe_archive_page_layout',
	'label'       => esc_html__( 'Recipe Archive', 'pudla' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'    => 'with-sidebar',
	'choices'     => array(
		'no-sidebar'   => esc_attr__( 'No Sidebar', 'pudla' ),
		'with-sidebar' => esc_attr__( 'With Sidebar', 'pudla' ),
	),
) );


Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
	'type'        => 'radio',
	'settings'    => 'recipe_single_page_layout',
	'label'       => esc_html__( 'Recipe Single', 'pudla' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'    => 'with-sidebar',
	'choices'     => array(
		'no-sidebar'   => esc_attr__( 'No Sidebar', 'pudla' ),
		'with-sidebar' => esc_attr__( 'With Sidebar', 'pudla' ),
	),
) );

Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
	'type'        => 'radio',
	'settings'    => 'blog_home_page_layout',
	'label'       => esc_html__( 'Blog Home', 'pudla' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'    => 'with-sidebar',
	'choices'     => array(
		'no-sidebar'   => esc_attr__( 'No Sidebar', 'pudla' ),
		'with-sidebar' => esc_attr__( 'With Sidebar', 'pudla' ),
	),
) );

Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
	'type'        => 'radio',
	'settings'    => 'blog_archive_page_layout',
	'label'       => esc_html__( 'Blog Archive', 'pudla' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'    => 'with-sidebar',
	'choices'     => array(
		'no-sidebar'   => esc_attr__( 'No Sidebar', 'pudla' ),
		'with-sidebar' => esc_attr__( 'With Sidebar', 'pudla' ),
	),
) );


Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
	'type'        => 'radio',
	'settings'    => 'blog_single_page_layout',
	'label'       => esc_html__( 'Blog Single', 'pudla' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'    => 'with-sidebar',
	'choices'     => array(
		'no-sidebar'   => esc_attr__( 'No Sidebar', 'pudla' ),
		'with-sidebar' => esc_attr__( 'With Sidebar', 'pudla' ),
	),
) );

Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
	'type'        => 'radio',
	'settings'    => 'page_layout',
	'label'       => esc_html__( 'Page Layout', 'pudla' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'    => 'no-sidebar',
	'choices'     => array(
		'no-sidebar'   => esc_attr__( 'No Sidebar', 'pudla' ),
		'with-sidebar' => esc_attr__( 'With Sidebar', 'pudla' ),
	),
) );

Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
	'type'        => 'radio',
	'settings'    => 'search_page_layout',
	'label'       => esc_html__( 'Search Page Layout', 'pudla' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'    => 'with-sidebar',
	'choices'     => array(
		'no-sidebar'   => esc_attr__( 'No Sidebar', 'pudla' ),
		'with-sidebar' => esc_attr__( 'With Sidebar', 'pudla' ),
	),
) );
