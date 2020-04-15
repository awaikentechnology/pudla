<?php
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$section    = 'social_links';
$priority = 1;

//Add settings sociallinks
Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
	'type'        => 'repeater',
	'label'       => esc_html__( 'Add Social Links', 'pudla' ),
	'description' => sprintf( wp_kses_post( __( 'You can find icon class <a target="_blank" href="%s">here</a>. Use an appropriate prefix, if you are using Solid Icon then use \'fas fa-\' or if you are using Brands Icon then use \'fab fa-\' Ex.: fas fa-envelope', 'pudla' ) ), 'https://fontawesome.com/cheatsheet' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'row_label' => array(
		'type' => 'text',
		'value' => esc_html__('Social Link', 'pudla' ),
	),
	'settings'    => 'social_links_items',
	'fields' => array(
		'social_icon' => array(
			'type'        => 'text',
			'label'       => esc_html__( 'Icon', 'pudla' ),
			'description' => esc_html__('Enter class name here', 'pudla' ),
			'default'     => '',
		),
		'social_link' => array(
			'type'        => 'text',
			'label'       => esc_html__( 'Link to social', 'pudla' ),
			'default'     => '',
		),
	)
) );
