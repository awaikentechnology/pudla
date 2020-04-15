<?php
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$section    = 'footer_options';
$priority = 1;

Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
	'type'        => 'radio',
	'settings'    => 'footer_layout',
	'label'       => esc_html__( 'Footer Layout', 'pudla' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'    => '1',
	'choices'     => array(
		'1' => esc_attr__( 'Footer 1', 'pudla' ),
		'2' => esc_attr__( 'Footer 2', 'pudla' ),
		'3' => esc_attr__( 'Footer 3', 'pudla' ),
		'4' => esc_attr__( 'Footer 4', 'pudla' ),
	),
) );

Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
	'type'        => 'image',
	'settings'    => 'footer_logo',
	'label'       => esc_attr__( 'Footer Logo', 'pudla' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'active_callback'    => array(
		array(
			'setting'  => 'footer_layout',
			'operator' => 'in',
			'value'    =>  array( '1', '2', '4' ),
		),
	),
) );

Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
	'type'        => 'toggle',
	'settings'    => 'show_footer_title',
	'label'       => esc_html__( 'Footer Title & Sub Title Hide/Show', 'pudla' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 1,
	'active_callback'    => array(
		array(
			'setting'  => 'footer_layout',
			'operator' => 'in',
			'value'    =>  array( '1', '2', '4' ),
		),
	),
) );

Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
	'type'        => 'text',
	'settings'    => 'footer_title',
	'label'       => esc_attr__( 'Footer Title', 'pudla' ),
	'description' 	=> esc_html__( 'Default is Site Title', 'pudla' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'active_callback'    => array(
		array(
			'setting'  => 'footer_layout',
			'operator' => 'in',
			'value'    =>  array( '1', '2', '4' ),
		),
		array(
			'setting'  => 'show_footer_title',
			'operator' => '==',
			'value'    =>  1,
		),
	),
) );

Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
	'type'        => 'text',
	'settings'    => 'footer_sub_title',
	'label'       => esc_attr__( 'Footer Sub Title', 'pudla' ),
	'description' 	=> esc_html__( 'Default is Site Tagline', 'pudla' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'active_callback'    => array(
		array(
			'setting'  => 'footer_layout',
			'operator' => 'in',
			'value'    =>  array( '1', '2', '4' ),
		),
		array(
			'setting'  => 'show_footer_title',
			'operator' => '==',
			'value'    =>  1,
		),
	),
) );

Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
	'type'        => 'toggle',
	'settings'    => 'show_mega_footer',
	'label'       => esc_html__( 'Mega Footer Hide/Show', 'pudla' ),
	'section'     => $section,
	'default'     => 1,
	'priority'    => $priority ++,
	'active_callback'    => array(
		array(
			'setting'  => 'footer_layout',
			'operator' => 'in',
			'value'    =>  array( '3' ),
		),
	),
) );


Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
	'type'        => 'textarea',
	'settings'    => 'footer_copyright_text',
	'label'       => esc_html__( 'Copyright Text', 'pudla' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'active_callback'    => array(
		array(
			'setting'  => 'footer_layout',
			'operator' => 'in',
			'value'    =>  array( '1', '2', '3', '4' ),
		),
	),
) );

Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
	'type'        => 'textarea',
	'settings'    => 'footer_other_text',
	'label'       => esc_html__( 'Other Text', 'pudla' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'active_callback'    => array(
		array(
			'setting'  => 'footer_layout',
			'operator' => 'in',
			'value'    =>  array( '1', '2', '3', '4' ),
		),
	),
) );

Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
	'type'        => 'toggle',
	'settings'    => 'show_social_icons_in_footer',
	'label'       => esc_html__( 'Social Icons Hide/Show', 'pudla' ),
	'section'     => $section,
	'default'     => 1,
	'priority'    => $priority ++,
	'active_callback'    => array(
		array(
			'setting'  => 'footer_layout',
			'operator' => 'in',
			'value'    =>  array( '1', '2', '3', '4' ),
		),
	),
) );