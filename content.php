<?php
/**
 * Template loop for post
 */
 
 // Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="col-md-6">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="blog-post-box">
			<?php if ( has_post_thumbnail() ) : ?>
				<a href="<?php echo esc_url( get_permalink() ); ?>">
					<figure>
						<?php the_post_thumbnail('pudla-blog-thumb'); ?>
					</figure>
				</a>
			<?php endif; ?>
		
			<div class="blog-post-box-body">
				<div class="blog-post-meta">
					<span><?php echo get_the_date(); ?></span>
					<?php 
					$category = get_the_category();
					if ( is_array($category) && isset($category[0]) ) {
							echo '<a href="' . get_category_link( $category[0]->term_id ) . '">' . $category[0]->cat_name . '</a>';
					}
					?>
				</div>
				
				<?php the_title( '<h2>', '</h2>' ); ?>
				<?php if( true == get_theme_mod( 'show_blog_excerpt', true ) ): ?>
				<?php the_excerpt(); ?>
				<?php endif; ?>
				<a href="<?php echo esc_url( get_permalink() ); ?>" class="blog-read-more"><?php esc_html_e( 'Read Full Article', 'pudla' ); ?></a>
			</div>
		</div>
	</article>
</div>