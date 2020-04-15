<footer class="footer-style-3">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<?php get_template_part( 'templates/footer/logo' ); ?>
					
					<div class="copyright">
						<?php get_template_part( 'templates/footer/copyrighttext' ); ?>
					</div>
				</div>
				
				<div class="col-md-4">
					<?php get_template_part( 'templates/footer/socialicons' ); ?>
					
					<div class="footer-author-info">
						<?php get_template_part( 'templates/footer/othertext' ); ?>
					</div>
				</div>
				
				<div class="col-md-4">
					<?php if ( is_active_sidebar( 'footer-column-3' ) ): ?>
						<?php dynamic_sidebar( 'footer-column-3' ); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</footer> 