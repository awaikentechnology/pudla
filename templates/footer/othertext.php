<?php if( get_theme_mod('footer_other_text') ) { ?>
	<p><?php echo wp_kses_post( get_theme_mod('footer_other_text') ); ?></p>
<?php }