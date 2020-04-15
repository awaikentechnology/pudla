<?php
/*
	Template Name: About Us
*/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<?php get_header(); ?>

<section class="page-about">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-main-title">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="about-feature-img">
						<?php the_post_thumbnail('full'); ?>
					</div>
				<?php endif; ?>	
				<div class="about-entry">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>