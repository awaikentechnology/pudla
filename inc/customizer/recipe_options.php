<?php
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

	$panel    = 'recipe_options';

	$section_priority = 1;
	$section    = 'recipe_list_page';
	$field_priority = 1;
	Pudla_Kirki::add_section( $section, array(
		'title'    => esc_html__( 'Recipe List Page', 'pudla' ),
		'panel'    => $panel,
		'priority' => $section_priority ++,
	) );
	
	
	Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
		'type'    		=> 'text',
		'settings'		=> 'recipe_home_page_title',
		'label'		  	=> esc_html__( 'Recipe Home Page Title', 'pudla' ),
		'section'     	=> $section,
		'priority'    	=> $field_priority ++,
	) );
	
	Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
		'type'        => 'toggle',
		'settings'    => 'show_recipe_excerpt',
		'label'       => esc_html__( 'Recipe Excerpt Hide/Show', 'pudla' ),
		'section'     => $section,
		'default'     => '0',
		'priority'    => $field_priority ++,
	) );
	


	$section    = 'recipe_detail_page';
	$field_priority = 1;
	Pudla_Kirki::add_section( $section, array(
		'title'    => esc_html__( 'Recipe Detail Page', 'pudla' ),
		'panel'    => $panel,
		'priority' => $section_priority ++,
	) );
	
	Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
		'type'        => 'toggle',
		'settings'    => 'show_recipe_fullwidth_title',
		'label'       => esc_html__( 'Full Width Title No/Yes', 'pudla' ),
		'section'     => $section,
		'default'     => '1',
		'priority'    => $field_priority ++,
	) );
	
	Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
		'type'        => 'toggle',
		'settings'    => 'show_recipe_header',
		'label'       => esc_html__( 'Recipe Header Hide/Show', 'pudla' ),
		'description' => esc_html__( 'Hide or show featured Image / Video / Gallery on detail page.', 'pudla' ),
		'section'     => $section,
		'default'     => '1',
		'priority'    => $field_priority ++,
	) );
	
	Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
		'type'        => 'radio',
		'settings'    => 'recipe_detail_box_layout',
		'label'       => esc_html__( 'Recipe Detail Box Layout', 'pudla' ),
		'section'     => $section,
		'priority'    => $field_priority ++,
		'default'    => 'list-layout',
		'choices'     => array(
			'list-layout' => esc_attr__( 'List Layout', 'pudla' ),
			'tab-layout'   => esc_attr__( 'Tab Layout', 'pudla' ),
		),
	) );
	
	Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
		'type'        => 'toggle',
		'settings'    => 'recipe_detail_box_after_post_content',
		'label'       => esc_html__( 'Display Recipe Detail Box After Post Content. Off/On', 'pudla' ),
		'description' => esc_html__( 'If you off this setting then you have to add shortcode manually in to the content editor. Shortcode is [pudla_recipe_detail_box]', 'pudla' ),
		'section'     => $section,
		'default'     => '1',
		'priority'    => $field_priority ++,
	) );
	
	Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
		'type'        => 'textarea',
		'settings'    => 'extra_content_to_display',
		'label'       => esc_html__( 'Extra Content To Display', 'pudla' ),
		'description' => esc_html__( 'This content will display after recipe details box. Here you can ad HTML or any shortcode', 'pudla' ),
		'section'     => $section,
		'priority'    => $field_priority ++,
	) );
	
	Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
		'type'        => 'toggle',
		'settings'    => 'show_print_recipe_button',
		'label'       => esc_html__( 'Print Recipe Button Hide/Show', 'pudla' ),
		'section'     => $section,
		'default'     => '1',
		'priority'    => $field_priority ++,
	) );
	
	Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
		'type'        => 'toggle',
		'settings'    => 'show_email_recipe_button',
		'label'       => esc_html__( 'Email Recipe Button Hide/Show', 'pudla' ),
		'section'     => $section,
		'default'     => '1',
		'priority'    => $field_priority ++,
	) );
	
	Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
		'type'        => 'toggle',
		'settings'    => 'show_recipe_tags',
		'label'       => esc_html__( 'Tags Hide/Show', 'pudla' ),
		'section'     => $section,
		'default'     => '1',
		'priority'    => $field_priority ++,
	) );
	
	Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
		'type'        => 'toggle',
		'settings'    => 'show_recipe_cuisine',
		'label'       => esc_html__( 'Cuisine Hide/Show', 'pudla' ),
		'section'     => $section,
		'default'     => '1',
		'priority'    => $field_priority ++,
	) );
	
	Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
		'type'        => 'toggle',
		'settings'    => 'show_recipe_author_info',
		'label'       => esc_html__( 'Author Info Hide/Show', 'pudla' ),
		'description' => esc_html__( 'Author Info will only display if an author\'s description is entered.', 'pudla' ),
		'section'     => $section,
		'default'     => '1',
		'priority'    => $field_priority ++,
	) );

	