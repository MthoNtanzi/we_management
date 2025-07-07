<?php
    // Panel for We Property Care Page
    new \Kirki\Panel( 'wecare_panel', [
        'priority'    => 10,
        'title'       => esc_html__( 'WE Property Care Page Settings', 'kirki' ),
        'description' => esc_html__( 'Customize the WE Property Care service page.', 'kirki' ),
    ]);

    // Section: What is WE Property Care?
    new \Kirki\Section( 'wecare_intro_section', [
        'title'    => esc_html__( 'Intro: What Is WE Property Care?', 'kirki' ),
        'panel'    => 'wecare_panel',
        'priority' => 10,
    ]);

    Kirki::add_field( 'your_theme_config_id', [
        'type'        => 'text',
        'settings'    => 'wecare_heading',
        'label'       => esc_html__( 'Heading', 'kirki' ),
        'section'     => 'wecare_intro_section',
        'default'     => 'What Is WE Property Care?',
        'transport'   => 'postMessage',
        'partial_refresh' => [
            'wecare_heading' => [
                'selector'        => '#wecare_heading',
                'render_callback' => function () {
                    return esc_html( get_theme_mod( 'wecare_heading' ) );
                },
            ],
        ],
    ]);

    Kirki::add_field( 'your_theme_config_id', [
        'type'        => 'textarea',
        'settings'    => 'wecare_paragraph_1',
        'label'       => esc_html__( 'First Paragraph', 'kirki' ),
        'section'     => 'wecare_intro_section',
        'default'     => 'An education platform empowering businesses to proactively spot, report, and manage maintenance issues early.',
        'transport'   => 'postMessage',
        'partial_refresh' => [
            'wecare_paragraph_1' => [
                'selector'        => '#wecare_paragraph_1',
                'render_callback' => function () {
                    return esc_html( get_theme_mod( 'wecare_paragraph_1' ) );
                },
            ],
        ],
    ]);

    Kirki::add_field( 'your_theme_config_id', [
        'type'        => 'textarea',
        'settings'    => 'wecare_paragraph_2',
        'label'       => esc_html__( 'Second Paragraph', 'kirki' ),
        'section'     => 'wecare_intro_section',
        'default'     => 'Empowering businesses to protect their properties through education, preventive maintenance programs, and ongoing expert support.',
        'transport'   => 'postMessage',
        'partial_refresh' => [
            'wecare_paragraph_2' => [
                'selector'        => '#wecare_paragraph_2',
                'render_callback' => function () {
                    return esc_html( get_theme_mod( 'wecare_paragraph_2' ) );
                },
            ],
        ],
    ]);


// Section: Service Packages
new \Kirki\Section( 'wecare_packages_section', [
    'title'    => esc_html__( 'Service Packages', 'kirki' ),
    'panel'    => 'wecare_panel',
    'priority' => 20,
]);

Kirki::add_field( 'your_theme_config_id', [
    'type'        => 'text',
    'settings'    => 'wecare_packages_heading',
    'label'       => esc_html__( 'Main Heading', 'kirki' ),
    'section'     => 'wecare_packages_section',
    'default'     => 'Service Packages',
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'wecare_packages_heading' => [
            'selector'        => '#wecare_packages_heading',
            'render_callback' => function () {
                return esc_html( get_theme_mod( 'wecare_packages_heading' ) );
            },
        ],
    ],
]);

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

