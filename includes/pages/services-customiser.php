<?php
if ( ! class_exists( 'Kirki' ) ) {
    return;
}

// =======================
// PANEL: Services Settings
// =======================
new \Kirki\Panel( 'services', [
    'priority'    => 10,
    'title'       => esc_html__( 'Services Settings', 'kirki' ),
    'description' => esc_html__( 'Edit all service sections', 'kirki' ),
] );

// ===========================
// SECTION: Services Overview
// ===========================
new \Kirki\Section( 'services_overview_section', [
    'title'       => esc_html__( 'Overview', 'kirki' ),
    'panel'       => 'services',
    'priority'    => 10,
]);

Kirki::add_field( 'your_theme_config_id', [
    'type'     => 'text',
    'settings' => 'services_overview_heading',
    'label'    => esc_html__( 'Section Heading', 'kirki' ),
    'section'  => 'services_overview_section',
    'default'  => 'Services we offer',
    'priority' => 10,
    'transport' => 'postMessage',
    'partial_refresh' => [
        'services_overview_heading' => [
            'selector'        => '#services-overview-heading',
            'render_callback' => function() {
                return esc_html( get_theme_mod( 'services_overview_heading' ) );
            },
        ],
    ],
]);

Kirki::add_field( 'your_theme_config_id', [
    'type'     => 'textarea',
    'settings' => 'services_overview_paragraph',
    'label'    => esc_html__( 'Intro Paragraph', 'kirki' ),
    'section'  => 'services_overview_section',
    'default'  => 'We offer a variety of real estate services tailored to your needs.',
    'priority' => 11,
    'transport' => 'postMessage',
    'partial_refresh' => [
        'services_overview_paragraph' => [
            'selector'        => '#services-overview-paragraph',
            'render_callback' => function() {
                return '<p id="services-overview-paragraph" class="text-center lead mb-5">' . esc_html( get_theme_mod( 'services_overview_paragraph' ) ) . '</p>';
            },
        ],
    ],
]);

// =================================
// SECTION: Property Management
// =================================
new \Kirki\Section( 'property_management_section', [
    'title'       => esc_html__( 'Property Management', 'kirki' ),
    'panel'       => 'services',
    'priority'    => 20,
]);

Kirki::add_field( 'your_theme_config_id', [
    'type'     => 'text',
    'settings' => 'property_management_title',
    'label'    => esc_html__( 'Title', 'kirki' ),
    'section'  => 'property_management_section',
    'default'  => 'Property Management Services',
    'priority' => 10,
    'transport' => 'postMessage',
    'partial_refresh' => [
        'property_management_title' => [
            'selector'        => '#service-property-title',
            'render_callback' => function() {
                return esc_html( get_theme_mod( 'property_management_title' ) );
            },
        ],
    ],
]);

Kirki::add_field( 'your_theme_config_id', [
    'type'     => 'textarea',
    'settings' => 'property_management_description',
    'label'    => esc_html__( 'Description', 'kirki' ),
    'section'  => 'property_management_section',
    'default'  => 'Commercial property management involves overseeing daily operations, tenant relations, and financial performance to enhance property value.',
    'priority' => 11,
    'transport' => 'postMessage',
    'partial_refresh' => [
        'property_management_description' => [
            'selector'        => '#service-property-description',
            'render_callback' => function() {
                return esc_html( get_theme_mod( 'property_management_description' ) );
            },
        ],
    ],
]);

Kirki::add_field( 'your_theme_config_id', [
    'type'     => 'image',
    'settings' => 'property_management_image',
    'label'    => esc_html__( 'Image', 'kirki' ),
    'section'  => 'property_management_section',
    'default'  => get_template_directory_uri() . '/assets/img/service_property_management.jpg',
    'priority' => 12,
    'transport' => 'postMessage',
    'partial_refresh' => [
        'property_management_image' => [
            'selector'        => '#service-property-image',
            'render_callback' => function() {
                return '<img id="service-property-image" src="' . esc_url( get_theme_mod( 'property_management_image' ) ) . '" alt="Property Management Image" />';
            },
        ],
    ],
]);

// ===========================
// SECTION: Brokerage
// ===========================
new \Kirki\Section( 'brokerage_section', [
    'title'       => esc_html__( 'Brokerage', 'kirki' ),
    'panel'       => 'services',
    'priority'    => 30,
]);

Kirki::add_field( 'your_theme_config_id', [
    'type'     => 'text',
    'settings' => 'brokerage_title',
    'label'    => esc_html__( 'Title', 'kirki' ),
    'section'  => 'brokerage_section',
    'default'  => 'Brokerage',
    'priority' => 10,
    'transport' => 'postMessage',
    'partial_refresh' => [
        'brokerage_title' => [
            'selector'        => '#service-brokerage-title',
            'render_callback' => function() {
                return esc_html( get_theme_mod( 'brokerage_title' ) );
            },
        ],
    ],
]);

Kirki::add_field( 'your_theme_config_id', [
    'type'     => 'textarea',
    'settings' => 'brokerage_description',
    'label'    => esc_html__( 'Description', 'kirki' ),
    'section'  => 'brokerage_section',
    'default'  => 'Brokerage services connect buyers, sellers, and tenants with the right commercial properties. Whether you\'re leasing, purchasing, or selling, our licensed brokers deliver results.',
    'priority' => 11,
    'transport' => 'postMessage',
    'partial_refresh' => [
        'brokerage_description' => [
            'selector'        => '#service-brokerage-description',
            'render_callback' => function() {
                return esc_html( get_theme_mod( 'brokerage_description' ) );
            },
        ],
    ],
]);

