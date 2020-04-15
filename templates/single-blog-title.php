<div class="row">
	<div class="col-md-12">
		<div class="single-post-title">
			<div class="post-meta">
				<span class="single-post-category">
					<?php the_category(' '); ?>
				</span>
				<span class="post-date"><?php echo get_the_date(); ?></span>
				<span class="post-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) )) ; ?>"><?php echo get_the_author(); ?></a></span>
			</div>
			
			<div class="post-title">
				<?php the_title( '<h1>', '</h1>' ); ?>
			</div>
		</div>
	</div>
</div>