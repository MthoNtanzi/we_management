<?php

if ( ! class_exists( 'Kirki' ) ) {
    return;
}

// === Panel: Property Management Settings ===
new \Kirki\Panel( 'property_panel', [
    'priority'    => 10,
    'title'       => esc_html__( 'Property Management Settings', 'kirki' ),
    'description' => esc_html__( 'Customize the Property Management service page.', 'kirki' ),
]);

// === Section: Intro ===
new \Kirki\Section( 'property_intro_section', [
    'title'    => esc_html__( 'Intro: What is Property Management?', 'kirki' ),
    'panel'    => 'property_panel',
    'priority' => 10,
]);

Kirki::add_field( 'your_theme_config_id', [
    'type'        => 'text',
    'settings'    => 'property_intro_heading',
    'label'       => esc_html__( 'Heading', 'kirki' ),
    'section'     => 'property_intro_section',
    'default'     => 'What is Commercial Real Estate Property Management?',
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'property_intro_heading' => [
            'selector'        => '#property-intro-heading',
            'render_callback' => function () {
                return esc_html( get_theme_mod( 'property_intro_heading' ) );
            },
        ],
    ],
]);

Kirki::add_field( 'your_theme_config_id', [
    'type'        => 'textarea',
    'settings'    => 'property_intro_paragraph',
    'label'       => esc_html__( 'Paragraph', 'kirki' ),
    'section'     => 'property_intro_section',
    'default'     => 'Commercial property management involves overseeing daily operations, tenant relations, and financial performance to enhance property value. At WE Management Group, we handle every detail so you can focus on your business.',
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'property_intro_paragraph' => [
            'selector'        => '#property-intro-paragraph',
            'render_callback' => function () {
                return esc_html( get_theme_mod( 'property_intro_paragraph' ) );
            },
        ],
    ],
]);

// === Section: What We Do ===
new \Kirki\Section( 'property_what_we_do_section', [
    'title'    => esc_html__( 'Section: What We Do', 'kirki' ),
    'panel'    => 'property_panel',
    'priority' => 20,
]);

Kirki::add_field( 'your_theme_config_id', [
    'type'        => 'text',
    'settings'    => 'property_what_we_do_heading',
    'label'       => esc_html__( 'Heading', 'kirki' ),
    'section'     => 'property_what_we_do_section',
    'default'     => 'What We Do',
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'property_what_we_do_heading' => [
            'selector'        => '#property-what-we-do-heading',
            'render_callback' => function () {
                return esc_html( get_theme_mod( 'property_what_we_do_heading' ) );
            },
        ],
    ],
]);

$what_we_do_items = [
    'maintenance_coordination' => 'Maintenance Coordination',
    'less_administration'      => 'Less Administration',
    'vendor_management'        => 'Vendor Management',
];

foreach ( $what_we_do_items as $key => $label ) {

    // Title Field
    Kirki::add_field( 'your_theme_config_id', [
        'type'        => 'text',
        'settings'    => "property_what_we_do_{$key}_title",
        'label'       => esc_html__( "$label - Title", 'kirki' ),
        'section'     => 'property_what_we_do_section',
        'default'     => $label,
        'transport'   => 'postMessage',
        'partial_refresh' => [
            "property_what_we_do_{$key}_title" => [
                'selector'        => "#property-what-we-do-{$key}-title",
                'render_callback' => function () use ( $key ) {
                    return esc_html( get_theme_mod( "property_what_we_do_{$key}_title" ) );
                },
            ],
        ],
    ]);

    // Description Field
    Kirki::add_field( 'your_theme_config_id', [
        'type'        => 'textarea',
        'settings'    => "property_what_we_do_{$key}_desc",
        'label'       => esc_html__( "$label - Description", 'kirki' ),
        'section'     => 'property_what_we_do_section',
        'default'     => match ( $key ) {
            'maintenance_coordination' => 'We promptly handle all property maintenance requests, coordinating repairs and inspections to ensure tenant satisfaction and property upkeep. Our team works with trusted professionals to address issues efficiently. Regular maintenance schedules keep your properties in top condition.',
            'less_administration'      => 'Our lease administration services streamline the leasing process, from drafting and renewing leases to ensuring compliance with local regulations. We manage tenant communications and documentation for hassle-free operations.',
            'vendor_management'        => 'We oversee a network of reliable vendors, securing quality services at competitive rates for your properties. Our team negotiates contracts and monitors performance to ensure accountability.',
            default                    => '',
        },
        'transport'   => 'postMessage',
        'partial_refresh' => [
            "property_what_we_do_{$key}_desc" => [
                'selector'        => "#property-what-we-do-{$key}-desc",
                'render_callback' => function () use ( $key ) {
                    return esc_html( get_theme_mod( "property_what_we_do_{$key}_desc" ) );
                },
            ],
        ],
    ]);
}


