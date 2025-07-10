<div class="justify-content-center g-5 text-center py-5">
    <!-- What is a Brokerage -->
    <div class="col-md-6 mx-auto">
        <h1 id="facility-intro-heading" class="mb-4 text-primary">
            <?php echo esc_html( get_theme_mod( 'facility_intro_heading', 'What is Facility Management?' ) ); ?>
        </h1>
        <p id="facility-intro-paragraph" class="text-muted">
            <?php echo esc_html( get_theme_mod( 'facility_intro_paragraph', 'Our facility management services streamline operations for single or multi-location properties, such as offices or retail franchises...' ) ); ?>
        </p>
        <div id="facility-intro-button">
            <a href="<?php echo esc_url( get_theme_mod( 'facility_intro_button_url', '#' ) ); ?>" class="btn btn-primary mt-3">Learn More</a>
        </div>
    </div>
</div>

<!-- What we offer -->
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 id="facility-offer-heading" class="text-primary">
            <?php echo esc_html( get_theme_mod('facility_offer_heading', 'What We Offer?') ); ?>
        </h1>
    </div>
    <div class="row text-center g-4">

        <?php
$services = [
    'vendor_coordination' => [
        'label'        => 'Vendor Coordination',
        'default_desc' => 'We vet and manage vendors for landscaping, roofing, HVAC, and more, ensuring quality and cost-efficiency.',
        'default_img'  => '/assets/img/fm_services/vendor_coordination/mechanic.jpg',
    ],
    'maintenance_oversight' => [
        'label'        => 'Maintenance Oversight',
        'default_desc' => 'Coordinate routine and emergency maintenance, responding quickly to tenant or owner needs.',
        'default_img'  => '/assets/img/fm_services/maintenance_oversight/maintanamce.jpg',
    ],
    'invoice_processing' => [
        'label'        => 'Invoice Processing',
        'default_desc' => 'Process vendor invoices and liaise with your accountant for seamless financial tracking.',
        'default_img'  => '/assets/img/fm_services/invoice_processing/invoice_2.jpg',
    ],
];

foreach ( $services as $key => $service ) :
    $title = get_theme_mod( "service_{$key}_title" );
    $desc  = get_theme_mod( "service_{$key}_desc" );
    $img   = get_theme_mod( "service_{$key}_image" );

    if ( empty( $title ) ) {
        $title = $service['label'];
    }

    if ( empty( $desc ) ) {
        $desc = $service['default_desc'];
    }

    if ( empty( $img ) ) {
        $img = get_template_directory_uri() . $service['default_img'];
    }
    ?>
    <div class="service_block" id="service-<?php echo esc_attr( $key ); ?>">
        <h3><?php echo esc_html( $title ); ?></h3>
        <p><?php echo esc_html( $desc ); ?></p>
        <img src="<?php echo esc_url( $img ); ?>" alt="<?php echo esc_attr( $title ); ?>" class="img-fluid">
    </div>
<?php endforeach; ?>

    </div>
<!-- end of offer -->

<!-- Start of Consultations -->
<div class="container py-5 consul">
    <!-- Left consultation block -->
     <div class="consult_heading">
        <h2 id="facility-consult-heading" class="display-5 text-primary">
            <?php echo esc_html( get_theme_mod('facility_consult_heading', 'Consultations') ); ?>
        </h2>
        <p id="facility-consult-paragraph">
            <?php echo esc_html( get_theme_mod('facility_consult_paragraph', "Looking for specific facilities management support? Our consultations provide tailored solutions for businesses needing partial services.") ); ?>
        </p>
    </div>
    <!-- End of left block -->
    <!-- Right consultation block -->
    <!-- Vendor Sourcing -->
    <?php
        $consult_blocks = [
            'vendor_sourcing' => [
                'title' => 'VENDOR SOURCING',
                'desc'  => "Find and vet vendors for your locations' maintenance needs.",
            ],
            'maintenance_planning' => [
                'title' => 'MAINTENANCE PLANNING',
                'desc'  => 'Develop a maintenance schedule for your properties.',
            ],
            'invoice_coordination' => [
                'title' => 'INVOICE COORDINATION',
                'desc'  => 'Set up invoice processing for multiple locations',
            ],
            'project_support' => [
                'title' => 'PROJECT SUPPORT',
                'desc'  => "Find and vet vendors for your locations' maintenance needs.",
            ],
        ];

        foreach ( $consult_blocks as $key => $block ) :
            $title = get_theme_mod( "facility_consult_{$key}_title" );
            $desc  = get_theme_mod( "facility_consult_{$key}_desc" );

            if ( empty( $title ) ) {
                $title = $block['title'];
            }
            if ( empty( $desc ) ) {
                $desc = $block['desc'];
            }
            ?>
            <div class="individual_consutling_blocks">
                <h5 id="facility-consult-<?php echo esc_attr($key); ?>-title">
                    <?php echo esc_html( $title ); ?>
                </h5>
                <p id="facility-consult-<?php echo esc_attr($key); ?>-desc">
                    <?php echo esc_html( $desc ); ?>
                </p>
            </div>
<?php endforeach; ?>


    <!-- End of right block -->
</div>
<!-- End of Consultations -->
</div>