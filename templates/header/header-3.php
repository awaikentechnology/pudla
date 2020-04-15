<header class="header-style-2">
	<div class="main-navbar">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="navbar-toggle"></div>
					<?php get_template_part( 'templates/header/menu' ); ?>
				</div>

				<div class="col-md-4 text-right">
					<?php get_template_part( 'templates/header/socialicons'); ?>
					
					<?php get_template_part( 'templates/header/searchbutton'); ?>
				</div>
			</div>
		</div>
		
		<div id="responsive-menu" class="container"></div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="logo-ads">
					<div class="row">
						<div class="col-md-3">
							<div class="logo">
								<?php get_template_part( 'templates/header/logo' ); ?>
							</div>
						</div>
						
						<div class="col-md-9">
							<?php get_template_part( 'templates/header/ads' ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>