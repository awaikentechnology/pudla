<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<?php get_header(); ?>

<section class="page-default">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="not-found-box">
					<h2><?php esc_html_e( '404', 'pudla' ); ?></h2>
					
					<p><?php 
						esc_html_e( "Oops! That page can't be found. It looks like nothing was found at this location. Maybe try a search?", 'pudla' );
					?></p>
					
					<?php get_search_form(); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>