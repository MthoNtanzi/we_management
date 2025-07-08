<div class="container py-5 text-center">


    <div class="justify-content-center g-5 text-center py-5">
        <div class="col-md-6 mx-auto">
            <h1 class="mb-4 text-primary" id="wecare_heading">
                <?php echo esc_html( get_theme_mod( 'wecare_heading', 'What Is WE Property Care?' ) ); ?>
            </h1>
            <p class="text-muted" id="wecare_paragraph_1">
                <?php echo esc_html( get_theme_mod( 'wecare_paragraph_1', 'An education platform empowering businesses to proactively spot, report, and manage maintenance issues early.' ) ); ?>
            </p>
            <p id="wecare_paragraph_2">
                <?php echo esc_html( get_theme_mod( 'wecare_paragraph_2', 'Empowering businesses to protect their properties through education, preventive maintenance programs, and ongoing expert support.' ) ); ?>
            </p>
        </div>
    </div>

    <!-- Start of Service Packages -->
    <div class="justify-content-center g-5 text-center py-5">
        <h1 class="mb-4 text-primary" id="wecare_packages_heading">
            <?php echo esc_html( get_theme_mod( 'wecare_packages_heading', 'Service Packages' ) ); ?>
        </h1>
        <div class="service_package_container">
            <?php
                $package_items = [
                    'essentials' => [
                        'heading' => 'ESSENTIALS PACKAGE:',
                        'tagline' => 'A one-time workshop and playbook to kickstart your maintenance strategy.',
                        'desc'    => 'Inclusions: 3-hour training workshop, 1 custom playbook with checklists.',
                    ],
                    'proactive' => [
                        'heading' => 'PROACTIVE PARTNER PACKAGE:',
                        'tagline' => 'Comprehensive support with training, audits, and a year-long subscription.',
                        'desc'    => 'Inclusions: Training workshop, custom playbook, quarterly audits, 1-year WE Property Care™ Membership.',
                    ],
                    'full_facility' => [
                        'heading' => 'FULL FACILITY CARE PACKAGE:',
                        'tagline' => 'Our premium offering, including access to a future digital maintenance platform.',
                        'desc'    => 'Inclusions: All Proactive Partner features plus access to a maintenance management platform.',
                    ],
                ];

                foreach ( $package_items as $key => $defaults ) :
                    $heading = get_theme_mod( "wecare_package_{$key}_heading", $defaults['heading'] );
                    $tagline = get_theme_mod( "wecare_package_{$key}_tagline", $defaults['tagline'] );
                    $desc    = get_theme_mod( "wecare_package_{$key}_desc", $defaults['desc'] );
                    ?>
                    <div class="service_package_box">
                        <h3 class="service_package_heading" id="wecare_package_<?php echo esc_attr($key); ?>_heading">
                            <?php echo esc_html( $heading ); ?>
                        </h3>
                        <p class="text-primary" id="wecare_package_<?php echo esc_attr($key); ?>_tagline">
                            <?php echo esc_html( $tagline ); ?>
                        </p>
                        <p id="wecare_package_<?php echo esc_attr($key); ?>_desc">
                            <?php echo esc_html( $desc ); ?>
                        </p>
                    </div>
                <?php endforeach; ?>
        </div>
    </div>

    <!-- End of Service Packages -->

    <!-- Start of why choose we property care -->
    <div class="justify-content-center g-5 text-center py-5">
        <h1 class="mb-4 text-primary" id="wecare_why_heading">
            <?php echo esc_html( get_theme_mod( 'wecare_why_heading', 'Why Choose We Property Care?' ) ); ?>
        </h1>
        <div class="we_prop_care_container">
            <?php
                $why_items = [
                    'proactive'   => ['bi bi-gear-fill', 'Proactive Approach', 'Prevent costly repairs with early issue detection'],
                    'empowerment' => ['bi bi-journal-check', 'Empowerment', 'Train your team to manage maintenance confidently.'],
                    'scalable'    => ['bi bi-layers-fill', 'Scalable Support', 'From workshops to subscriptions, we grow with your needs.'],
                    'alignment'   => ['bi bi-shield-lock-fill', 'Alignment with Core Values', 'Reliability, transparency, and high-touch service.'],
                ];

            foreach ( $why_items as $key => $defaults ) :
                $icon  = get_theme_mod( "wecare_why_{$key}_icon", $defaults[0] );
                $title = get_theme_mod( "wecare_why_{$key}_title", $defaults[1] );
                $desc  = get_theme_mod( "wecare_why_{$key}_desc", $defaults[2] );
                ?>
                <div class="we_prop_care_grid_item">
                    <i class="<?php echo esc_attr( $icon ); ?>"></i>
                    <h1 id="wecare_why_<?php echo esc_attr($key); ?>_title">
                        <?php echo esc_html( $title ); ?>
                    </h1>
                    <p id="wecare_why_<?php echo esc_attr($key); ?>_desc">
                        <?php echo esc_html( $desc ); ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- End of why choose we property care -->

</div>