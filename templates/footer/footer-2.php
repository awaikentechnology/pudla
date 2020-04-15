	<footer class="footer-style-1">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<?php get_template_part( 'templates/footer/logo' ); ?>
					
					<div class="copyright">
						<?php get_template_part( 'templates/footer/copyrighttext' ); ?>
						<?php get_template_part( 'templates/footer/othertext' ); ?>
					</div>
				</div>
				
				<div class="col-md-4">
					<?php if ( is_active_sidebar( 'footer-column-2' ) ): ?>
						<?php dynamic_sidebar( 'footer-column-2' ); ?>
					<?php endif; ?>
				</div>
				
				<div class="col-md-4">
					<div class="footer-widget">
						<?php if ( is_active_sidebar( 'footer-column-3' ) ): ?>
							<?php dynamic_sidebar( 'footer-column-3' ); ?>
						<?php endif; ?>
						<?php get_template_part( 'templates/footer/socialicons' ); ?>
					</div>
				</div>
			</div>
		</div>
	</footer> 