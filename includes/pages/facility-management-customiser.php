<?php
if ( ! class_exists( 'Kirki' ) ) {
    return;
}

// PANEL: Facility Management Settings
new \Kirki\Panel( 'facility_panel', [
    'priority'    => 10,
    'title'       => esc_html__( 'Facility Management Settings', 'kirki' ),
    'description' => esc_html__( 'Customize the Facility Management service page.', 'kirki' ),
]);

// SECTION: Intro - What is Facility Management
new \Kirki\Section( 'facility_intro_section', [
    'title'    => esc_html__( 'Intro: What is Facility Management', 'kirki' ),
    'panel'    => 'facility_panel',
    'priority' => 10,
]);

// Heading
Kirki::add_field( 'your_theme_config_id', [
    'type'        => 'text',
    'settings'    => 'facility_intro_heading',
    'label'       => esc_html__( 'Heading', 'kirki' ),
    'section'     => 'facility_intro_section',
    'default'     => 'What is Facility Management?',
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'facility_intro_heading' => [
            'selector'        => '#facility-intro-heading',
            'render_callback' => function() {
                return esc_html( get_theme_mod( 'facility_intro_heading' ) );
            },
        ],
    ],
]);

// Paragraph
Kirki::add_field( 'your_theme_config_id', [
    'type'        => 'textarea',
    'settings'    => 'facility_intro_paragraph',
    'label'       => esc_html__( 'Paragraph', 'kirki' ),
    'section'     => 'facility_intro_section',
    'default'     => 'Our facility management services streamline operations for single or multi-location properties...',
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'facility_intro_paragraph' => [
            'selector'        => '#facility-intro-paragraph',
            'render_callback' => function() {
                return '<p id="facility-intro-paragraph" class="text-muted">' . esc_html( get_theme_mod( 'facility_intro_paragraph' ) ) . '</p>';
            },
        ],
    ],
]);

// Button Link
Kirki::add_field( 'your_theme_config_id', [
    'type'        => 'text',
    'settings'    => 'facility_intro_button_url',
    'label'       => esc_html__( 'Button URL', 'kirki' ),
    'section'     => 'facility_intro_section',
    'default'     => '#',
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'facility_intro_button_url' => [
            'selector'        => '#facility-intro-button',
            'render_callback' => function() {
                return '<a href="' . esc_url( get_theme_mod( 'facility_intro_button_url' ) ) . '" class="btn btn-primary mt-3">Learn More</a>';
            },
        ],
    ],
]);

// SECTION: What We Offer
new \Kirki\Section( 'facility_offer_section', [
    'title'    => esc_html__( 'Section: What We Offer', 'kirki' ),
    'panel'    => 'facility_panel',
    'priority' => 20,
]);

Kirki::add_field( 'your_theme_config_id', [
    'type'        => 'text',
    'settings'    => 'facility_offer_heading',
    'label'       => esc_html__( 'Section Heading', 'kirki' ),
    'section'     => 'facility_offer_section',
    'default'     => 'What We Offer?',
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'facility_offer_heading' => [
            'selector'        => '#facility-offer-heading',
            'render_callback' => function () {
                return esc_html( get_theme_mod( 'facility_offer_heading' ) );
            },
        ],
    ],
]);

$services = [
    'vendor_coordination' => [
        'label' => 'Vendor Coordination',
        'default_desc' => 'We vet and manage vendors for landscaping, roofing, HVAC, and more, ensuring quality and cost-efficiency.',
        'default_img' => '/assets/img/fm_services/vendor_coordination/mechanic.jpg',
    ],
    'maintenance_oversight' => [
        'label' => 'Maintenance Oversight',
        'default_desc' => 'Coordinate routine and emergency maintenance, responding quickly to tenant or owner needs.',
        'default_img' => '/assets/img/fm_services/maintenance_oversight/maintanamce.jpg',
    ],
    'invoice_processing' => [
        'label' => 'Invoice Processing',
        'default_desc' => 'Process vendor invoices and liaise with your accountant for seamless financial tracking.',
        'default_img' => '/assets/img/fm_services/invoice_processing/invoice_2.jpg',
    ],
];

