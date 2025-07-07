<!-- Content Start -->
        <div class="justify-content-center g-5 text-center py-5">
            <!-- What is a Brokerage -->
            <div class="col-md-6 mx-auto">
                <h1 id="property-intro-heading" class="mb-4 text-primary">
                    <?php echo esc_html( get_theme_mod('property_intro_heading', 'What is Commercial Real Estate Property Management?') ); ?>
                </h1>
                <p id="property-intro-paragraph" class="text-muted">
                    <?php echo esc_html( get_theme_mod('property_intro_paragraph', 'Commercial property management involves overseeing daily operations, tenant relations, and financial performance to enhance property value. At WE Management Group, we handle every detail so you can focus on your business.') ); ?>
                </p>
                <a href="#" class="btn btn-primary mt-3">Learn More</a>
            </div>

        </div>


        <div class="property-management-features">
            <h1 id="property-what-we-do-heading" class="mb-5 text-primary text-center">
                <?php echo esc_html( get_theme_mod( 'property_what_we_do_heading', 'What We Do' ) ); ?>
            </h1>

            <?php
            $what_we_do_items = [
                'maintenance_coordination' => 'Maintenance Coordination',
                'less_administration'      => 'Less Administration',
                'vendor_management'        => 'Vendor Management',
            ];
            ?>

            <div class="orange_blocks_container">
            <?php foreach ( $what_we_do_items as $key => $label ) : ?>
                <div class="orange_block_card">
                    <div class="orange_card_inner">
                        <div class="orange_blocks_front">
                            <span class="material-symbols-outlined">add</span>
                            <p id="property-what-we-do-<?php echo esc_attr($key); ?>-title">
                                <?php echo esc_html( get_theme_mod( "property_what_we_do_{$key}_title", $label ) ); ?>
                            </p>
                        </div>
                        <div class="orange_block_back">
                            <p id="property-what-we-do-<?php echo esc_attr($key); ?>-desc">
                                <?php echo esc_html( get_theme_mod(
                                    "property_what_we_do_{$key}_desc",
                                    match ( $key ) {
                                        'maintenance_coordination' => 'We promptly handle all property maintenance requests, coordinating repairs...',
                                        'less_administration' => 'Our lease administration services streamline the leasing process...',
                                        'vendor_management' => 'We oversee a network of reliable vendors, securing quality services...',
                                        default => ''
                                    }
                                ) ); ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>

        <?php
            $why_choose_us_items = [
                'local_expertise' => [
                    'title' => 'Local Expertise',
                    'desc'  => 'Deep knowledge of Florida\'s market trends.',
                    'img'   => '/assets/img/building/building_3.jpg',
                ],
                'personalized_service' => [
                    'title' => 'Personalized Service',
                    'desc'  => 'Boutique firm offering tailored solutions and concierge-style attention.',
                    'img'   => '/assets/img/why_choose_us/Personalized service/pexels-thirdman-8470032.jpg',
                ],
                'results_driven' => [
                    'title' => 'Results-Driven',
                    'desc'  => 'Focused on maximizing asset value and fostering thriving spaces.',
                    'img'   => '/assets/img/why_choose_us/Results driven/pexels-kindelmedia-7979418.jpg',
                ],
            ];
        ?>

        <div class="container">
            <div class="col-md-10 mx-auto" style="margin-top: 60px;">
                <h1 id="property-why-choose-heading" class="mb-5 text-primary text-center">
                    <?php echo esc_html( get_theme_mod('property_why_choose_heading', 'Why Choose Us?') ); ?>
                </h1>

                <div class="row text-center">
                    <?php foreach ( $why_choose_us_items as $key => $item ) : ?>
                        <div class="col-md-4 mb-4">
                            <img src="<?php echo esc_url( get_theme_mod(
                                "property_why_choose_{$key}_image",
                                get_template_directory_uri() . $item['img']
                            ) ); ?>" alt="<?php echo esc_attr( $item['title'] ); ?>" class="img-fluid rounded mb-3">

                            <h3 id="property-why-choose-<?php echo esc_attr($key); ?>-title">
                                <?php echo esc_html( get_theme_mod(
                                    "property_why_choose_{$key}_title",
                                    $item['title']
                                ) ); ?>
                            </h3>

                            <p id="property-why-choose-<?php echo esc_attr($key); ?>-desc">
                                <?php echo esc_html( get_theme_mod(
                                    "property_why_choose_{$key}_desc",
                                    $item['desc']
                                ) ); ?>
                            </p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>


        <!-- Start of Consultations -->
        <div class="container py-5 consul">
            <!-- Left consultation block -->
            <div class="consult_heading text-center">
                <h2 id="property_consultation_heading" class="display-5 text-primary">
                    <?php echo esc_html( get_theme_mod( 'property_consultation_heading', 'Consultations' ) ); ?>
                </h2>
                <p id="property_consultation_paragraph" class="text-muted">
                    <?php echo esc_html( get_theme_mod( 'property_consultation_paragraph', 'Looking for specific facilities management support? Our consultations provide tailored solutions for businesses needing partial services.' ) ); ?>
                </p>
            </div>
            <!-- End of left block -->
            <!-- Right consultation block -->
            <?php
                $consultation_blocks = [
                    'vendor_sourcing'      => 'Vendor Sourcing',
                    'maintenance_planning' => 'Maintenance Planning',
                    'invoice_coordination' => 'Invoice Coordination',
                    'project_support'      => 'Project Support',
                ];
            ?>

            <?php foreach ( $consultation_blocks as $key => $label ) : ?>
                <div class="individual_consutling_blocks">
                    <h5 id="property_consult_<?= $key; ?>_title">
                        <?php echo esc_html( get_theme_mod(
                            "property_consult_{$key}_title",
                            strtoupper( $label )
                        ) ); ?>
                    </h5>
                    <p id="property_consult_<?= $key; ?>_desc">
                        <?php echo esc_html( get_theme_mod(
                            "property_consult_{$key}_desc",
                            match ( $key ) {
                                'vendor_sourcing'      => "Find and vet vendors for your locations' maintenance needs.",
                                'maintenance_planning' => 'Develop a maintenance schedule for your properties.',
                                'invoice_coordination' => 'Set up invoice processing for multiple locations.',
                                'project_support'      => "Get help managing specific facilities projects from sourcing to execution.",
                                default                => '',
                            }
                        ) ); ?>
                    </p>
                </div>
            <?php endforeach; ?>

            <!-- End of right block -->
        </div>
        <!-- End of Consultations -->

        <div class="justify-content-center g-5 text-center py-5">
            <!-- Our Commitment -->
            <div class="col-md-6 mx-auto">
                <h1 class="mb-4 text-primary" id="property_commitment_heading">
                    <?php echo esc_html( get_theme_mod( 'property_commitment_heading', 'Our Commitment' ) ); ?>
                </h1>
                <p class="text-muted" id="property_commitment_paragraph">
                    <?php echo esc_html( get_theme_mod(
                        'property_commitment_paragraph',
                        "At WE Management Group, we are more than a service provider—we are your trusted partner. We are committed to delivering measurable results, building strong relationships, and creating spaces that inspire success. Let us help you achieve your commercial real estate goals and transform your properties into thriving assets. Contact us today to learn how we can elevate your property's potential."
                    ) ); ?>
                </p>
            </div>
        </div>

        <!-- Content End -->