new \Kirki\Section( 'property_why_choose_section', [
    'title'    => esc_html__( 'Why Choose Us', 'kirki' ),
    'panel'    => 'property_panel',
    'priority' => 30,
]);

Kirki::add_field( 'your_theme_config_id', [
    'type'        => 'text',
    'settings'    => 'property_why_choose_heading',
    'label'       => esc_html__( 'Section Heading', 'kirki' ),
    'section'     => 'property_why_choose_section',
    'default'     => 'Why Choose Us?',
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'property_why_choose_heading' => [
            'selector'        => '#property-why-choose-heading',
            'render_callback' => function() {
                return esc_html( get_theme_mod( 'property_why_choose_heading' ) );
            },
        ],
    ],
]);

$why_items = [
    'local_expertise' => 'Local Expertise',
    'personalized_service' => 'Personalized Service',
    'results_driven' => 'Results-Driven',
];

foreach ( $why_items as $key => $label ) {
    // Title
    Kirki::add_field( 'your_theme_config_id', [
        'type'        => 'text',
        'settings'    => "property_why_choose_{$key}_title",
        'label'       => esc_html__( "$label - Title", 'kirki' ),
        'section'     => 'property_why_choose_section',
        'default'     => $label,
        'transport'   => 'postMessage',
        'partial_refresh' => [
            "property_why_choose_{$key}_title" => [
                'selector'        => "#property-why-choose-{$key}-title",
                'render_callback' => function() use ( $key ) {
                    return esc_html( get_theme_mod( "property_why_choose_{$key}_title" ) );
                },
            ],
        ],
    ]);

    // Description
    Kirki::add_field( 'your_theme_config_id', [
        'type'        => 'textarea',
        'settings'    => "property_why_choose_{$key}_desc",
        'label'       => esc_html__( "$label - Description", 'kirki' ),
        'section'     => 'property_why_choose_section',
        'default'     => '',
        'transport'   => 'postMessage',
        'partial_refresh' => [
            "property_why_choose_{$key}_desc" => [
                'selector'        => "#property-why-choose-{$key}-desc",
                'render_callback' => function() use ( $key ) {
                    return esc_html( get_theme_mod( "property_why_choose_{$key}_desc" ) );
                },
            ],
        ],
    ]);

    // Image (optional)
    Kirki::add_field( 'your_theme_config_id', [
        'type'      => 'image',
        'settings'  => "property_why_choose_{$key}_image",
        'label'     => esc_html__( "$label - Image", 'kirki' ),
        'section'   => 'property_why_choose_section',
        'default'   => '',
    ]);
}

// SECTION: Consultation
new \Kirki\Section( 'property_consultation_section', [
    'title'    => esc_html__( 'Consultation Section', 'kirki' ),
    'panel'    => 'property_management_panel',
    'priority' => 40,
]);

Kirki::add_field( 'your_theme_config_id', [
    'type'        => 'text',
    'settings'    => 'property_consultation_heading',
    'label'       => esc_html__( 'Heading', 'kirki' ),
    'section'     => 'property_consultation_section',
    'default'     => 'Consultations',
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'property_consultation_heading' => [
            'selector'        => '#property_consultation_heading',
            'render_callback' => function () {
                return esc_html( get_theme_mod( 'property_consultation_heading' ) );
            },
        ],
    ],
]);

