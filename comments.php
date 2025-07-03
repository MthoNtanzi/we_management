<?php
if (post_password_required()) {
    return;
}
?>

<div class="blog-comments wow fadeInUp" data-wow-delay="0.3s">
    <h3><?php comments_number('No Comments', '1 Comment', '% Comments'); ?></h3>

    <?php if (have_comments()) : ?>
        <?php wp_list_comments(array(
            'style' => 'div',
            'callback' => 'we_management_comment',
            'avatar_size' => 60
        )); ?>

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
            <nav class="comment-navigation">
                <div class="nav-previous"><?php previous_comments_link('&larr; Older Comments'); ?></div>
                <div class="nav-next"><?php next_comments_link('Newer Comments &rarr;'); ?></div>
            </nav>
        <?php endif; ?>
    <?php endif; ?>

    <?php if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) : ?>
        <p class="no-comments">Comments are closed.</p>
    <?php endif; ?>

    <!-- Comment Form -->
    <div class="blog-comment-form wow fadeInUp" data-wow-delay="0.4s">
        <?php
        $commenter = wp_get_current_commenter();
        $req = get_option('require_name_email');
        $aria_req = ($req ? " aria-required='true'" : '');
        
        $fields = array(
            'author' => '<div class="col-md-6"><input id="author" name="author" type="text" class="form-control" placeholder="Your Name" value="' . esc_attr($commenter['comment_author']) . '" ' . $aria_req . '></div>',
            'email' => '<div class="col-md-6"><input id="email" name="email" type="email" class="form-control" placeholder="Your Email" value="' . esc_attr($commenter['comment_author_email']) . '" ' . $aria_req . '></div>',
            'url' => '<div class="col-12"><input id="url" name="url" type="text" class="form-control" placeholder="Website (optional)" value="' . esc_attr($commenter['comment_author_url']) . '"></div>',
        );
        
        $args = array(
            'fields' => $fields,
            'comment_field' => '<div class="col-12"><textarea id="comment" name="comment" class="form-control" placeholder="Your Comment" required></textarea></div>',
            'class_submit' => 'btn btn-primary py-2 px-4',
            'title_reply' => 'Leave a Comment',
            'comment_notes_before' => '',
            'comment_notes_after' => '',
            'label_submit' => 'Post Comment'
        );
        
        comment_form($args);
        ?>
    </div>
</div>

<?php
function we_management_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    ?>
    <div class="blog-comment" id="comment-<?php comment_ID(); ?>">
        <div class="blog-comment-img">
            <?php echo get_avatar($comment, $args['avatar_size']); ?>
        </div>
        <div class="blog-comment-content">
            <div class="blog-comment-meta">
                <span class="blog-comment-name"><?php echo get_comment_author_link(); ?></span>
                <span class="blog-comment-date"><?php printf('%1$s', get_comment_date()); ?></span>
            </div>
            <p class="blog-comment-text">
                <?php comment_text(); ?>
            </p>
            <?php 
            comment_reply_link(array_merge($args, array(
                'depth' => $depth,
                'max_depth' => $args['max_depth'],
                'reply_text' => '<i class="fas fa-reply"></i> Reply',
                'login_text' => 'Log in to Reply',
                'before' => '<a href="#" class="blog-comment-reply">',
                'after' => '</a>'
            ))); 
            ?>
        </div>
    </div>
    <?php
}
?>