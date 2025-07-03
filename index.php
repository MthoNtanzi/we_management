<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

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
<<<<<<< Updated upstream

=======
    <div class="container-xxl bg-white p-0">
>>>>>>> Stashed changes
    <!-- Spinner -->
    <?php    
        get_template_part('template-parts/spinner');
    ?>

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
    </div>
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <?php
        wp_footer();
    ?>
    
</body>

</html>