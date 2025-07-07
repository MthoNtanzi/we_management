<?php
/* Template Name: Test Blog */

get_header(); ?>

<h1>This is the Test Blog Template</h1>

<?php
// Simple blog loop
$args = array('post_type' => 'post');
$blog_query = new WP_Query($args);
if ($blog_query->have_posts()):
    while ($blog_query->have_posts()): $blog_query->the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <p><?php the_excerpt(); ?></p>
    <?php endwhile;
    wp_reset_postdata();
else:
    echo '<p>No posts found.</p>';
endif;

get_footer();