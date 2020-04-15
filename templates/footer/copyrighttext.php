<?php if( get_theme_mod('footer_copyright_text') ) { ?>
	<p><?php echo wp_kses_post( get_theme_mod('footer_copyright_text') ); ?></p>
<?php } else { ?>
	<p><?php esc_html_e( '', 'pudla' ); ?>
	<?php 
		$authorlink =  '<a rel="nofollow" href="https://themeforest.net/user/awaiken/portfolio" target="_blank" title="Awaiken">Awaiken</a>';
		
		printf( wp_kses_post( __( 'Created by %1$s, Powered by WordPress. All rights reserved', 'pudla' ) ), $authorlink );
	?>
	</p>
<?php }