<?php
if ( ! class_exists( 'Kirki' ) ) {
    return;
}

// PANEL: Contact Page Settings
new \Kirki\Panel( 'contact_panel', [
    'priority'    => 10,
    'title'       => esc_html__( 'Contact Page Settings', 'kirki' ),
    'description' => esc_html__( 'Customize the Contact Page content and embed settings.', 'kirki' ),
]);

// SECTION: Main Contact Section
new \Kirki\Section( 'contact_main_section', [
    'title'    => esc_html__( 'Main Contact Section', 'kirki' ),
    'panel'    => 'contact_panel',
    'priority' => 10,
]);

// Heading
Kirki::add_field( 'your_theme_config_id', [
    'type'        => 'text',
    'settings'    => 'contact_heading',
    'label'       => esc_html__( 'Main Heading', 'kirki' ),
    'section'     => 'contact_main_section',
    'default'     => 'Leave us a message',
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'contact_heading' => [
            'selector'        => '#contact-heading',
            'render_callback' => function() {
                return esc_html( get_theme_mod( 'contact_heading' ) );
            },
        ],
    ],
]);

// Paragraph
Kirki::add_field( 'your_theme_config_id', [
    'type'        => 'textarea',
    'settings'    => 'contact_paragraph',
    'label'       => esc_html__( 'Paragraph Text', 'kirki' ),
    'section'     => 'contact_main_section',
    'default'     => '',
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'contact_paragraph' => [
            'selector'        => '#contact-paragraph',
            'render_callback' => function() {
                return '<p id="contact-paragraph">' . esc_html( get_theme_mod( 'contact_paragraph' ) ) . '</p>';
            },
        ],
    ],
]);

// Google Map Embed URL
Kirki::add_field( 'your_theme_config_id', [
    'type'        => 'text',
    'settings'    => 'contact_map_embed_url',
    'label'       => esc_html__( 'Google Map Embed URL', 'kirki' ),
    'section'     => 'contact_main_section',
    'default'     => 'https://www.google.com/maps/embed?...',
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'contact_map_embed_url' => [
            'selector'        => '#contact-map',
            'render_callback' => function() {
                $src = esc_url( get_theme_mod( 'contact_map_embed_url' ) );
                return '<iframe id="contact-map" src="' . $src . '" style="border:0;" class="contact_map" allowfullscreen="" loading="lazy"></iframe>';
            },
        ],
    ],
]);

// Contact Form URL
Kirki::add_field( 'your_theme_config_id', [
    'type'        => 'text',
    'settings'    => 'contact_form_url',
    'label'       => esc_html__( 'Form Iframe URL', 'kirki' ),
    'section'     => 'contact_main_section',
    'default'     => 'https://hello.dubsado.com/public/form/view/68371adc31bac3003a4074f9',
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'contact_form_url' => [
            'selector'        => '#contact-form',
            'render_callback' => function() {
                $src = esc_url( get_theme_mod( 'contact_form_url' ) );
                return '<iframe id="contact-form" src="' . $src . '" frameborder="0" style="width:1px; min-width:100%;"></iframe>';
            },
        ],
    ],
]);


// SECTION: How to Find Us
new \Kirki\Section( 'contact_find_us_section', [
    'title'       => esc_html__( 'Section: How to Find Us', 'kirki' ),
    'panel'       => 'contact_panel', // Make sure this panel exists and is included
    'priority'    => 20,
]);

// Heading
Kirki::add_field( 'your_theme_config_id', [
    'type'        => 'text',
    'settings'    => 'contact_find_us_heading',
    'label'       => esc_html__( 'Heading', 'kirki' ),
    'section'     => 'contact_find_us_section',
    'default'     => 'How to Find Us',
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'contact_find_us_heading' => [
            'selector'        => '#contact-find-us-heading',
            'render_callback' => function() {
                return esc_html( get_theme_mod( 'contact_find_us_heading' ) );
            },
        ],
    ],
]);

// Paragraph
Kirki::add_field( 'your_theme_config_id', [
    'type'        => 'textarea',
    'settings'    => 'contact_find_us_paragraph',
    'label'       => esc_html__( 'Paragraph', 'kirki' ),
    'section'     => 'contact_find_us_section',
    'default'     => 'Visit us at 1031 Ives Dairy Rd, Miami, FL 33179. Use the map below to get directions. Feel free to contact us for help or more information.',
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'contact_find_us_paragraph' => [
            'selector'        => '#contact-find-us-paragraph',
            'render_callback' => function() {
                return '<p id="contact-find-us-paragraph">' . esc_html( get_theme_mod( 'contact_find_us_paragraph' ) ) . '</p>';
            },
        ],
    ],
]);

// Map Embed
Kirki::add_field( 'your_theme_config_id', [
    'type'        => 'textarea',
    'settings'    => 'contact_find_us_map',
    'label'       => esc_html__( 'Map Embed Code (iframe)', 'kirki' ),
    'section'     => 'contact_find_us_section',
    'default'     => '<iframe src="https://www.google.com/maps/embed?pb=..." width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'contact_find_us_map' => [
            'selector'        => '#contact-find-us-map',
            'render_callback' => function() {
                return get_theme_mod( 'contact_find_us_map' );
            },
        ],
    ],
]);
