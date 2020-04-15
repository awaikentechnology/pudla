<div class="row">
	<div class="col-md-12">
		<div class="single-post-title">
			<div class="post-meta">
				<?php 
				$recipe_cats    = get_the_terms( get_the_ID(), 'recipe_category' );
				if($recipe_cats): ?>
				<span itemprop="recipeCategory">
					<?php 
						foreach ( $recipe_cats as $item_cat ) {
							echo '<a class="post-category" href="' . esc_url( get_category_link( $item_cat->term_id ) ) . '">' . $item_cat->name . '</a> ';
						}
					?>
				</span>
				<?php endif; ?>
				
				<span class="post-date" itemprop="datePublished" content="<?php echo get_the_date('Y-m-d', get_the_ID()) ?>"><?php echo get_the_date(); ?></span>
				<?php $pudla_difficulty = get_post_meta( get_the_ID(), 'pudla_difficulty', true );
				if(!empty($pudla_difficulty)){
				?>
				<span class="post-level" title="<?php echo esc_attr(sprintf( __( 'Recipe Difficulty: %s', 'pudla' ), $pudla_difficulty )); ?>"><?php echo esc_html($pudla_difficulty); ?></span>
				<?php } ?>
				<?php $cook_time = get_post_meta( get_the_ID(), 'pudla_cooking_time', true );
				if(!empty($cook_time)){
				?>
				<span class="post-cook-time" title="<?php echo esc_attr(sprintf( __( 'Cooking Time: %s Min', 'pudla' ), $cook_time )); ?>"><?php echo esc_html($cook_time); ?> <?php esc_html_e( 'Min', 'pudla' ); ?></span>
				<?php 
				}
				?>
			</div>
			
			<div class="post-title">
				<?php the_title( '<h1 itemprop="name">', '</h1>' ); ?>
			</div>
		</div>
	</div>
</div>