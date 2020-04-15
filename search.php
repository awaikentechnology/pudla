<?php
/**
 * The template for displaying search result.
 *
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$post_type = '';
if( isset( $_GET['post_type'] ) ){
	$post_type = $_GET['post_type'];
}
$page_layout	=	get_theme_mod( 'search_page_layout', 'with-sidebar' );
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
							<h1><?php esc_html_e( 'Search results for', 'pudla' ); ?><?php printf( esc_html__( ' "%s"', 'pudla' ), get_search_query() ); ?></h1>
						</div>
					</div>
				</div>
				<div class="row">
					<?php /* The loop */
						if ( have_posts() ) :
							while ( have_posts() ) : the_post(); ?>
								<?php 
								if ( 'pudla_recipe' == $post_type ) {
									get_template_part( 'content', 'recipe' ); 
								}else{
									get_template_part( 'content' ); 
								}
								
								?>
							<?php endwhile; ?>
							<?php echo pudla_pagination_numbers(); ?>
						<?php else: ?>
							<p><?php esc_html_e('No recipe were found.', 'pudla' ); ?></p>
					<?php endif; ?>
				</div>
			</div>
			<?php 
			if($page_layout == 'with-sidebar'):
				if ( 'pudla_recipe' == $post_type ) {
					get_sidebar('recipe'); 
				}
				else{
					get_sidebar(); 
				}
			endif;
			?>
		</div>
	</div>
</section>
<?php get_footer(); ?>