foreach ( $package_items as $key => $defaults ) {
    Kirki::add_field( 'your_theme_config_id', [
        'type'        => 'text',
        'settings'    => "wecare_package_{$key}_heading",
        'label'       => esc_html__( ucfirst($key) . ' - Heading', 'kirki' ),
        'section'     => 'wecare_packages_section',
        'default'     => $defaults['heading'],
        'transport'   => 'postMessage',
        'partial_refresh' => [
            "wecare_package_{$key}_heading" => [
                'selector'        => "#wecare_package_{$key}_heading",
                'render_callback' => function() use ( $key ) {
                    return esc_html( get_theme_mod( "wecare_package_{$key}_heading" ) );
                },
            ],
        ],
    ]);

    Kirki::add_field( 'your_theme_config_id', [
        'type'        => 'textarea',
        'settings'    => "wecare_package_{$key}_tagline",
        'label'       => esc_html__( ucfirst($key) . ' - Tagline', 'kirki' ),
        'section'     => 'wecare_packages_section',
        'default'     => $defaults['tagline'],
        'transport'   => 'postMessage',
        'partial_refresh' => [
            "wecare_package_{$key}_tagline" => [
                'selector'        => "#wecare_package_{$key}_tagline",
                'render_callback' => function() use ( $key ) {
                    return esc_html( get_theme_mod( "wecare_package_{$key}_tagline" ) );
                },
            ],
        ],
    ]);

    Kirki::add_field( 'your_theme_config_id', [
        'type'        => 'textarea',
        'settings'    => "wecare_package_{$key}_desc",
        'label'       => esc_html__( ucfirst($key) . ' - Description', 'kirki' ),
        'section'     => 'wecare_packages_section',
        'default'     => $defaults['desc'],
        'transport'   => 'postMessage',
        'partial_refresh' => [
            "wecare_package_{$key}_desc" => [
                'selector'        => "#wecare_package_{$key}_desc",
                'render_callback' => function() use ( $key ) {
                    return esc_html( get_theme_mod( "wecare_package_{$key}_desc" ) );
                },
            ],
        ],
    ]);
}

// Section: Why Choose WE Property Care
new \Kirki\Section( 'wecare_why_section', [
    'title'       => esc_html__( 'Why Choose We Property Care', 'kirki' ),
    'panel'       => 'wecare_panel',
    'priority'    => 30,
]);

Kirki::add_field( 'your_theme_config_id', [
    'type'        => 'text',
    'settings'    => 'wecare_why_heading',
    'label'       => esc_html__( 'Main Heading', 'kirki' ),
    'section'     => 'wecare_why_section',
    'default'     => 'Why Choose We Property Care?',
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'wecare_why_heading' => [
            'selector'        => '#wecare_why_heading',
            'render_callback' => function() {
                return esc_html( get_theme_mod( 'wecare_why_heading' ) );
            },
        ],
    ],
]);

$why_items = [
    'proactive' => ['bi bi-gear-fill', 'Proactive Approach', 'Prevent costly repairs with early issue detection'],
    'empowerment' => ['bi bi-journal-check', 'Empowerment', 'Train your team to manage maintenance confidently.'],
    'scalable' => ['bi bi-layers-fill', 'Scalable Support', 'From workshops to subscriptions, we grow with your needs.'],
    'alignment' => ['bi bi-shield-lock-fill', 'Alignment with Core Values', 'Reliability, transparency, and high-touch service.'],
];

foreach ( $why_items as $key => $defaults ) {
    Kirki::add_field( 'your_theme_config_id', [
        'type'        => 'text',
        'settings'    => "wecare_why_{$key}_icon",
        'label'       => esc_html__( ucfirst($key) . ' - Icon Class (Bootstrap Icons)', 'kirki' ),
        'section'     => 'wecare_why_section',
        'default'     => $defaults[0],
    ]);

    Kirki::add_field( 'your_theme_config_id', [
        'type'        => 'text',
        'settings'    => "wecare_why_{$key}_title",
        'label'       => esc_html__( ucfirst($key) . ' - Title', 'kirki' ),
        'section'     => 'wecare_why_section',
        'default'     => $defaults[1],
        'transport'   => 'postMessage',
        'partial_refresh' => [
            "wecare_why_{$key}_title" => [
                'selector'        => "#wecare_why_{$key}_title",
                'render_callback' => function() use ( $key ) {
                    return esc_html( get_theme_mod( "wecare_why_{$key}_title" ) );
                },
            ],
        ],
    ]);

    Kirki::add_field( 'your_theme_config_id', [
        'type'        => 'textarea',
        'settings'    => "wecare_why_{$key}_desc",
        'label'       => esc_html__( ucfirst($key) . ' - Description', 'kirki' ),
        'section'     => 'wecare_why_section',
        'default'     => $defaults[2],
        'transport'   => 'postMessage',
        'partial_refresh' => [
            "wecare_why_{$key}_desc" => [
                'selector'        => "#wecare_why_{$key}_desc",
                'render_callback' => function() use ( $key ) {
                    return esc_html( get_theme_mod( "wecare_why_{$key}_desc" ) );
                },
            ],
        ],
    ]);
}
