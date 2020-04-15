<?php 
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<div class="col-md-4">
	<div class="sidebar">
		<?php if ( is_active_sidebar( 'recipe-sidebar' )  ) : ?>
			<?php dynamic_sidebar( 'recipe-sidebar' ); ?>
		<?php endif; ?>
	</div>
</div>