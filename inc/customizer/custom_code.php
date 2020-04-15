<?php
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$section    = 'custom_code';

$priority = 1;

Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
	'type'        => 'code',
	'settings'    => 'custom_code_in_head',
	'label'       => esc_html__( 'Add Code In Head Section', 'pudla' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'choices'     => array(
		'language' => 'js',
	),
) );

Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
	'type'        => 'code',
	'settings'    => 'custom_code_in_footer',
	'label'       => esc_html__( 'Add Code In Footer', 'pudla' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'choices'     => array(
		'language' => 'js',
	),
) );