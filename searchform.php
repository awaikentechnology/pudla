<?php 
/**
 * The search-form template.
 */
 
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<form role="search" method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="input-group add-on">
		<input type="text" value="" name="s" class="form-control" placeholder="<?php esc_attr_e( 'Search ...', 'pudla' ); ?>" required="" />
		<div class="input-group-btn">
			<button class="btn btn-search" type="submit"><i class="fa fa-search"></i></button>
		</div>
	</div>
</form>