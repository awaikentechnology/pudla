<a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>" title="<?php echo esc_html( get_bloginfo ( 'name' ) ); ?>">
	<?php	
      if ( display_header_text() == false ){

		if ( has_custom_logo( $blog_id = 0 ) ) :
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
			?>
			<img src="<?php echo esc_url($image[0]); ?>" alt="logo">
			<?php 
		endif;
	  }
	  else{
	  ?>
		<?php if ( is_front_page() && is_home() ) : ?>
			<h1><?php echo esc_html( get_bloginfo ( 'name' ) ); ?></h1>
		<?php else: ?>
			<h2><?php echo esc_html( get_bloginfo ( 'name' ) ); ?></h2>
		<?php endif; ?>
		<p><?php echo esc_html( get_bloginfo ( 'description' ) ); ?></p>
	<?php		
	  }
	?>
</a>
