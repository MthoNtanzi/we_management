<?php
if ( post_password_required() ) {
    return;
}
?>

<div class="blog-comments wow fadeInUp" data-wow-delay="0.3s">
    <?php if ( have_comments() ) : ?>
        <h3><?php echo get_comments_number(); ?> Comments</h3>

        <?php
        wp_list_comments([
            'style'       => 'div',
            'short_ping'  => true,
            'avatar_size' => 64,
            'callback'    => 'custom_comment_format'
        ]);
        ?>

    <?php endif; ?>

    <?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments">Comments are closed.</p>
    <?php endif; ?>
</div>

<!-- Comment Form -->
<div class="blog-comment-form wow fadeInUp" data-wow-delay="0.4s">
    <?php
    $commenter = wp_get_current_commenter();
    $req = get_option('require_name_email');
    $aria_req = ($req ? " required" : '');
    
    $fields = array(
        'author' =>
            '<div class="row"><div class="col-md-6 mb-3">' .
            '<input class="form-control" name="author" type="text" placeholder="Your Name" value="' . esc_attr($commenter['comment_author']) . '"' . $aria_req . '></div>',
        'email' =>
            '<div class="col-md-6 mb-3">' .
            '<input class="form-control" name="email" type="email" placeholder="Your Email" value="' . esc_attr($commenter['comment_author_email']) . '"' . $aria_req . '></div></div>',
        'url' =>
            '<div class="row"><div class="col-md-6 mb-3">' .
            '<input class="form-control" name="url" type="text" placeholder="Website (optional)" value="' . esc_attr($commenter['comment_author_url']) . '"></div></div>',
    );
    
    $args = array(
        'class_form'         => 'row',
        'class_submit'       => 'btn btn-primary py-2 px-4',
        'label_submit'       => 'Post Comment',
        'comment_field'      => '<div class="col-12 mb-3"><textarea class="form-control" name="comment" placeholder="Your Comment" required></textarea></div>',
        'fields'             => $fields,
        'submit_field'       => '<div class="col-12">%1$s %2$s</div>',
        'comment_notes_before' => '',
        'comment_notes_after' => '<div class="col-12"><div class="form-check">' .
                                '<input class="form-check-input" type="checkbox" id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" value="yes" checked="checked">' .
                                '<label class="form-check-label" for="wp-comment-cookies-consent">' .
                                'Save my name, email, and website in this browser for the next time I comment.' .
                                '</label></div></div>',
    );
    
    comment_form($args);
    ?>
</div>