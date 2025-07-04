<?php

/**
 * Template Name: About Us - WE Management
 */

?>

<?php get_template_part('template-parts/section', 'header'); ?>

<!-- ================= OUR STORY SECTION ================= -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="about-img position-relative overflow-hidden p-5 pe-0">
                    <img class="img-fluid w-100"
                        src="<?php echo esc_url(get_theme_mod('our_story_image', get_template_directory_uri() . '/assets/img/trust.jpg')); ?>"
                        alt="Our Story Image"
                        style="border-radius: 20px;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <span class="text-primary mb-3 d-block">
                    <?php echo esc_html(get_theme_mod('our_story_subtitle', 'OUR STORY')); ?>
                </span>
                <h2 class="mb-4" id="our-story-heading">
                    <?php echo esc_html(get_theme_mod('our_story_title', 'Your Trusted Partner in Commercial Real Estate')); ?>
                </h2>
                <p class="mb-4" id="#our-story-paragraph">
                    <?php echo esc_html(get_theme_mod('our_story_description', 'At WE Management Group, we bring unparalleled expertise in commercial real estate, combining years of experience in property management, leasing, and retail development. Our deep understanding of the industry allows us to navigate the complexities of commercial properties with precision, ensuring seamless operations and maximum value for your investments. We pride ourselves on fostering strong tenant relationships, optimizing asset performance, and creating vibrant spaces that drive success for property owners and tenants alike. Whether you’re looking to enhance your property’s value, attract quality tenants, or streamline operations, we are your trusted partner in achieving your commercial real estate goals.')); ?>
                </p>
                <p><i class="fa fa-check text-primary me-3"></i>
                    <?php echo esc_html(get_theme_mod('our_story_bullet', 'Comprehensive property management solutions')); ?>
                </p>
                <a class="btn btn-primary py-3 px-5 mt-3" href="<?php echo esc_url(get_theme_mod('our_story_button_link', site_url('/services'))); ?>">
                    <?php echo esc_html(get_theme_mod('our_story_button_text', 'Explore Our Services')); ?>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- ================= OUR APPROACH SECTION ================= -->
<div class="py-3">
    <h2 class="display-5 text-center py-6 text-capitalize" id="our-approach-heading">
        <?php echo esc_html(get_theme_mod('our_approach_title', 'Our Approach')); ?>
    </h2>
    <p style="max-width: 950px; margin: 20px auto 60px auto; text-align: center;" id="our-approach-paragraph">
        <?php echo esc_html(get_theme_mod('our_approach_description', 'We take a collaborative and personalized approach to property management. As a boutique firm, we prioritize understanding your unique objectives and tailoring solutions to meet your specific needs. Our focus is on delivering efficient, results-driven strategies designed to maximize the value of your assets. With a clear sense of purpose and partnership, we work closely with you to achieve your property goals and drive long-term success.')); ?>
    </p>

    <div class="mb-4">
        <h3 class="text-center">
            <?php echo esc_html(get_theme_mod('our_approach_subheading', 'Proactive & Transparent')); ?>
        </h3>
        <div class="image_and_service_desc">
            <p>
                <?php echo esc_html(get_theme_mod('our_approach_text', 'We pride ourselves on a proactive and transparent approach to property management.We anticipate challenges, address issues before they arise, and keep you informed every step of the way. Through open communication and meticulous attention to detail, we build trust and ensure that your property operates smoothly, allowing you to focus on your goals with confidence.')); ?>
            </p>
            <img class="img-fluid"
                src="<?php echo esc_url(get_theme_mod('our_approach_image', get_template_directory_uri() . '/assets/img/service_proactive_transparent.jpg')); ?>"
                alt="Approach Image" />
        </div>
    </div>
</div>

