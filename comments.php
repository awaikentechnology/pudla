<?php
/**
 * Comments template.
 *
 */

 // Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<?php if ( post_password_required() ) : ?>
	<?php return; ?>
<?php endif; ?>

<?php if ( have_comments() ) : ?>

	<div id="comments" class="comments-container">
		<?php 
		echo '<div class="comment-title-box"><h4 class="comment-title">';
		comments_number( esc_html__( '0 comment', 'pudla' ), esc_html__( '1 comment', 'pudla' ), '% ' . esc_html__( 'comments', 'pudla' ) );
		echo '</h4></div>';
		?>
		<ol class="comment-list commentlist">
			<?php wp_list_comments( 'callback=pudla_comment_template' ); ?>
		</ol>

		<?php if ( function_exists( 'the_comments_navigation' ) ) : ?>
			<?php the_comments_navigation( array( 'screen_reader_text' => '' ) ); ?>
		<?php endif; ?>
	</div>

<?php endif; ?>

<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
	<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'pudla' ); ?></p>
<?php endif; ?>

<?php if ( comments_open() ) : ?>
	<?php
	/* Custom field */
	$commenter	=	wp_get_current_commenter();
	$req 		=	get_option( 'require_name_email' );
	$aria_req 	=	( $req ? " aria-required='true'" : '' );
	$consent    =	empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"';

	
	$fields =  array(
		'author' => '<p class="comment-form-author"><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" placeholder="' . esc_attr__( 'Name*', 'pudla' ) . '" size="30"' . $aria_req . ' /></p>',

		'email' => '<p class="comment-form-email"><input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" placeholder="' . esc_attr__( 'Email*', 'pudla' ) . '" size="30"' . $aria_req . ' /></p>',

		'url' => '<p class="comment-form-url"><input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" placeholder="' . esc_attr__( 'Website', 'pudla' ) . '" size="30" /></p>',
		
	);
	
	if( version_compare( get_bloginfo('version'),'4.9.6', '>=' ) ){
		$fields['cookies'] = '<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' /> ' .
        '<label for="wp-comment-cookies-consent">' . __( 'Save my name, email, and website in this browser for the next time I comment.', 'pudla' ) . '</label></p>';
	}
	
	$custom_comment_field = '<p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="5" placeholder="' . esc_attr__( 'Your Comment', 'pudla' ) . '" aria-required="true"></textarea></p>';

	$comments_args = array(
		'title_reply'          => esc_html__( 'Leave A Comment', 'pudla' ),
		'title_reply_to'       => esc_html__( 'Leave A Comment', 'pudla' ),
		'must_log_in'          => '<p class="must-log-in">' . sprintf( esc_html__( 'You must be %1$slogged in%2$s to post a comment.', 'pudla' ), '<a href="' . wp_login_url( apply_filters( 'the_permalink', get_permalink() ) ) . '">', '</a>' ) . '</p>',
		'logged_in_as'         => '<p class="logged-in-as">' . sprintf( esc_html__( 'Logged in as %1$s. %2$sLog out &raquo;%3$s', 'pudla' ), '<a href="' . admin_url( 'profile.php' ) . '">' . $user_identity . '</a>', '<a href="' . wp_logout_url( apply_filters( 'the_permalink', get_permalink() ) ) . '" title="' . esc_html__( 'Log out of this account', 'pudla' ) . '">', '</a>' ) . '</p>',
		'comment_notes_before' => '<p class="reply-notes">Please be polite. We appreciate that. Your email address will not be published and required fields are marked</p>',
		'id_submit'            => 'comment-submit',
		'class_submit'         => 'pudla-button-comment',
		'label_submit'         => esc_html__( 'Post Comment', 'pudla' ),
		'fields'               => apply_filters( 'comment_form_default_fields', $fields ),
		'comment_field'        => $custom_comment_field,
	);
	?>

	<?php comment_form( $comments_args ); ?>

<?php endif;