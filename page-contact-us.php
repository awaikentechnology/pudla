<?php
/*
	Template Name: Contact Us
*/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$box_1_title = get_post_meta( get_the_ID(), 'box_1_title', true );
$box_2_title = get_post_meta( get_the_ID(), 'box_2_title', true );
$box_3_title = get_post_meta( get_the_ID(), 'box_3_title', true );
$box_1_details = nl2br(get_post_meta( get_the_ID(), 'box_1_details', true ));
$box_2_details = nl2br(get_post_meta( get_the_ID(), 'box_2_details', true ));
$box_3_details = get_post_meta( get_the_ID(), 'box_3_details', true );
$contact_form_shortcode = get_post_meta( get_the_ID(), 'contact_form_shortcode', true );
?>
<?php get_header(); ?>
<section class="page-default">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-main-title">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
		
		<?php while ( have_posts() ) : the_post(); ?>
		<?php if(get_the_content()): ?>
		<div class="row">
			<div class="col-md-12">				
					<div class="contact-entry">
						<?php the_content(); ?>
					</div>
			</div>
		</div>
		<?php endif; ?>
		<?php endwhile; ?>
		
		<div class="row">
			<div class="col-md-4">
				<div class="contact-info-box">
					<h4><?php echo sanitize_text_field($box_1_title); ?></h4>
					<p><?php echo wp_kses_post( $box_1_details ); ?></p>
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="contact-info-box">
					<h4><?php echo sanitize_text_field($box_2_title); ?></h4>
					<p><?php echo wp_kses_post( $box_2_details ); ?></p>
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="contact-social-link">
					<h4><?php echo sanitize_text_field($box_3_title); ?></h4>
					
					<?php
					if ( function_exists( 'have_rows' ) ) {
						if( have_rows('box_3_details') ):

							while ( have_rows('box_3_details') ) : the_row();

								echo '<a target="_blank" href="'.esc_url(get_sub_field('social_profile_link')).'">'.esc_html(get_sub_field('social_profile_title')).'</a>';

							endwhile;

						endif;
					}
					?>
				</div>
			</div>
		</div>
		
		<?php if(!empty($contact_form_shortcode)){ ?>
		<div class="row mt-5">
			<div class="col-md-12">
				<?php echo do_shortcode($contact_form_shortcode); ?>
			</div>
		</div>
		<?php } ?>
		
	</div>
</section>
<?php get_footer(); ?>