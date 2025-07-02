<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3" id="testimonials-heading">
                <?php echo esc_html( get_theme_mod( 'testimonials_heading', 'What Our Clients Say' ) ); ?>
            </h1>
            <p id="testimonials-description">
                <?php echo wp_kses_post( get_theme_mod( 'testimonials_description', "We take pride in the relationships we've built. Here's what some of our clients have to say about their experience working with us - real stories from satisfied tenants, landlords, and partners." ) ); ?>
            </p>
        </div>

        <?php $testimonials = get_theme_mod( 'testimonials_repeater', [] ); ?>
        <?php
$testimonials = get_theme_mod('testimonials_repeater');

// Manually fallback to defaults if testimonials are empty
if (empty($testimonials)) {
    $testimonials = [
        [
            'message' => 'Working with WE Management Group has been a game changer. Their attention to detail, communication, and commitment to excellence make them stand out in commercial real estate.',
            'name'    => 'Crystal Esparza',
            'role'    => 'Client',
            'image'   => get_template_directory_uri() . '/assets/img/testimonial.png',
        ],
        [
            'message' => 'Jessica is an outstanding property manager. Her attention to detail, clear communication, and ability to handle both tenants and property needs with ease make her a true asset in this industry. I\'ve worked with many property managers, and Jessica stands out as one of the best. Highly recommend W.E. Management Group!',
            'name'    => 'Fatherzup World',
            'role'    => 'Client',
            'image'   => get_template_directory_uri() . '/assets/img/testimonial.png',
        ],
        [
            'message' => 'I highly recommend WE Management Group. Jessica was very efficient and professional. She really looks out for the best interest of her clients.',
            'name'    => 'Quality Health',
            'role'    => 'Client',
            'image'   => get_template_directory_uri() . '/assets/img/testimonial.png',
        ],
    ];
}
?>

        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s" id="client-testimonials">
            <?php foreach ( $testimonials as $item ) : ?>
                <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4" style="height: 320px;">
                        <p><?php echo wp_kses_post( $item['message'] ); ?></p>
                        <div class="d-flex align-items-center mt-3">
                            <img class="img-fluid flex-shrink-0 rounded"
                                src="<?php echo esc_url( $item['image'] ?: get_template_directory_uri() . '/assets/img/testimonial.png' ); ?>"
                                alt="<?php echo esc_attr( $item['name'] ); ?>"
                                style="width: 58px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1"><?php echo esc_html( $item['name'] ); ?></h6>
                                <small><?php echo esc_html( $item['role'] ); ?></small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>

</div>