<?php
/**
 * The Template for displaying all single posts
 */
 
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$page_layout	=	get_theme_mod( 'blog_single_page_layout', 'with-sidebar' );
if($page_layout == 'no-sidebar') {
	$column = 'col-md-12';
}
else{
	$column = 'col-md-8';
}
?>
<?php get_header(); ?>
<section class="page-single">
	<div class="container">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php if( true == get_theme_mod( 'show_blog_fullwidth_title', true ) ): ?>
			<?php get_template_part( 'templates/single-blog', 'title' ); ?>
		<?php endif; ?>
		<div class="row">
			<div class="<?php echo esc_attr( $column ); ?>">
				<?php if( false == get_theme_mod( 'show_blog_fullwidth_title', true ) ): ?>
					<?php get_template_part( 'templates/single-blog', 'title' ); ?>
				<?php endif; ?>
				<div class="post-entry">
				<?php if( true == get_theme_mod( 'show_blog_header', true ) ): ?>
					<?php 
						if('video' == get_post_format()){ ?>
						<?php $video = get_post_meta( $post->ID, 'pudla_video_embed_code', true ); ?>
						<?php if ( !empty($video) ) : ?>
							<div class="single-post-header post-video-header">
							<?php if ( wp_oembed_get( $video ) ) : ?>
								<?php echo wp_oembed_get( $video ); ?>
							<?php else : ?>
								<?php echo wp_kses($video, pudla_wp_kses_allowed_html()); ?>
							<?php endif; ?>
							</div>
						<?php endif; ?>
					<?php }elseif('gallery' == get_post_format()){ ?>
						<?php 
							if ( function_exists( 'get_field' ) ) {
								$images = get_field('pudla_gallery_images');
								if( $images ): ?>
								<div class="single-post-header post-gallery-header">
									<div class="swiper-container single-post-gallery">
										<div class="swiper-wrapper">
										<?php foreach( $images as $image ): ?>
											<div class="swiper-slide">
												<img data-src="<?php echo wp_get_attachment_image_url( $image['ID'], 'full' ); ?>" class="swiper-lazy" />
												<div class="swiper-lazy-preloader"></div>
											</div>
										<?php endforeach; ?>
										</div>
										<div class="recipe-gallery-pagination">
											<div class="recipe-button-prev"><i class="fa fa-angle-left"></i></div>
											<div class="recipe-button-next"><i class="fa fa-angle-right"></i></div>
										</div>
									</div>
								</div>
								<?php endif; ?>
							<?php }	?>
					<?php }else{ ?>
						<?php if ( has_post_thumbnail() ): ?>
						<div class="single-post-header post-image-header">
							<img src="<?php the_post_thumbnail_url( 'full' ); ?>"/>
						</div>
						<?php endif; ?>
					<?php } ?>
					<?php endif; /* show blog header */ ?>
					
					<div class="post-entry-content">
					<?php the_content(); ?>
					</div>
					<?php 
					wp_link_pages( array(
						'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'pudla' ) . '</span>',
						'after'       => '</div>',
						'link_before' => '<span class="page-number">',
						'link_after'  => '</span>',
					) ); 
					?>
					<?php if( true == get_theme_mod( 'show_blog_tags', true ) ): ?>
						<?php if( has_tag() ) : ?>
							<div class="post-tags">
								<span class="tag-list"><b><?php esc_html_e( 'Tags:', 'pudla' ); ?></b><?php the_tags(' ',', '); ?>
								</span>
							</div>
						<?php endif; ?>

					<?php endif; ?>
					
					<?php 
					if( true == get_theme_mod( 'show_blog_author_info', true ) ): 
						if( get_the_author_meta('description') ) {
					?>
						<div class="single-post-about-author">
							<div class="author-avatar-w">
								<a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php echo get_avatar(get_the_author_meta( 'ID' )); ?></a>
							</div>
							<div class="author-details">
								<h3 class="author-name"><a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>" itemprop="author"><?php the_author_meta( 'display_name' ); ?></a></h3>
								<div style="display:none;">
								  <div class="post-date"><time class="entry-date updated" datetime="<?php echo get_the_date( 'c' ); ?>"><?php echo get_the_date('M jS, Y'); ?></time></div>
								  <div class="post-author"><strong class="author vcard"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) )) ; ?>" class="url fn n" rel="author"><?php echo get_the_author(); ?></a></strong></div>
								</div>
								<?php if ( get_the_author_meta('description') ) : ?>
								  <p><?php the_author_meta('description'); ?></p>
								<?php endif; ?>
							</div>
						</div>
				<?php 
					}
					endif;
				?>
				
				<?php $prev_post = get_adjacent_post( false, '', true, 'category' ); ?>
				<?php $next_post = get_adjacent_post( false, '', false, 'category' ); ?>
				<?php if ( is_a( $prev_post, 'WP_Post' ) == true || is_a( $next_post, 'WP_Post' ) == true ) { ?>
					<div class="post-navigation">
						 <?php if ( is_a( $prev_post, 'WP_Post' ) ) { ?>
							<a class="prev-post-btn" href="<?php echo get_permalink( $prev_post->ID ); ?>"><i class="fa fa-arrow-left"></i><?php echo get_the_title( $prev_post->ID ); ?></a>
						 <?php } ?>
						 <?php if ( is_a( $next_post, 'WP_Post' ) ) {  ?>
							<a class="next-post-btn" href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo get_the_title( $next_post->ID ); ?><i class="fa fa-arrow-right"></i></a>
						 <?php } ?>
					</div>
				<?php } ?>
				
				<?php if ( comments_open() || get_comments_number() ) : ?>
					<div class="post-comments">
						<?php	comments_template(); ?>
					</div>
				<?php endif; ?>
				</div>
			</div>
			<?php 
				if($page_layout == 'with-sidebar'):
					get_sidebar();
				endif;
			?>
		</div>
		<?php endwhile; ?>
	</div>
</section>
<?php get_footer(); ?>