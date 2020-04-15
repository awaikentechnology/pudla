<div class="col-md-6">
	<div class="post-box">
		<div class="post-header">
			<?php if ( has_post_thumbnail() ) : ?>
				<a href="<?php the_permalink(); ?>">
					<figure>
						<?php the_post_thumbnail('pudla-thumb'); ?>
					</figure>
				</a>
			<?php endif; ?>
			
			<?php 
			$cook_time = get_post_meta( get_the_ID(), 'pudla_cooking_time', true );
			if(!empty($cook_time)){
			?>
			<div class="cook-time"> 
				<span><?php echo esc_html($cook_time); ?> <?php esc_html_e( 'Min', 'pudla' ); ?></span>
			</div>
			<?php } ?>
		</div>
		
		<div class="post-body">
			<?php 
			$recipe_cats    = get_the_terms( get_the_ID(), 'recipe_category' );
			if($recipe_cats): ?>
			<div class="post-category">
				<?php 
					foreach ( $recipe_cats as $item_cat ) {
						echo '<a href="' . esc_url( get_category_link( $item_cat->term_id ) ) . '">' . $item_cat->name . '</a> ';
					}
				?>
			</div>
			<?php endif; ?>
			
			<div class="post-entry">
				<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
				<?php if( true == get_theme_mod( 'show_recipe_excerpt', false ) ): ?>
					<?php the_excerpt(); ?>
				<?php endif; ?>
				<a href="<?php echo esc_url( get_permalink() ); ?>" class="btn-read-recipe">
					<?php esc_html_e( 'Read Recipe', 'pudla' ); ?>
				</a>
			</div>
		</div>
	</div>
</div>