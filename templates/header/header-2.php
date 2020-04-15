	<header class="header-style-1">
		<div class="main-navbar">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="navbar-toggle"></div>
						<?php get_template_part( 'templates/header/menu' ); ?>
					</div>

					<div class="col-md-3 text-right">
						<?php get_template_part( 'templates/header/searchbutton'); ?>
					</div>
					
					<div class="col-md-12">
						<div id="responsive-menu"></div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="logo-social-link-ads">
						<?php get_template_part( 'templates/header/ads' ); ?>
						
						<?php get_template_part( 'templates/header/logo' ); ?>
						
						<?php get_template_part( 'templates/header/socialicons'); ?>
					</div>
				</div>
			</div>
		</div>
	</header>