<!-- Search Widget -->

    <?php get_search_form(); ?>

<!-- Categories Widget -->
<div class="sidebar-widget wow fadeInUp" data-wow-delay="0.2s">
    <h4 class="widget-title">Categories</h4>
    <ul class="category-list">
        <?php
        $categories = get_categories();
        foreach ($categories as $category) {
            echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . ' <span>(' . $category->count . ')</span></a></li>';
        }
        ?>
    </ul>
</div>

<!-- Recent Posts Widget -->
<div class="sidebar-widget wow fadeInUp" data-wow-delay="0.3s">
    <h4 class="widget-title">Recent Posts</h4>
    <?php
    $recent_posts = wp_get_recent_posts(array(
        'numberposts' => 3,
        'post_status' => 'publish'
    ));
    
    foreach($recent_posts as $post) : ?>
        <div class="recent-post">
            <div class="recent-post-img">
                <?php echo get_the_post_thumbnail($post['ID'], 'thumbnail'); ?>
            </div>
            <div class="recent-post-content">
                <h5 class="recent-post-title"><a href="<?php echo get_permalink($post['ID']); ?>"><?php echo $post['post_title']; ?></a></h5>
                <div class="recent-post-date"><?php echo get_the_date('M d, Y', $post['ID']); ?></div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<!-- Tags Widget -->
<div class="sidebar-widget wow fadeInUp" data-wow-delay="0.4s">
    <h4 class="widget-title">Tags</h4>
    <div class="tags">
        <?php
        $tags = get_tags();
        foreach ($tags as $tag) {
            echo '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>';
        }
        ?>
    </div>
</div>