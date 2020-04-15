<?php 
if( true == get_theme_mod( 'show_social_icons_in_footer', 1 ) ){
	$sociallinks = pudla_social_links();
	if( !empty($sociallinks) ){
?>
	<div class="footer-social">
		<?php echo wp_kses_post($sociallinks); ?>
	</div>
<?php 
	}
}