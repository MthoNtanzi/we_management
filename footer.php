<div class="container-fluid bg-dark text-white-50 footer pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <!-- Contact Info -->
            <div class="col-lg-4 row-md">
                <h5 class="text-white mb-4">Get In Touch</h5>
                <p class="mb-2" id="footer_address">
                    <i class="fa fa-map-marker-alt me-3"></i>
                    <?php echo wp_kses_post(get_theme_mod('footer_address', '1031 Ives Dairy Rd')); ?>
                </p>
                <p class="mb-2" id="footer_phone">
                    <i class="fa fa-phone-alt me-3"></i>
                    <?php echo wp_kses_post(get_theme_mod('footer_phone', '786-906-2928')); ?>
                </p>
                <p class="mb-2" id="footer_email">
                    <i class="fa fa-envelope me-3"></i>
                    <?php echo wp_kses_post(get_theme_mod('footer_email', 'support@wemanagecre.com')); ?>
                </p>
                <div class="d-flex pt-2">
                    <?php if ($fb = get_theme_mod('footer_facebook', 'https://www.facebook.com/wemanagecre')): ?>
                        <a id="footer_facebook" class="btn btn-outline-light btn-social" href="<?php echo esc_url($fb); ?>">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    <?php endif; ?>
                    <?php if ($ig = get_theme_mod('footer_instagram', 'https://www.instagram.com/wemanagecre/')): ?>
                        <a id="footer_instagram" class="btn btn-outline-light btn-social" href="<?php echo esc_url($ig); ?>">
                            <i class="fab fa-instagram"></i>
                        </a>
                    <?php endif; ?>
                    <?php if ($li = get_theme_mod('footer_linkedin', 'https://www.linkedin.com/company/wemanagementgroup/')): ?>
                        <a id="footer_linkedin" class="btn btn-outline-light btn-social" href="<?php echo esc_url($li); ?>">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-4 row-md">
                <h5 class="text-white mb-4">Quick Links</h5>
                <a class="btn btn-link text-white-50" href="<?php echo home_url('/about'); ?>">About Us</a>
                <a class="btn btn-link text-white-50" href="<?php echo home_url('/contact'); ?>">Contact Us</a>
                <a class="btn btn-link text-white-50" href="<?php echo home_url('/services'); ?>">Our Services</a>
                <a class="btn btn-link text-white-50" href="<?php echo home_url('/blog'); ?>">Our Blog</a>
            </div>

            <!-- Business Hours -->
            <div class="col-lg-4 row-md">
                <h5 class="text-white mb-4">Business Hours</h5>
                <p id="footer_hours">
                    <i class="fa fa-clock me-3"></i>
                    <?php echo wp_kses_post(nl2br(get_theme_mod('footer_hours', "Monday - Friday: 9:00 AM - 6:00 PM\nSaturday: 09:00 AM - 12:00 PM"))); ?>
                </p>
            </div>
        </div>
    </div>

    <!-- Bottom Footer -->
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">
                        <?php echo wp_kses_post(get_theme_mod('footer_company_name', 'WE Management')); ?>
                    </a>, All Rights Reserved.
                    Designed By
                    <a class="border-bottom" href="<?php echo esc_url(get_theme_mod('footer_designer_link', 'https://talentmatchafrica.com')); ?>" target="_blank">
                        <?php echo wp_kses_post(get_theme_mod('footer_designer_name', 'TMA')); ?>
                    </a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="<?php echo home_url(); ?>">Home</a>
                        <a href="#">FAQs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>