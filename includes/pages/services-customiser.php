<?php
if ( ! class_exists( 'Kirki' ) ) {
    return;
}

// 1. Add the panel (skip this if you've already defined one)
new \Kirki\Panel(
    'services',
    [
        'priority'    => 10,
        'title'       => esc_html__( 'Theme Settings', 'kirki' ),
        'description' => esc_html__( 'Edit Service Section', 'kirki' ),
    ]
);

// 2. Add the Services Overview section
new \Kirki\Section(
    'services_overview_section',
    [
        'title'       => esc_html__( 'Services Overview Section', 'kirki' ),
        'panel'       => 'services',
        'priority'    => 20,
        'description' => esc_html__( 'Customize the heading and intro for the Services Overview section.', 'kirki' ),
    ]
);

// 3. Heading field
Kirki::add_field( 'your_theme_config_id', [
    'type'     => 'text',
    'settings' => 'services_overview_heading',
    'label'    => esc_html__( 'Section Heading', 'kirki' ),
    'section'  => 'services_overview_section',
    'default'  => 'Services we offer',
    'priority' => 10,
] );

// 4. Paragraph field
Kirki::add_field( 'your_theme_config_id', [
    'type'     => 'textarea',
    'settings' => 'services_overview_paragraph',
    'label'    => esc_html__( 'Intro Paragraph', 'kirki' ),
    'section'  => 'services_overview_section',
    'default'  => 'We offer a variety of real estate services tailored to your needs.',
    'priority' => 11,
] );