Kirki::add_field( 'your_theme_config_id', [
    'type'     => 'image',
    'settings' => 'brokerage_image',
    'label'    => esc_html__( 'Image', 'kirki' ),
    'section'  => 'brokerage_section',
    'default'  => get_template_directory_uri() . '/assets/img/brokerage/brokerage.jpg',
    'priority' => 12,
    'transport' => 'postMessage',
    'partial_refresh' => [
        'brokerage_image' => [
            'selector'        => '#service-brokerage-image',
            'render_callback' => function() {
                return '<img id="service-brokerage-image" src="' . esc_url( get_theme_mod( 'brokerage_image' ) ) . '" alt="Brokerage Image" />';
            },
        ],
    ],
]);

// ===================================
// SECTION: Facility Management
// ===================================
new \Kirki\Section( 'facility_management_section', [
    'title'       => esc_html__( 'Facility Management', 'kirki' ),
    'panel'       => 'services',
    'priority'    => 40,
]);

Kirki::add_field( 'your_theme_config_id', [
    'type'     => 'text',
    'settings' => 'facility_management_title',
    'label'    => esc_html__( 'Title', 'kirki' ),
    'section'  => 'facility_management_section',
    'default'  => 'Facility Management',
    'priority' => 10,
    'transport' => 'postMessage',
    'partial_refresh' => [
        'facility_management_title' => [
            'selector'        => '#service-facility-title',
            'render_callback' => function() {
                return esc_html( get_theme_mod( 'facility_management_title' ) );
            },
        ],
    ],
]);

Kirki::add_field( 'your_theme_config_id', [
    'type'     => 'textarea',
    'settings' => 'facility_management_description',
    'label'    => esc_html__( 'Description', 'kirki' ),
    'section'  => 'facility_management_section',
    'default'  => 'Customized support for specific property management challenges.',
    'priority' => 11,
    'transport' => 'postMessage',
    'partial_refresh' => [
        'facility_management_description' => [
            'selector'        => '#service-facility-description',
            'render_callback' => function() {
                return esc_html( get_theme_mod( 'facility_management_description' ) );
            },
        ],
    ],
]);

Kirki::add_field( 'your_theme_config_id', [
    'type'     => 'image',
    'settings' => 'facility_management_image',
    'label'    => esc_html__( 'Image', 'kirki' ),
    'section'  => 'facility_management_section',
    'default'  => get_template_directory_uri() . '/assets/img/wpc/gathering.jpg',
    'priority' => 12,
    'transport' => 'postMessage',
    'partial_refresh' => [
        'facility_management_image' => [
            'selector'        => '#service-facility-image',
            'render_callback' => function() {
                $src = esc_url( get_theme_mod( 'facility_management_image' ) );
                return '<img id="service-facility-image" src="' . $src . '" alt="Facility Management Image" />';
            },
        ],
    ],
]);

// ==============================
// SECTION: WE Property Care™
// ==============================
new \Kirki\Section( 'wpc_section', [
    'title'       => esc_html__( 'WE Property Care™', 'kirki' ),
    'panel'       => 'services',
    'priority'    => 50,
]);

Kirki::add_field( 'your_theme_config_id', [
    'type'     => 'text',
    'settings' => 'wpc_title',
    'label'    => esc_html__( 'Title', 'kirki' ),
    'section'  => 'wpc_section',
    'default'  => 'WE Property Care™',
    'priority' => 10,
    'transport' => 'postMessage',
    'partial_refresh' => [
        'wpc_title' => [
            'selector'        => '#service-wpc-title',
            'render_callback' => function() {
                return esc_html( get_theme_mod( 'wpc_title' ) );
            },
        ],
    ],
]);

Kirki::add_field( 'your_theme_config_id', [
    'type'     => 'textarea',
    'settings' => 'wpc_description',
    'label'    => esc_html__( 'Description', 'kirki' ),
    'section'  => 'wpc_section',
    'default'  => 'Empowering businesses to protect their properties through education, preventive maintenance programs, and ongoing expert support.',
    'priority' => 11,
    'transport' => 'postMessage',
    'partial_refresh' => [
        'wpc_description' => [
            'selector'        => '#service-wpc-description',
            'render_callback' => function() {
                return esc_html( get_theme_mod( 'wpc_description' ) );
            },
        ],
    ],
]);

Kirki::add_field( 'your_theme_config_id', [
    'type'     => 'image',
    'settings' => 'wpc_image',
    'label'    => esc_html__( 'Image', 'kirki' ),
    'section'  => 'wpc_section',
    'default'  => get_template_directory_uri() . '/assets/img/wpc/gathering_2.jpg',
    'priority' => 12,
    'transport' => 'postMessage',
    'partial_refresh' => [
        'wpc_image' => [
            'selector'        => '#service-wpc-image',
            'render_callback' => function() {
                $src = esc_url( get_theme_mod( 'wpc_image' ) );
                return '<img id="service-wpc-image" src="' . $src . '" alt="WE Property Care Image" />';
            },
        ],
    ],
]);
