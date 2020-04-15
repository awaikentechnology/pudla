<nav class="navbar navbar-toggleable-md navbar-light">
	<div class="collapse navbar-collapse" id="main-menu">
		<?php
			wp_nav_menu( array(
				'menu_id'      => 'header-menu',
				'container'      => false,
				'theme_location' => 'main-menu',
				'menu_class'     => 'navbar-nav mr-auto',
				'fallback_cb'    => 'pudla_menu_fallback'
			) );
		?>
	</div>
</nav>