<!-- Call to Action Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="bg-light rounded p-3">
            <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <img class="img-fluid rounded w-100" src="<?php echo esc_url(get_theme_mod('cta_image', get_template_directory_uri() . '/assets/img/get_in_touch/reach_out_2.jpg')); ?>" alt="">
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="mb-4">
                            <h1 class="mb-3">
                                <?php echo wp_kses_post(get_theme_mod('cta_heading', 'Get in Touch with a Certified Property Expert')); ?>
                            </h1>
                            <p>
                                <?php echo wp_kses_post(get_theme_mod('cta_text', 'Have questions or need help finding the right property? Our experienced real estate professional is here to assist you with expert guidance, whether you\'re leasing, buying, or listing your property.')); ?>
                            </p>
                        </div>
                        <a href="tel:<?php echo esc_attr(get_theme_mod('cta_phone', '786-906-2928')); ?>" class="btn btn-primary py-3 px-4 me-2">
                            <i class="fa fa-phone-alt me-2"></i>
                            <?php echo wp_kses_post(get_theme_mod('cta_call_button', 'Make A Call')); ?>
                        </a>
                        <a href="<?php echo esc_url(get_theme_mod('cta_appointment_link', './contact.html')); ?>" class="btn btn-dark py-3 px-4">
                            <i class="fa fa-calendar-alt me-2"></i>
                            <?php echo wp_kses_post(get_theme_mod('cta_appointment_button', 'Get Appointment')); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Call to Action End -->