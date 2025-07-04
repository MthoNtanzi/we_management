<?php
/*
Template Name: Blog Listing
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
    ?>

</head>

<body>

    <div class="container-xxl bg-white p-0">
        <!-- Spinner -->
        <?php get_template_part('partials/spinner'); ?>

        <!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand d-flex align-items-center text-center">
                    <div class="icon p-2 me-2">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.jpg" alt="Icon" style="width: 30px; height: 30px;">
                    </div>
                    <h1 class="m-0 text-primary">WEManagement</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                        'container' => false,
                        'menu_class' => 'navbar-nav ms-auto',
                        'depth' => 2,
                        'walker' => new WP_Bootstrap_Navwalker(),
                        'fallback_cb' => '__return_false'
                    ));
                    ?>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->

        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0 position-relative">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5 text-wrapper">
                    <h1 class="display-5 animated fadeIn mb-4" style="margin-top: 35px;">
                        Blo<span class="text-primary">g</span>
                    </h1>
                    <p class="animated fadeIn mb-4 pb-2">
                        <?php echo get_theme_mod('blog_subtitle', 'Browse our latest blog posts to stay updated with the latest trends and insights in the real estate industry.'); ?>
                    </p>
                </div>

                <div class="col-md-6 animated fadeIn image-wrapper">
                    <div class="owl-carousel header-carousel definite">
                        <?php
                        // Get slider images - handle both string and array cases
                        $slider_images = get_theme_mod('blog_slider_images', '');
                        $default_images = array(
                            array('url' => get_template_directory_uri() . '/assets/img/carousel-1.jpg'),
                            array('url' => get_template_directory_uri() . '/assets/img/carousel-2.jpg')
                        );

                        // If empty, use defaults
                        if (empty($slider_images)) {
                            $slider_images = $default_images;
                        }
                        // If string (legacy format), convert to array
                        elseif (is_string($slider_images)) {
                            $urls = explode("\n", $slider_images);
                            $slider_images = array();
                            foreach ($urls as $url) {
                                $url = trim($url);
                                if (!empty($url)) {
                                    $slider_images[] = array('url' => $url);
                                }
                            }
                            // If conversion failed, use defaults
                            if (empty($slider_images)) {
                                $slider_images = $default_images;
                            }
                        }
                        // Ensure we have an array
                        elseif (!is_array($slider_images)) {
                            $slider_images = $default_images;
                        }

                        // Display the slider
                        foreach ($slider_images as $image):
                            if (!empty($image['url'])): ?>
                                <div class="owl-carousel-item">
                                    <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="" style="height: 400px;">
                                </div>
                        <?php endif;
                        endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->

        <!-- Blog Start -->
        <div class="container-xxl py-4">
            <div class="container">
                <div class="row mb-5">

                    <div class="col-12">
                        <div class="search-widget wow fadeInUp" data-wow-delay="0.1s">
                            <form class="search-form" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                                <input type="search" class="search-field" placeholder="Search blog posts..."
                                    value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'label', 'your-theme'); ?>">
                                <button type="submit" value="<?php echo esc_attr_x('Search', 'submit button', 'your-theme'); ?>">
                                    <i class="fas fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
                <?php
                // The main blog loop
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => get_option('posts_per_page'),
                    'paged' => $paged
                );

                $query = new WP_Query($args);

                if ($query->have_posts()):
                    // Featured post (first post)
                    $query->the_post();
                ?>

                    <!-- Featured Post -->
                    <div class="featured-post wow fadeInUp" data-wow-delay="0.1s">
                        <?php if (has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog_img/recent.jpg" alt="Featured Post">
                        <?php endif; ?>
                        <div class="featured-post-content">
                            <div class="blog-meta">
                                <span><i class="far fa-calendar-alt"></i><?php the_date(); ?></span>
                                <span><i class="far fa-user"></i><?php the_author(); ?></span>
                                <span><i class="far fa-comments"></i><?php comments_number('0 Comments', '1 Comment', '% Comments'); ?></span>
                            </div>
                            <h3 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <a href="<?php the_permalink(); ?>" class="blog-btn">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- Blog Grid -->
                    <div class="row g-4 blog-grid">
                        <?php
                        // Remaining posts
                        while ($query->have_posts()): $query->the_post(); ?>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="blog-item">
                                    <div class="blog-img">
                                        <?php if (has_post_thumbnail()): ?>
                                            <?php the_post_thumbnail('medium', array('class' => 'img-fluid')); ?>
                                        <?php else: ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>assets/img/blog_img/post<?php echo rand(1, 6); ?>.jpg" alt="Blog" class="img-fluid">
                                        <?php endif; ?>
                                        <div class="blog-date"><?php echo get_the_date('d M'); ?></div>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-meta">
                                            <span><i class="far fa-user"></i><?php the_author(); ?></span>
                                            <span><i class="far fa-comments"></i><?php comments_number('0', '1', '%'); ?></span>
                                        </div>
                                        <h3 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <p class="blog-text"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="blog-btn">Read More <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>

                        <!-- Pagination -->
                        <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                            <?php
                            echo paginate_links(array(
                                'total' => $query->max_num_pages,
                                'prev_text' => __('Prev'),
                                'next_text' => __('Next'),
                                'type' => 'list'
                            ));
                            ?>
                        </div>
                    </div>

                    <?php wp_reset_postdata(); ?>
                <?php else: ?>
                    <p>No posts found.</p>
                <?php endif; ?>

                <!-- Sidebar Content - Moved to Bottom -->
                <div class="row mt-5 sidebar-bottom">
                    <!-- Categories Widget -->
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="sidebar-widget">
                            <h4 class="widget-title">Categories</h4>
                            <ul class="category-list">
                                <?php
                                $categories = get_categories();
                                foreach ($categories as $category): ?>
                                    <li>
                                        <a href="<?php echo get_category_link($category->term_id); ?>">
                                            <?php echo $category->name; ?>
                                            <span>(<?php echo $category->count; ?>)</span>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>

                    <!-- Recent Posts Widget -->
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="sidebar-widget">
                            <h4 class="widget-title">Recent Posts</h4>
                            <?php
                            $recent_posts = wp_get_recent_posts(array(
                                'numberposts' => 3,
                                'post_status' => 'publish'
                            ));

                            foreach ($recent_posts as $post): ?>
                                <div class="recent-post">
                                    <div class="recent-post-img">
                                        <?php if (has_post_thumbnail($post['ID'])): ?>
                                            <?php echo get_the_post_thumbnail($post['ID'], 'thumbnail'); ?>
                                        <?php else: ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog_img/post<?php echo rand(1, 6); ?>.jpg" alt="Recent Post">
                                        <?php endif; ?>
                                    </div>
                                    <div class="recent-post-content">
                                        <h5 class="recent-post-title"><a href="<?php echo get_permalink($post['ID']); ?>"><?php echo $post['post_title']; ?></a></h5>
                                        <div class="recent-post-date"><?php echo get_the_date('M d, Y', $post['ID']); ?></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Tags Widget -->
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="sidebar-widget">
                            <h4 class="widget-title">Tags</h4>
                            <div class="tags">
                                <?php
                                $tags = get_tags();
                                foreach ($tags as $tag): ?>
                                    <a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->
    
    <!-- Footer -->
    <?php
    get_footer();
    ?>

    </div>

    <?php
    wp_footer();
    ?>
</body>
</html>