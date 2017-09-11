<?php if ( post_password_required() ) {	return; } ?>
	<div class="card">
		<?php if ( have_comments() ) : ?>
			<header class="card-header">
				<p class="card-header-title">
					<?php printf( _nx( 'One comment on "%2$s"', '%1$s comments on “%2$s”', get_comments_number(), 'comments title'), number_format_i18n( get_comments_number() ), get_the_title() ); ?>
				</p>
			</header>
			<div class="card-content">
				<div class="content">
					<ul class="comment-list">
						<?php  wp_list_comments( array('short_ping'  => true,'avatar_size' => 50,) ); ?>
					</ul>
				</div>
			</div>
		<?php endif; ?>
	</div>

	<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="no-comments">
			<?php _e( 'Comments are closed.' ); ?>
		</p>
	<?php endif; ?>

	<?php comment_form(); ?>