Kirki::add_field( 'your_theme_config_id', [
    'type'        => 'textarea',
    'settings'    => 'property_consultation_paragraph',
    'label'       => esc_html__( 'Paragraph', 'kirki' ),
    'section'     => 'property_consultation_section',
    'default'     => 'Looking for specific facilities management support? Our consultations provide tailored solutions for businesses needing partial services.',
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'property_consultation_paragraph' => [
            'selector'        => '#property_consultation_paragraph',
            'render_callback' => function () {
                return esc_html( get_theme_mod( 'property_consultation_paragraph' ) );
            },
        ],
    ],
]);

new \Kirki\Section( 'property_consultation_blocks_section', [
    'title'    => esc_html__( 'Consultation Blocks', 'kirki' ),
    'panel'    => 'property_management_panel',
    'priority' => 50,
]);

$consultation_blocks = [
    'vendor_sourcing'      => 'Vendor Sourcing',
    'maintenance_planning' => 'Maintenance Planning',
    'invoice_coordination' => 'Invoice Coordination',
    'project_support'      => 'Project Support',
];

foreach ( $consultation_blocks as $key => $label ) {
    Kirki::add_field( 'your_theme_config_id', [
        'type'        => 'text',
        'settings'    => "property_consult_{$key}_title",
        'label'       => esc_html__( "$label - Title", 'kirki' ),
        'section'     => 'property_consultation_blocks_section',
        'default'     => strtoupper( $label ),
        'transport'   => 'postMessage',
        'partial_refresh' => [
            "property_consult_{$key}_title" => [
                'selector'        => "#property_consult_{$key}_title",
                'render_callback' => function () use ( $key ) {
                    return esc_html( get_theme_mod( "property_consult_{$key}_title" ) );
                },
            ],
        ],
    ]);

    Kirki::add_field( 'your_theme_config_id', [
        'type'        => 'textarea',
        'settings'    => "property_consult_{$key}_desc",
        'label'       => esc_html__( "$label - Description", 'kirki' ),
        'section'     => 'property_consultation_blocks_section',
        'default'     => match ( $key ) {
            'vendor_sourcing'      => "Find and vet vendors for your locations' maintenance needs.",
            'maintenance_planning' => "Develop a maintenance schedule for your properties.",
            'invoice_coordination' => "Set up invoice processing for multiple locations.",
            'project_support'      => "Get help managing specific facilities projects from sourcing to execution.",
            default                => '',
        },
        'transport'   => 'postMessage',
        'partial_refresh' => [
            "property_consult_{$key}_desc" => [
                'selector'        => "#property_consult_{$key}_desc",
                'render_callback' => function () use ( $key ) {
                    return esc_html( get_theme_mod( "property_consult_{$key}_desc" ) );
                },
            ],
        ],
    ]);
}

new \Kirki\Section( 'property_commitment_section', [
    'title'    => esc_html__( 'Commitment Section', 'kirki' ),
    'panel'    => 'property_management_panel',
    'priority' => 60,
]);

Kirki::add_field( 'your_theme_config_id', [
    'type'        => 'text',
    'settings'    => 'property_commitment_heading',
    'label'       => esc_html__( 'Heading', 'kirki' ),
    'section'     => 'property_commitment_section',
    'default'     => 'Our Commitment',
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'property_commitment_heading' => [
            'selector'        => '#property_commitment_heading',
            'render_callback' => function () {
                return esc_html( get_theme_mod( 'property_commitment_heading' ) );
            },
        ],
    ],
]);

Kirki::add_field( 'your_theme_config_id', [
    'type'        => 'textarea',
    'settings'    => 'property_commitment_paragraph',
    'label'       => esc_html__( 'Paragraph', 'kirki' ),
    'section'     => 'property_commitment_section',
    'default'     => "At WE Management Group, we are more than a service provider—we are your trusted partner. We are committed to delivering measurable results, building strong relationships, and creating spaces that inspire success. Let us help you achieve your commercial real estate goals and transform your properties into thriving assets. Contact us today to learn how we can elevate your property's potential.",
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'property_commitment_paragraph' => [
            'selector'        => '#property_commitment_paragraph',
            'render_callback' => function () {
                return esc_html( get_theme_mod( 'property_commitment_paragraph' ) );
            },
        ],
    ],
]);
