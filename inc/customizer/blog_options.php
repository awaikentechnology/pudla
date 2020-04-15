<?php
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$section    = 'blog_options';

$priority = 1;

Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
	'type'    		=> 'text',
	'settings'		=> 'blog_home_page_title',
	'label'		  	=> esc_html__( 'Blog Home Page Title', 'pudla' ),
	'section'     	=> $section,
	'priority'    	=> $priority ++,
) );

Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
		'type'        => 'toggle',
		'settings'    => 'show_blog_excerpt',
		'label'       => esc_html__( 'Post Excerpt Hide/Show', 'pudla' ),
		'description' => esc_html__( 'Hide post excerpt on list page on blog.', 'pudla' ),
		'section'     => $section,
		'default'     => '1',
		'priority'    => $priority ++,
	) );

Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
		'type'        => 'toggle',
		'settings'    => 'show_blog_fullwidth_title',
		'label'       => esc_html__( 'Full Width Title No/Yes', 'pudla' ),
		'description' => esc_html__( 'Display full width title on detail page of blog. Default is Yes.', 'pudla' ),
		'section'     => $section,
		'default'     => '1',
		'priority'    => $priority ++,
	) );

Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
	'type'        => 'toggle',
	'settings'    => 'show_blog_header',
	'label'       => esc_html__( 'Blog Header Hide/Show', 'pudla' ),
	'description' => esc_html__( 'Hide or show featured Image / Video / Gallery on detail page of blog.', 'pudla' ),
	'section'     => $section,
	'default'     => '1',
	'priority'    => $priority ++,
) );

Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
	'type'        => 'toggle',
	'settings'    => 'show_blog_tags',
	'label'       => esc_html__( 'Tags Hide/Show', 'pudla' ),
	'description' => esc_html__( 'Hide or show Tags on detail page of blog.', 'pudla' ),
	'section'     => $section,
	'default'     => '1',
	'priority'    => $priority ++,
) );

Pudla_Kirki::add_field( PUDLA_CONFIG_ID, array(
	'type'        => 'toggle',
	'settings'    => 'show_blog_author_info',
	'label'       => esc_html__( 'Author Info Hide/Show', 'pudla' ),
	'description' => esc_html__( 'Hide or show Author Info on detail page of blog. Author Info will only display if an author\'s description is entered.', 'pudla' ),
	'section'     => $section,
	'default'     => '1',
	'priority'    => $priority ++,
) );