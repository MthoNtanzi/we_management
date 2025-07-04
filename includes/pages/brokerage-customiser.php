<?php
if ( ! class_exists( 'Kirki' ) ) {
    return;
}

// PANEL: Brokerage Settings
new \Kirki\Panel( 'brokerage_panel', [
    'priority'    => 10,
    'title'       => esc_html__( 'Brokerage Page Settings', 'kirki' ),
    'description' => esc_html__( 'Customize the Brokerage service page.', 'kirki' ),
]);

/** ========== Section: What is a Brokerage ========== */
new \Kirki\Section( 'brokerage_intro_section', [
    'title'    => esc_html__( 'Intro: What is a Brokerage', 'kirki' ),
    'panel'    => 'brokerage_panel',
    'priority' => 10,
]);

Kirki::add_field( 'your_theme_config_id', [
    'type'        => 'text',
    'settings'    => 'brokerage_intro_heading',
    'label'       => esc_html__( 'Heading', 'kirki' ),
    'section'     => 'brokerage_intro_section',
    'default'     => 'What is a Brokerage?',
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'brokerage_intro_heading' => [
            'selector'        => '#brokerage-intro-heading',
            'render_callback' => function() {
                return esc_html( get_theme_mod( 'brokerage_intro_heading' ) );
            },
        ],
    ],
]);

Kirki::add_field( 'your_theme_config_id', [
    'type'        => 'textarea',
    'settings'    => 'brokerage_intro_paragraph',
    'label'       => esc_html__( 'Paragraph', 'kirki' ),
    'section'     => 'brokerage_intro_section',
    'default'     => 'Brokerage services connect buyers, sellers, and tenants with the right commercial properties...',
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'brokerage_intro_paragraph' => [
            'selector'        => '#brokerage-intro-paragraph',
            'render_callback' => function() {
                return '<p id="brokerage-intro-paragraph" class="text-muted">' . esc_html( get_theme_mod( 'brokerage_intro_paragraph' ) ) . '</p>';
            },
        ],
    ],
]);

/** ========== Section: What We Offer ========== */
new \Kirki\Section( 'brokerage_offer_section', [
    'title'    => esc_html__( 'Section: What We Offer', 'kirki' ),
    'panel'    => 'brokerage_panel',
    'priority' => 20,
]);

Kirki::add_field( 'your_theme_config_id', [
    'type'        => 'text',
    'settings'    => 'brokerage_offer_heading',
    'label'       => esc_html__( 'Heading', 'kirki' ),
    'section'     => 'brokerage_offer_section',
    'default'     => "What We'll Offer",
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'brokerage_offer_heading' => [
            'selector'        => '#brokerage-offer-heading',
            'render_callback' => function() {
                return esc_html( get_theme_mod( 'brokerage_offer_heading' ) );
            },
        ],
    ],
]);

$offer_items = [
    'property_listings' => [
        'title' => 'Property Listings',
        'desc'  => 'Access exclusive listings for office, retail, and industrial spaces.',
    ],
    'buyer_representation' => [
        'title' => 'Buyer/Seller Representation',
        'desc'  => 'Expert guidance through every transaction step.',
    ],
    'leasing_services' => [
        'title' => 'Leasing Services',
        'desc'  => 'Find the perfect tenants or spaces with our market insights.',
    ],
    'licensed_brokers' => [
        'title' => 'Licensed Brokers',
        'desc'  => 'We leverage data to secure the best deals.',
    ],
    'personalized_service' => [
        'title' => 'Personalized Service',
        'desc'  => 'Trust, integrity, and wealth-building advice.',
    ],
];

foreach ( $offer_items as $key => $item ) {
    // Title
    Kirki::add_field( 'your_theme_config_id', [
        'type'        => 'text',
        'settings'    => "brokerage_offer_{$key}_title",
        'label'       => esc_html__( $item['title'] . ' - Title', 'kirki' ),
        'section'     => 'brokerage_offer_section',
        'default'     => $item['title'],
        'transport'   => 'postMessage',
        'partial_refresh' => [
            "brokerage_offer_{$key}_title" => [
                'selector'        => "#brokerage-offer-{$key}-title",
                'render_callback' => function() use ( $key ) {
                    return esc_html( get_theme_mod( "brokerage_offer_{$key}_title" ) );
                },
            ],
        ],
    ]);

    // Description
    Kirki::add_field( 'your_theme_config_id', [
        'type'        => 'textarea',
        'settings'    => "brokerage_offer_{$key}_desc",
        'label'       => esc_html__( $item['title'] . ' - Description', 'kirki' ),
        'section'     => 'brokerage_offer_section',
        'default'     => $item['desc'],  // Set default description here
        'transport'   => 'postMessage',
        'partial_refresh' => [
            "brokerage_offer_{$key}_desc" => [
                'selector'        => "#brokerage-offer-{$key}-desc",
                'render_callback' => function() use ( $key ) {
                    return esc_html( get_theme_mod( "brokerage_offer_{$key}_desc" ) );
                },
            ],
        ],
    ]);
}

/** ========== Section: Why Use Our Brokerage ========== */
new \Kirki\Section( 'brokerage_why_us_section', [
    'title'    => esc_html__( 'Section: Why Use Our Brokerage', 'kirki' ),
    'panel'    => 'brokerage_panel',
    'priority' => 30,
]);

Kirki::add_field( 'your_theme_config_id', [
    'type'        => 'text',
    'settings'    => 'brokerage_why_heading',
    'label'       => esc_html__( 'Heading', 'kirki' ),
    'section'     => 'brokerage_why_us_section',
    'default'     => 'Why Use Our Brokerage',
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'brokerage_why_heading' => [
            'selector'        => '#brokerage-why-heading',
            'render_callback' => function() {
                return esc_html( get_theme_mod( 'brokerage_why_heading' ) );
            },
        ],
    ],
]);

$why_items = [
    'licensed_brokers' => 'Licensed Brokers',
    'market_insights' => 'Market Insights',
    'personalized_service' => 'Personalized Service',
];

foreach ( $why_items as $key => $label ) {
    Kirki::add_field( 'your_theme_config_id', [
        'type'        => 'text',
        'settings'    => "brokerage_why_{$key}_title",
        'label'       => esc_html__( "$label - Title", 'kirki' ),
        'section'     => 'brokerage_why_us_section',
        'default'     => $label,
        'transport'   => 'postMessage',
        'partial_refresh' => [
            "brokerage_why_{$key}_title" => [
                'selector'        => "#brokerage-why-{$key}-title",
                'render_callback' => function() use ( $key ) {
                    return esc_html( get_theme_mod( "brokerage_why_{$key}_title" ) );
                },
            ],
        ],
    ]);

    Kirki::add_field( 'your_theme_config_id', [
        'type'        => 'textarea',
        'settings'    => "brokerage_why_{$key}_desc",
        'label'       => esc_html__( "$label - Description", 'kirki' ),
        'section'     => 'brokerage_why_us_section',
        'default'     => '',
        'transport'   => 'postMessage',
        'partial_refresh' => [
            "brokerage_why_{$key}_desc" => [
                'selector'        => "#brokerage-why-{$key}-desc",
                'render_callback' => function() use ( $key ) {
                    return esc_html( get_theme_mod( "brokerage_why_{$key}_desc" ) );
                },
            ],
        ],
    ]);
}
