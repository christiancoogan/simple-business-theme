<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if ( have_comments() ) : ?>
    <h2 class="comments-title">
        <?php
        $comments_number = get_comments_number();
        if ( '1' === $comments_number ) {
            /* translators: %s: post title */
            printf( _x( 'One comment on &ldquo;%s&rdquo;', 'comments title', 'simplebusiness' ), get_the_title() );
        } else {
            printf(
                /* translators: 1: number of comments, 2: post title */
                _nx(
                    '%1$s comment on &ldquo;%2$s&rdquo;',
                    '%1$s comments on &ldquo;%2$s&rdquo;',
                    $comments_number,
                    'comments title',
                    'simplebusiness'
                ),
                number_format_i18n( $comments_number ),
                get_the_title()
            );
        }
        ?>
    </h2>

    <?php the_comments_navigation(); ?>

    <ol class="comment-list">
        <?php
        wp_list_comments( array(
            'style'       => 'ol',
            'short_ping'  => true,
            'avatar_size' => 42,
        ) );
        ?>
    </ol><!-- .comment-list -->

    <?php the_comments_navigation(); ?>

    <?php endif; // Check for have_comments(). ?>

    <?php
    // If comments are closed and there are comments, let's leave a little note, shall we?
    if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
    ?>
    <p class="no-comments"><?php _e( 'Comments are closed.', 'simplebusiness' ); ?></p>
    <?php endif; ?>

    <?php

    $commenter = wp_get_current_commenter();
    $req = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );

    $args = array('title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
                  'title_reply_after'  => '</h2>',

                  'comment_field' => '<p class="comment-form-comment form-group"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><textarea class="form-control" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',
                  
                  'class_submit' => 'btn btn-default',

                  'fields' => apply_filters( 'comment_form_default_fields', array(

                      'author' => '<p class="comment-form-author form-group">' . '<label for="author">' . __( 'Name:' ) . '</label> ' . ( $req ? '<span>*</span>' : '' ) .
                      '<input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',

                      'email' =>
                      '<p class="comment-form-email form-group"><label for="email">' . __( 'Email', 'domainreference' ) . '</label> ' .
                      ( $req ? '<span class="required">*</span>' : '' ) .
                      '<input class="form-control" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                      '" size="30"' . $aria_req . ' /></p>',
                      
                  ))
                 );

    comment_form($args);
    ?>

</div><!-- .comments-area -->
