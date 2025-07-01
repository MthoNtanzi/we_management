<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>We Management Group - Commercial Property Management & Leasing</title>
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
    <!-- Spinner -->
    <?php
        get_template_part('template-parts/spinner');
    ?>

    <!-- Header -->
    <?php
        get_header();
    ?>

    <!-- About Start -->
    <?php
        get_template_part('template-parts/home/section', 'about');
    ?>
    <!-- About End -->

    <!-- Testimonial Start -->
    <?php
        get_template_part('template-parts/home/section', 'testimonial');
    ?>
    <!-- Testimonial End -->

    <!-- Call to Action Start -->
    <?php
        get_template_part('template-parts/home/section', 'cta');
    ?>

    <!-- FAQs -->
    <?php
        get_template_part('template-parts/home/section', 'faq');
    ?>

    <!-- Footer Start -->
    <?php 
        get_footer();
    ?>
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <?php
        wp_footer();
    ?>
</body>

</html>