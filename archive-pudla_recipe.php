<?php
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$page_layout	=	get_theme_mod( 'recipe_archive_page_layout', 'with-sidebar' );
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
				<div class="row">
					<div class="col-md-12">
						<div class="page-main-title">
							<h1><?php the_archive_title(  ); ?></h1>
							<?php
								the_archive_description( '<div class="taxonomy-description">', '</div>' );
							?>
						</div>
					</div>
				</div>
				
				<div class="row">
					<?php /* The loop */
						if ( have_posts() ) :
							while ( have_posts() ) : the_post(); ?>
								<?php get_template_part( 'content', 'recipe' ); ?>
							<?php endwhile; ?>
							<?php echo pudla_pagination_numbers(); ?>
						<?php else: ?>
							<p><?php esc_html_e('No recipe were found.', 'pudla' ); ?></p>
					<?php endif; ?>
				</div>
			</div>
			<?php 
				if($page_layout == 'with-sidebar'):
					get_sidebar('recipe');
				endif;
			?>
		</div>
	</div>
</section>
<?php get_footer(); ?>