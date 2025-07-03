<?php

/**
 * The template for displaying single posts
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Blog Post</title>
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" rel="icon">

    <!-- CSS -->
    <?php
        wp_head();
        get_header();
    ?>

</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner -->
        <?php get_template_part('partials/spinner'); ?>

        <!-- Navbar -->
        <?php get_template_part('partials/navbar'); ?>

        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0 position-relative">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5 text-wrapper">
                    <h1 class="display-5 animated fadeIn mb-4" style="margin-top: 35px;">
                        Blo<span class="text-primary">g</span>
                    </h1>  
                    <nav aria-label="breadcrumb" class="animated fadeIn">
                        <ol class="breadcrumb mb-0 bg-transparent p-0">
                            <li class="breadcrumb-item"><a href="<?php echo home_url('/'); ?>" class="text-decoration-none">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="text-decoration-none">Blog</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                        </ol>
                    </nav>
                </div>

                <div class="col-md-6 image-wrapper animated fadeIn">
                    <?php if (has_post_thumbnail()): ?>
                        <div class="owl-carousel header-carousel definite">
                            <div class="owl-carousel-item">
                                <?php the_post_thumbnail('full', ['class' => 'img-fluid rounded', 'style' => 'height: 400px; object-fit: cover;']); ?>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="owl-carousel header-carousel definite">
                            <div class="owl-carousel-item">
                                <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/img/carousel-1.jpg" alt="Carousel image" style="height: 400px; object-fit: cover;">
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- Header End -->

        <!-- Blog Post Content -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <!-- Main Content -->
                    <div class="col-lg-8">
                        <?php while (have_posts()) : the_post(); ?>
                            <!-- Blog Post -->
                            <div class="blog-post wow fadeInUp" data-wow-delay="0.1s">
                                <?php if (has_post_thumbnail()): ?>
                                    <div class="blog-post-img">
                                        <?php the_post_thumbnail('full', ['alt' => get_the_title()]); ?>
                                    </div>
                                <?php endif; ?>

                                <div class="blog-post-meta">
                                    <span><i class="far fa-calendar-alt"></i><?php echo get_the_date(); ?></span>
                                    <span><i class="far fa-user"></i><?php the_author(); ?></span>
                                    <span><i class="far fa-comments"></i><?php comments_number('0 Comments', '1 Comment', '% Comments'); ?></span>
                                    <span><i class="far fa-eye"></i><?php echo wemanagement_get_post_views(get_the_ID()); ?> Views</span>
                                </div>

                                <h1 class="blog-post-title"><?php the_title(); ?></h1>

                                <div class="blog-post-content">
                                    <?php the_content(); ?>
                                </div>

                                <div class="blog-post-tags">
                                    <?php the_tags('', '', ''); ?>
                                </div>

                                <div class="blog-post-share">
                                    <span>Share this post:</span>
                                    <a href="#" class="facebook" data-url="<?php the_permalink(); ?>" data-title="<?php the_title(); ?>"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="twitter" data-url="<?php the_permalink(); ?>" data-title="<?php the_title(); ?>"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="linkedin" data-url="<?php the_permalink(); ?>" data-title="<?php the_title(); ?>"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#" class="pinterest" data-url="<?php the_permalink(); ?>" data-title="<?php the_title(); ?>" data-media="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>

                            <!-- Author Box -->
                            <div class="blog-post-author wow fadeInUp" data-wow-delay="0.2s">
                                <div class="blog-post-author-img">
                                    <?php echo get_avatar(get_the_author_meta('ID'), 100); ?>
                                </div>
                                <div class="blog-post-author-info">
                                    <h4><?php the_author(); ?></h4>
                                    <p><?php echo get_the_author_meta('description'); ?></p>
                                    <div class="blog-post-author-social">
                                        <?php
                                        $author_facebook = get_the_author_meta('facebook');
                                        $author_twitter = get_the_author_meta('twitter');
                                        $author_linkedin = get_the_author_meta('linkedin');
                                        $author_instagram = get_the_author_meta('instagram');

                                        if ($author_facebook) echo '<a href="' . esc_url($author_facebook) . '"><i class="fab fa-facebook-f"></i></a>';
                                        if ($author_twitter) echo '<a href="' . esc_url($author_twitter) . '"><i class="fab fa-twitter"></i></a>';
                                        if ($author_linkedin) echo '<a href="' . esc_url($author_linkedin) . '"><i class="fab fa-linkedin-in"></i></a>';
                                        if ($author_instagram) echo '<a href="' . esc_url($author_instagram) . '"><i class="fab fa-instagram"></i></a>';
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <!-- Comments Section -->
                            <?php comments_template(); ?>

                        <?php endwhile; ?>
                    </div>

                    <!-- Sidebar -->
                    <div class="col-lg-4">
                        <?php get_sidebar(); ?>
                    </div>
                </div>

                <!-- Related Posts -->
                <div class="blog-related wow fadeInUp" data-wow-delay="0.1s">
                    <h3>Related Posts</h3>
                    <div class="row g-4">
                        <?php
                        $related = get_posts(
                            array(
                                'category__in' => wp_get_post_categories(get_the_ID()),
                                'numberposts' => 3,
                                'post__not_in' => array(get_the_ID())
                            )
                        );

                        if ($related) {
                            foreach ($related as $post) {
                                setup_postdata($post); ?>
                                <div class="col-md-4">
                                    <div class="blog-related-item">
                                        <div class="blog-related-img">
                                            <?php if (has_post_thumbnail()): ?>
                                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium', ['alt' => get_the_title()]); ?></a>
                                            <?php else: ?>
                                                <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/blog_img/post<?php echo rand(1, 6); ?>.jpg" alt="<?php the_title(); ?>"></a>
                                            <?php endif; ?>
                                        </div>
                                        <h4 class="blog-related-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                        <div class="blog-related-date"><?php echo get_the_date(); ?></div>
                                    </div>
                                </div>
                        <?php }
                            wp_reset_postdata();
                        } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Post End -->

        <!-- Footer -->
        <?php get_footer(); ?>
    </div>

    <?php wp_footer(); ?>

</body>

</html>