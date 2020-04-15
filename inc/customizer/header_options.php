<?php
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$section    = 'header_options';

$priority = 1;

Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
	'type'        => 'radio',
	'settings'    => 'header_layout',
	'label'       => esc_html__( 'Header Layout', 'pudla' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'    => '1',
	'choices'     => array(
		'1' => esc_attr__( 'Header 1', 'pudla' ),
		'2' => esc_attr__( 'Header 2', 'pudla' ),
		'3' => esc_attr__( 'Header 3', 'pudla' ),
		'4' => esc_attr__( 'Header 4', 'pudla' ),
		'5' => esc_attr__( 'Header 5', 'pudla' ),
	),
) );


Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
	'type'    		=> 'code',
	'settings'		=> 'header_ads_code',
	'label'		  	=> esc_html__( 'Header ad code', 'pudla' ),
	'description' 	=> esc_html__( 'Display when header layout is selected 2 or 3', 'pudla' ),
	'section'     	=> $section,
	'priority'    	=> $priority ++,
	'default'     	=> '',
	'choices'     	=> array(
		'language' 	=> 'html',
	),
) );

Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
	'type'        => 'toggle',
	'settings'    => 'show_social_links',
	'label'       => esc_html__( 'Show Social Links Hide/Show', 'pudla' ),
	'section'     => $section,
	'default'     => '1',
	'priority'    => $priority ++,
) );

Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
	'type'        => 'toggle',
	'settings'    => 'show_search_btn',
	'label'       => esc_html__( 'Show Search Button Hide/Show', 'pudla' ),
	'section'     => $section,
	'default'     => '1',
	'priority'    => $priority ++,
) );

Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
	'type'        => 'toggle',
	'settings'    => 'search_only_from_recipe',
	'label'       => esc_html__( 'Search Only From Recipes No/Yes', 'pudla' ),
	'section'     => $section,
	'default'     => '0',
	'priority'    => $priority ++,
	'active_callback'    => array( 
		array(
			'setting'  => 'show_search_btn',
			'operator' => '=',
			'value'    =>  1,
		),
	),
) );

