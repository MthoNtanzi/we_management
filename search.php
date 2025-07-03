<?php
wp_head();
?>

<?php
    get_template_part('template-parts/section-header');
?>

<div class="container mt-5">
    <h2 class="mb-4">Search Results for: <?php echo get_search_query(); ?></h2>

    <?php if (have_posts()) : ?>
        <div class="row">
            <?php while (have_posts()) : the_post(); ?>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>

        <div class="mt-4">
            <?php the_posts_pagination(); ?>
        </div>
    <?php else : ?>
        <p>No results found. Please try a different keyword.</p>
    <?php endif; ?>
</div>

<?php get_footer();
wp_footer();
?>