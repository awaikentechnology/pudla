<?php if( true == get_theme_mod( 'show_search_btn', true ) ): ?>
<div class="search-btn">
	<a href="#search-form" data-toggle="collapse"><i class="fas fa-search"></i></a>
	<div class="search-form-overlay collapse" id="search-form">
		<div class="search-form-box">
			<a href="#search-form" class="search-close" data-toggle="collapse"><i class="fas fa-times"></i></a>
			
			<form class="form-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<input type="text" name="s" class="search-query" placeholder="<?php esc_attr_e( 'Search ...', 'pudla' ); ?>" autofocus>
				<?php if( true == get_theme_mod( 'search_only_from_recipe', false ) ): ?>
				<input type="hidden" name="post_type" value="pudla_recipe">
				<?php endif; ?>
				<button type="submit" class="search-submit"><i class="fas fa-search"></i></button>
			</form>
		</div>
	</div>
</div>
<?php endif; ?>