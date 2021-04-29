<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password,
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

?>

<div class="comments-wrapper px-3 py-5 p-md-5">

    <div id="comments" class="comments">

    <?php if ( have_comments() ) : ?>
        <div class="comments-header">
            <h2 class="comment-reply-title">
                <?php if ( '1' === get_comments_number() ) : ?>
                    <?php esc_html_e( '1 comment' ); ?>
                <?php else : ?>
                    <?php
                    printf(
                        /* translators: %s: Comment count number. */
                        esc_html( _nx( '%s comment', '%s comments', get_comments_number(), 'Comments title' ) ),
                        esc_html( number_format_i18n( get_comments_number() ) )
                    );
                    ?>
                <?php endif; ?>
            </h2><!-- .comment-reply-title -->
        </div>

        <div class="comments-inner">
            <?php
            wp_list_comments(
                array(
                    'avatar_size' => 60,
                    'style'       => 'div',
                    'short_ping'  => true,
                )
            );
            ?>
        </div>

        <?php if ( ! comments_open() ) : ?>
            <p class="no-comments"><?php esc_html_e( 'Comments are closed.' ); ?></p>
        <?php endif; ?>
    <?php endif; ?>

    <?php if ( comments_open() ) : ?>
        <hr class="" aria-hidden="true">
        
        <?php
        comment_form(
            array(
                'logged_in_as'       => null,
                'title_reply'        => esc_html__( 'Leave a comment' ),
                'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
                'title_reply_after'  => '</h2>',
            )
        );
        ?>
    <?php endif; ?>

    </div><!-- #comments -->

</div>
