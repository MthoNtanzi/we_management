<?php
/* Template Name: Service Page Template */
get_header();
?>

<!-- Hero Section -->
<section class="page-hero-section bg-primary text-white py-5 text-center">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <p class="lead">
            <?php echo get_post_meta(get_the_ID(), 'hero_description', true); ?>
        </p>
    </div>
</section>

<!-- Page Content -->
<section class="page-content-section py-5">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    </div>
</section>

<?php get_footer(); ?>
