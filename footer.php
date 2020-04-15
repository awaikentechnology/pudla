<?php if ( is_active_sidebar( 'footer-instagram' ) ): ?>
	<section class="instagram-feeds">
		<?php dynamic_sidebar( 'footer-instagram' ); ?>
	</section>
<?php endif; ?>
<?php 
	$footer_layout = get_theme_mod( 'footer_layout', '1' );
	get_template_part( 'templates/footer/footer', $footer_layout ); 
?>
<?php wp_footer(); ?>

</body>
</html>