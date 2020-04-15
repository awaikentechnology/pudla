<?php
/**
 * The template for displaying all posts.
 *
 * This is the template that displays all posts by default.
 *
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$page_layout	=	get_theme_mod( 'blog_home_page_layout', 'with-sidebar' );
if($page_layout == 'no-sidebar') {
	$column = 'col-md-12';
}
else{
	$column = 'col-md-8';
}
?>
<?php get_header(); ?>
<section class="post-wrapper">
	<div class="container">
		<div class="row">
			<div class="<?php echo esc_attr( $column ); ?>">
			<?php if ( get_theme_mod( 'blog_home_page_title' ) ) : ?>
				<div class="row">
					<div class="col-md-12">
						<div class="page-main-title">
							<h1><?php echo sanitize_text_field( get_theme_mod( 'blog_home_page_title' ) ); ?></h1>
						</div>
					</div>
				</div>
			<?php endif; ?>
				<div class="row">
					<?php /* The loop */
						if ( have_posts() ) :
							while ( have_posts() ) : the_post(); ?>
								<?php get_template_part( 'content' ); ?>
							<?php endwhile; ?>
						<?php echo pudla_pagination_numbers(); ?>
						<?php else: ?>
							<p><?php esc_html_e('No post were found.', 'pudla' ); ?></p>
					<?php endif; ?>
				</div>
			</div>
			<?php 
				if($page_layout == 'with-sidebar'):
					get_sidebar();
				endif;
			?>
		</div>
	</div>
</section>
<?php get_footer(); ?>