foreach ( $services as $key => $info ) {
    Kirki::add_field( 'your_theme_config_id', [
        'type'        => 'text',
        'settings'    => "facility_offer_{$key}_title",
        'label'       => esc_html__( "{$info['label']} - Title", 'kirki' ),
        'section'     => 'facility_offer_section',
        'default'     => $info['label'],
        'transport'   => 'postMessage',
        'partial_refresh' => [
            "facility_offer_{$key}_title" => [
                'selector'        => "#facility-offer-{$key}-title",
                'render_callback' => function () use ( $key ) {
                    return esc_html( get_theme_mod( "facility_offer_{$key}_title" ) );
                },
            ],
        ],
    ]);

    Kirki::add_field( 'your_theme_config_id', [
        'type'        => 'textarea',
        'settings'    => "facility_offer_{$key}_desc",
        'label'       => esc_html__( "{$info['label']} - Description", 'kirki' ),
        'section'     => 'facility_offer_section',
        'default'     => $info['default_desc'],
        'transport'   => 'postMessage',
        'partial_refresh' => [
            "facility_offer_{$key}_desc" => [
                'selector'        => "#facility-offer-{$key}-desc",
                'render_callback' => function () use ( $key ) {
                    return esc_html( get_theme_mod( "facility_offer_{$key}_desc" ) );
                },
            ],
        ],
    ]);
}

// SECTION: Consultations
new \Kirki\Section( 'facility_consult_section', [
    'title'    => esc_html__( 'Section: Consultations', 'kirki' ),
    'panel'    => 'facility_panel',
    'priority' => 30,
]);

// Main Heading & Paragraph
Kirki::add_field( 'your_theme_config_id', [
    'type'        => 'text',
    'settings'    => 'facility_consult_heading',
    'label'       => esc_html__( 'Heading', 'kirki' ),
    'section'     => 'facility_consult_section',
    'default'     => 'Consultations',
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'facility_consult_heading' => [
            'selector'        => '#facility-consult-heading',
            'render_callback' => function () {
                return esc_html( get_theme_mod( 'facility_consult_heading' ) );
            },
        ],
    ],
]);

Kirki::add_field( 'your_theme_config_id', [
    'type'        => 'textarea',
    'settings'    => 'facility_consult_paragraph',
    'label'       => esc_html__( 'Description', 'kirki' ),
    'section'     => 'facility_consult_section',
    'default'     => "Looking for specific facilities management support? Our consultations provide tailored solutions for businesses needing partial services.",
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'facility_consult_paragraph' => [
            'selector'        => '#facility-consult-paragraph',
            'render_callback' => function () {
                return '<p id="facility-consult-paragraph">' . esc_html( get_theme_mod( 'facility_consult_paragraph' ) ) . '</p>';
            },
        ],
    ],
]);

// Individual consulting blocks
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

foreach ( $consult_blocks as $key => $block ) {
    Kirki::add_field( 'your_theme_config_id', [
        'type'        => 'text',
        'settings'    => "facility_consult_{$key}_title",
        'label'       => esc_html__( "{$block['title']} - Title", 'kirki' ),
        'section'     => 'facility_consult_section',
        'default'     => $block['title'],
        'transport'   => 'postMessage',
        'partial_refresh' => [
            "facility_consult_{$key}_title" => [
                'selector'        => "#facility-consult-{$key}-title",
                'render_callback' => function () use ( $key ) {
                    return esc_html( get_theme_mod( "facility_consult_{$key}_title" ) );
                },
            ],
        ],
    ]);

    Kirki::add_field( 'your_theme_config_id', [
        'type'        => 'textarea',
        'settings'    => "facility_consult_{$key}_desc",
        'label'       => esc_html__( "{$block['title']} - Description", 'kirki' ),
        'section'     => 'facility_consult_section',
        'default'     => $block['desc'],
        'transport'   => 'postMessage',
        'partial_refresh' => [
            "facility_consult_{$key}_desc" => [
                'selector'        => "#facility-consult-{$key}-desc",
                'render_callback' => function () use ( $key ) {
                    return esc_html( get_theme_mod( "facility_consult_{$key}_desc" ) );
                },
            ],
        ],
    ]);
}
