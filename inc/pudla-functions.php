<?php 

/**
 * Add extra class to nav menu li
 */
add_filter( 'nav_menu_css_class', function($classes , $item, $args) {
	if($args->theme_location == 'main-menu'){
		$classes[] = 'nav-item';
	}
    return $classes;
}, 10, 3 );

/**
 * Add extra class to nav menu a tag
 */
if ( ! function_exists( 'pudla_add_link_atts' ) ) {
	function pudla_add_link_atts( $atts, $item, $args  ) {
		if($args->theme_location == 'main-menu'){
			$atts['class'] = "nav-link";
		}
		return $atts;
	}
}
add_filter( 'nav_menu_link_attributes', 'pudla_add_link_atts', 10, 3 );

/**
 * Custom comment walker
 */
if ( ! function_exists( 'pudla_comment_template' ) ) {
	function pudla_comment_template( $comment, $args, $depth ) {
		?>
		<?php $add_below = ''; ?>
		<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
			<div class="the-comment">
				<div class="comment-header">
				<?php if( get_avatar( $comment, 78 ) ): ?>
					<div class="comment-avatar"><?php echo get_avatar( $comment, 78 ); ?></div>
				<?php endif; ?>
					<div class="author-meta">
						<h5>
							<?php echo get_comment_author_link(); ?>
						</h5>
							
						<span class="comment-date"><?php printf( esc_attr__( '%1$s at %2$s', 'pudla' ), get_comment_date(),  get_comment_time() ); ?><?php edit_comment_link( __( ' - Edit', 'pudla' ),'  ','' ); ?></span>
						<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'pudla' ), 'add_below' => 'comment', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
					</div>
				</div>
				
				<div class="comment-body">
					<?php if ( '0' == $comment->comment_approved ) : ?>
						<em><?php esc_attr_e( 'Your comment is awaiting moderation.', 'pudla' ); ?></em>
						<br />
					<?php endif; ?>
					<?php comment_text() ?>
				</div>
			</div>
		<?php
	}
}

/**
 * Custom the_excerpt() more string
 */
if ( ! function_exists( 'pudla_new_excerpt_more' ) ) {
	function pudla_new_excerpt_more( $more ) {
		return ' &hellip;';
	}
}
add_filter( 'excerpt_more', 'pudla_new_excerpt_more' );


/**
 * Add code in <head> section
 */
if ( ! function_exists( 'pudla_custom_code_in_head' ) ) {
	function pudla_custom_code_in_head(){
		echo get_theme_mod( 'custom_code_in_head', '' );
	}
}
add_action('wp_head', 'pudla_custom_code_in_head',11);

/**
 * Add code in footer section
 */
if ( ! function_exists( 'pudla_custom_code_in_footer' ) ) {
	function pudla_custom_code_in_footer(){
		echo get_theme_mod( 'custom_code_in_footer', '' );
	}
}
add_action('wp_footer', 'pudla_custom_code_in_footer', 11);

/**
 * Displays social links 
 */
if ( ! function_exists( 'pudla_social_links' ) ) {
	function pudla_social_links( $text = true ) {
		$sociallinks = get_theme_mod( 'social_links_items'); 
		$output = '';
		if( is_array( $sociallinks ) && count( $sociallinks ) > 0 ) {
			
			foreach($sociallinks as $sitem) {
				$output .= '<a target="_blank" href="'.esc_url( $sitem['social_link'] ).'"><i class="'.esc_attr( $sitem['social_icon'] ).'"></i></a>';
			}
		}
		return $output;
	}
}

/**
 * Pagination numbers
 */
if ( ! function_exists( 'pudla_pagination_numbers' ) ) {
	function pudla_pagination_numbers( $custom_query = false ) {
		global $wp_query;
		if ( !$custom_query ) $custom_query = $wp_query;

		$paged_get = 'paged';
		if( is_front_page() && ! is_home() ):
			$paged_get = 'page';
		endif;

		$big = 999999999; // need an unlikely integer
		$pagination = paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var( $paged_get ) ),
			'total' => $custom_query->max_num_pages,
			'type'   => 'list',
			'prev_next'          => true,
			'prev_text'          => esc_html__('Prev', 'pudla' ),
			'next_text'          => esc_html__('Next', 'pudla' ),
		) );

		if ( $pagination ) {
			return '<div class="col-md-12 text-center"><div class="navigation">'. $pagination . '</div></div>';
		}
	}
}

/**
 * Merge extra content with content
 */
if ( ! function_exists( 'pudla_merge_extra_content' ) ) {
function pudla_merge_extra_content( $content ) {
    if ( is_single() && 'pudla_recipe' == get_post_type() ) {
		$custom_content = '';
		if(get_theme_mod( 'extra_content_to_display' )){
			$custom_content .= get_theme_mod( 'extra_content_to_display' );
		}
        $content .= $custom_content;
    }
    return $content;
}
}
add_filter( 'the_content', 'pudla_merge_extra_content', 9 );