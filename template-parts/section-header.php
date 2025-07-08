<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    wp_head();
    ?>
</head>

<body>
    <div class="container-xxl bg-white p-0">

        <!-- Spinner Start -->
        <?php
        get_template_part('template-parts/', 'spinner');
        ?>
        <!-- Spinner End -->

        <!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand d-flex align-items-center text-center">
                    <div class="p-2 me-2">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.jpg" alt="Icon" style="width: 50px; height: 50px;">
                    </div>
                    <h1 class="m-0 text-primary">W.E. Management</h1>
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
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row page_header">
                <div class="col-md-6 text-wrapper p-5 mt-lg-5">
                    <?php if (!is_search()) : ?>
                        <?php
                        // Get full block content of the page
                        $blocks = parse_blocks(get_post_field('post_content', get_the_ID()));

                        $heading = '';
                        $paragraph = '';

                        foreach ($blocks as $block) {
                            if ($block['blockName'] === 'core/heading' && empty($heading)) {
                                $heading = trim(strip_tags(render_block($block)));
                            }

                            if ($block['blockName'] === 'core/paragraph' && empty($paragraph)) {
                                $paragraph = trim(strip_tags(render_block($block)));
                            }

                            // Stop looping if both found
                            if ($heading && $paragraph) break;
                        }

                        // Format heading
                        $title_parts = explode(' ', $heading, 2);
                        ?>

                        <h1 class="display-5 animated fadeIn mb-4">
                            <?php
                            echo esc_html($title_parts[0]);
                            if (isset($title_parts[1])) {
                                echo ' <span class="text-primary">' . esc_html($title_parts[1]) . '</span>';
                            }
                            ?>
                        </h1>

                        <p class="animated fadeIn mb-4 pb-2">
                            <?php echo esc_html($paragraph); ?>
                        </p>
                    <?php else : ?>
                        <h1 class="display-5 animated fadeIn mb-4">
                            Search <span class="text-primary">Results</span>
                        </h1>
                        <p class="animated fadeIn mb-4 pb-2">
                            Here are the results matching your query. Use the search bar to refine or try a different keyword.
                        </p>
                    <?php endif; ?>
                </div>


                <div class="col-md-6 image-wrapper animated fadeIn position-relative">
                    <div class="owl-carousel header-carousel">
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/carousel-1.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/carousel-2.jpg" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Header End -->