<?php

/**
 * Replies Loop
 *
 * @package bbPress
 * @subpackage Theme
 */

?>
<div class="base-box bst">
<h1 class="bbp-s-title"><?php bbp_topic_title( bbp_get_reply_topic_id() ); ?></h1>
</div>
<div class="clear"></div>

<?php do_action( 'bbp_template_before_replies_loop' ); ?>
<ul id="topic-<?php bbp_topic_id(); ?>-replies" class="forums bbp-replies">
	<li class="bbp-body">
			<div style="text-align:right;">
				<?php bbp_topic_favorite_link(); ?>
				<?php bbp_topic_subscription_link(); ?>
			</div>
		<?php if ( bbp_thread_replies() ) : ?>

			<?php bbp_list_replies(); ?>

		<?php else : ?>

			<?php while ( bbp_replies() ) : bbp_the_reply(); ?>

				<?php bbp_get_template_part( 'loop', 'single-reply' ); ?>

			<?php endwhile; ?>

		<?php endif; ?>

	</li><!-- .bbp-body -->


</ul><!-- #topic-<?php bbp_topic_id(); ?>-replies -->

<?php do_action( 'bbp_template_after_replies_loop' ); ?>
