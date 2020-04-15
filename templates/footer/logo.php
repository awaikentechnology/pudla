<?php	
	$footer_logo = get_theme_mod( 'footer_logo' );
	if ( !empty($footer_logo) ) {
		?>
		<div class="footer-logo">
			<img src="<?php echo esc_url($footer_logo); ?>" alt="logo">
		</div>
		<?php 
	}
	if( true == get_theme_mod( 'show_footer_title', 1 ) ){
		echo '<div class="footer-logo">';
		if( get_theme_mod('footer_title') ) { ?>
			<h5 class="footer-site-title"><?php echo sanitize_text_field( get_theme_mod( 'footer_title' ) ); ?></h5>
		<?php } else { ?>
			<h5 class="footer-site-title"><?php echo esc_html( get_bloginfo ( 'name' ) ); ?></h5>
		<?php } 
		
		if( get_theme_mod('footer_sub_title') ) { ?>
			<p><?php echo sanitize_text_field( get_theme_mod( 'footer_sub_title' ) ); ?></p>
		<?php } else { ?>
			<p><?php echo esc_html( get_bloginfo ( 'description' ) ); ?></p>
		<?php } ?>
		</div>
	<?php } ?>