<?php
/**
 * This is header template of our theme
 *
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if ( true == get_theme_mod( 'show_preloader', false ) ) : ?>
	<div class="preloader">
		<div class="loader-wrapper">
			<div class="loader">
				<div class="circle circle-1"></div>
				<div class="circle circle-1a"></div>
				<div class="circle circle-2"></div>
				<div class="circle circle-3"></div>
			</div>
			<h4>Loading...</h4>
		</div>
	</div>
<?php endif; ?>
<?php 
	$header_layout = get_theme_mod( 'header_layout', '1' );
	get_template_part( 'templates/header/header', $header_layout ); 
?>