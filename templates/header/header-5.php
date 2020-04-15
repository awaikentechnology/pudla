<header class="header-style-4">
	<div class="main-navbar">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-8">
					<?php get_template_part( 'templates/header/socialicons'); ?>
				</div>
				
				<div class="col-md-6 hidden-md-down">
					<?php get_template_part( 'templates/header/menu' ); ?>
				</div>

				<div class="col-md-3 col-4 text-right">
					<?php get_template_part( 'templates/header/searchbutton'); ?>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="logo">
					<?php get_template_part( 'templates/header/logo' ); ?>
					<div class="navbar-toggle"></div>
				</div>
				
				<div id="responsive-menu"></div>
			</div>
		</div>
	</div>
</header>