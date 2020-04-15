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
$page_layout	=	get_theme_mod( 'page_layout', 'no-sidebar' );
if($page_layout == 'no-sidebar') {
	$column = 'col-md-12';
}
else{
	$column = 'col-md-8';
}
?>
<?php get_header(); ?>

<section class="page-default">
	<div class="container">
		<div class="row">
			<div class="<?php echo esc_attr( $column ); ?>">
				<div class="row">
					<div class="col-md-12">
						<div class="page-main-title">
							<h1><?php the_title(); ?></h1>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<?php while ( have_posts() ) : the_post(); ?>
						<div class="default-page-entry">
							<?php 
								the_content();
							?>
							<?php 
								wp_link_pages( array(
									'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'pudla' ) . '</span>',
									'after'       => '</div>',
									'link_before' => '<span class="page-number">',
									'link_after'  => '</span>',
								) ); 
						?>
						</div>
					</div>
				</div>
				<?php if ( comments_open() || get_comments_number() ) : ?>
				<div class="row">
					<div class="col-md-12">
						<div class="post-comments">
							<?php	comments_template(); ?>
						</div>
					</div>
				</div>
				<?php endif; ?>
				<?php endwhile; ?>
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