<?php
/*
	Template Name: Recipe Home
*/
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<?php get_header(); ?>
<?php 
$page_layout	=	get_theme_mod( 'recipe_home_page_layout', 'with-sidebar' );
if($page_layout == 'no-sidebar') {
	$column = 'col-md-12';
}
else{
	$column = 'col-md-8';
}
if ( get_query_var('paged') ) {
	$paged = get_query_var('paged');
} elseif ( get_query_var('page') ) {
	$paged = get_query_var('page');
} else {
	$paged = 1;
}

$query = array(
	'post_type'      => 'pudla_recipe',
	'paged'      => $paged,
);
$recipe_query = new WP_Query( $query );
?>
<section class="post-wrapper">
	<div class="container">
		<div class="row">
			<div class="<?php echo esc_attr( $column ); ?>">
			<?php if ( get_theme_mod( 'recipe_home_page_title' ) ) : ?>
				<div class="row">
					<div class="col-md-12">
						<div class="page-main-title">
							<h1><?php echo sanitize_text_field( get_theme_mod( 'recipe_home_page_title' ) ); ?></h1>
						</div>
					</div>
				</div>
			<?php endif; ?>
				<div class="row">
					<?php /* The loop */
						if ( $recipe_query->have_posts() ) :
							while ( $recipe_query->have_posts() ) : $recipe_query->the_post(); ?>
								<?php get_template_part( 'content', 'recipe' ); ?>
							<?php endwhile; ?>
							<?php echo pudla_pagination_numbers( $recipe_query ); ?>
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
<?php 
wp_reset_query();
get_footer(); ?>