<!-- ================= FOUNDER SECTION ================= -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="founder-section d-flex flex-md-row flex-column">
            <div class="col-md-5">
                <img src="<?php echo esc_url(get_theme_mod('founder_image', get_template_directory_uri() . '/assets/img/jessica.jpg')); ?>"
                    alt="Founder"
                    class="founder-image w-100 h-100">
            </div>
            <div class="col-md-7 founder-content">
                <span class="text-primary mb-3 d-block">
                    <?php echo esc_html(get_theme_mod('founder_section_heading', 'MEET OUR FOUNDER')); ?>
                </span>
                <h2 class="mb-3" id="founder-name">
                    <?php echo esc_html(get_theme_mod('founder_name', 'Jessica Alvarez')); ?>
                </h2>
                <h5 class="text-secondary mb-4" id="founder-title">
                    <?php echo esc_html(get_theme_mod('founder_title', 'Founder & CEO')); ?>
                </h5>
                <p class="mb-4" id="founder-bio">
                    <?php echo esc_html(get_theme_mod('founder_bio', 'With over 15 years of experience in real estate and property management, Jessica founded WEManagement with a vision to revolutionize the industry through technology and exceptional service.')); ?>
                </p>
                <div class="founder-quote mb-4" id="founder-quote">
                    <p>"<?php echo esc_html(get_theme_mod('founder_quote', 'Our success comes from treating every property as if it were our own and every tenant as a valued member of our community. This philosophy has guided us from day one.')); ?>"</p>
                </div>
                <div class="founder-social mb-4">
                    <a id="founder-linkedin" href="<?php echo esc_url(get_theme_mod('founder_linkedin', 'https://www.linkedin.com/in/jessicaalvarezcre/')); ?>"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Affiliate Partners Section -->
<div class="partners-section">
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mb-5">
                <span class="text-primary mb-3 d-block">TRUSTED PARTNERS</span>
                <h2 class="mb-4">Our Affiliate Network</h2>
                <p class="w-75 mx-auto">We collaborate with industry leaders to provide comprehensive solutions
                    for all your property needs.</p>
            </div>

            <div class="partner-carousel">
                <div class="partner-item text-center p-4">
                    <a href="https://crewftlbr.org/" target="_blank" rel="noopener">
                        <img src="<?php echo esc_url(get_theme_mod('partner_logo_crew', get_template_directory_uri() . '/assets/img/partners/crew.jpg')); ?>" class="partner-logo" alt="CREW Fort Lauderdale">
                    </a>
                </div>
                <div class="partner-item text-center p-4">
                    <a href="https://www.csimoldspecialist.com/" target="_blank" rel="noopener">
                        <img src="<?php echo esc_url(get_theme_mod('partner_logo_csi', get_template_directory_uri() . '/assets/img/partners/CSI-Mold-Specialist-logo.png')); ?>" class="partner-logo" alt="CSI Mold Specialist">
                    </a>
                </div>
                <div class="partner-item text-center p-4">
                    <a href="https://www.bomamiamidade.org/" target="_blank" rel="noopener">
                        <img src="<?php echo esc_url(get_theme_mod('partner_logo_boma', get_template_directory_uri() . '/assets/img/partners/boma-miami-logo.jpg')); ?>" class="partner-logo" alt="BOMA Miami">
                    </a>
                </div>
                <div class="partner-item text-center p-4">
                    <a href="https://www.cpc-tx.com/" target="_blank" rel="noopener">
                        <img src="<?php echo esc_url(get_theme_mod('partner_logo_cpc', get_template_directory_uri() . '/assets/img/partners/CPC_Logo.png')); ?>" class="partner-logo" alt="Claremont">
                    </a>
                </div>
                <div class="partner-item text-center p-4">
                    <a href="https://www.bankofamerica.com" target="_blank" rel="noopener">
                        <img src="<?php echo esc_url(get_theme_mod('partner_logo_boa', get_template_directory_uri() . '/assets/img/partners/boa.png')); ?>" class="partner-logo" alt="Bank of America">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('template-parts/home/section', 'cta2'); ?>

<?php get_footer(); ?>
</div>
<?php wp_footer(); ?>
</body>

</html>