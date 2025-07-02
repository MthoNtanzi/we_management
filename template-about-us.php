<?php
/**
 * Template Name: About Us - WE Management
 */
wp_head();
get_header();
?>

<!-- Spinner Start -->
<?php 
    get_template_part('template-parts/spinner');
?>

<!-- Header Start -->
<div class="container-fluid header bg-white p-0">
    <div class="row g-0 align-items-center flex-column-reverse flex-md-row page_header">
        <div class="col-md-6 text-wrapper p-5 mt-lg-5">
            <h1 class="display-5 animated fadeIn mb-4">
                About <span class="text-primary">Us</span>
            </h1>
            <p class="animated fadeIn mb-4 pb-2">
                At WE Management Group, we bring unparalleled expertise in commercial real estate, combining
                years of experience in property management, leasing, and retail development.
            </p>
        </div>
        <div class="col-md-6 image-wrapper animated fadeIn position-relative">
            <div class="owl-carousel header-carousel">
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/carousel-1.jpg" alt="">
                </div>
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/carousel-2.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Our Story Section -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="about-img position-relative overflow-hidden p-5 pe-0">
                    <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/img/trust.jpg" style="border-radius: 20px;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <span class="text-primary mb-3 d-block">OUR STORY</span>
                <h2 class="mb-4">Your Trusted Partner in Commercial Real Estate</h2>
                <p class="mb-4">
                    At WE Management Group, we bring unparalleled expertise in commercial real estate, combining years of experience in property management, leasing, and retail development. Our deep understanding of the industry allows us to navigate the complexities of commercial properties with precision...
                </p>
                <p><i class="fa fa-check text-primary me-3"></i> Comprehensive property management solutions</p>
                <a class="btn btn-primary py-3 px-5 mt-3" href="<?php echo site_url('/services'); ?>">Explore Our Services</a>
            </div>
        </div>
    </div>
</div>

<!-- Our Approach -->
<div class="py-3">
    <h2 class="display-5 text-center py-6 text-capitalize">Our Approach</h2>
    <p style="max-width: 950px; margin: 20px auto 60px auto; text-align: center;">
        We take a collaborative and personalized approach to property management...
    </p>

    <div class="mb-4">
        <h3 class="text-center">Proactive & Transparent</h3>
        <div class="image_and_service_desc">
            <p>
                We pride ourselves on a proactive and transparent approach to property management...
            </p>
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/service_proactive_transparent.jpg" alt="Proactive and Transparent" />
        </div>
    </div>
</div>

<!-- Founder Section -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="founder-section d-flex flex-md-row flex-column">
            <div class="col-md-5">
                <img src="<?php echo get_template_directory_uri(); ?>/img/jessica.jpg" alt="Jessica Alvarez" class="founder-image w-100 h-100">
            </div>
            <div class="col-md-7 founder-content">
                <span class="text-primary mb-3 d-block">MEET OUR FOUNDER</span>
                <h2 class="mb-3">Jessica Alavarez</h2>
                <h5 class="text-secondary mb-4">Founder & CEO</h5>
                <p class="mb-4">With over 15 years of experience in real estate and property management, Jessica founded WEManagement with a vision to revolutionize the industry through technology and exceptional service.</p>
                <div class="founder-quote mb-4">
                    <p>"Our success comes from treating every property as if it were our own..."</p>
                </div>
                <div class="founder-social mb-4">
                    <a href="https://www.linkedin.com/in/jessicaalvarezcre/"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
<?php wp_footer(); ?>
