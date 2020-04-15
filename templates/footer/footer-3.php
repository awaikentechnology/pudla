<?php 
$active_footers = array();
$num            = 0;
while ( $num < 4 ) {
	$num ++;
	if ( is_active_sidebar( 'footer-column-' . $num ) ) {
		array_push( $active_footers, 'footer-column-' . $num );
	}
}
$footer_cols = count( $active_footers );

switch ( $footer_cols ) {
	case 0:
		$f_class = "";
		break;
	case 1:
		$f_class = "col-md-12";
		break;
	case 2:
		$f_class = "col-md-6";
		break;
	case 3:
		$f_class = "col-md-4";
		break;
	case 4:
		$f_class = "col-md-3";
		break;
}
?>
	<footer class="footer-style-2">
		<?php if( true == get_theme_mod( 'show_mega_footer', 1 ) ): ?>
			<?php if( is_array( $active_footers ) && count($active_footers) > 0 ): ?>
				<div class="mega-footer">
					<div class="container">
						<div class="row">
						<?php foreach ( $active_footers as $name ):	?>
							<div class="<?php echo esc_attr( $f_class ); ?>">
								<?php dynamic_sidebar( $name ); ?>
							</div>
						<?php endforeach; ?>
						</div>
					</div>
				</div>
			<?php endif; ?>
		<?php endif; ?>

		<div class="text-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="copyright">
							<?php get_template_part( 'templates/footer/copyrighttext' ); ?>
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="footer-author-info">
							<?php get_template_part( 'templates/footer/othertext' ); ?>
						</div>
					</div>
					
					<div class="col-md-4">
						<?php get_template_part( 'templates/footer/socialicons' ); ?>
					</div>
				</div>
			</div>
		</div>
	</footer> 