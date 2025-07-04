<?php
if ( ! class_exists( 'Kirki' ) ) {
    return;
}

// Declare the Panel
new \Kirki\Panel(
    'about_page',
    [
        'priority'    => 10,
        'title'       => esc_html__( 'About Page', 'kirki' ),
        'description' => esc_html__( 'Edit Content On The About Page', 'kirki' ),
    ]
);

// =======================
// OUR STORY SECTION
// =======================
new \Kirki\Section(
    'about_our_story',
    [
        'title'       => esc_html__( 'Our Story', 'kirki' ),
        'panel'       => 'about_page',
        'priority'    => 10,
        'active_callback' => function () {
            return is_page_template( 'template-about-us.php' );
        },
    ]
);

// Heading Field
new \Kirki\Field\Text(
    [
        'settings' => 'our_story_heading',
        'label'    => esc_html__( 'Heading', 'kirki' ),
        'section'  => 'about_our_story',
        'default'  => 'Your Trusted Partner in Commercial Real Estate',
        'transport' => 'postMessage',
        'partial_refresh' => [
            'our_story_heading' => [
                'selector' => '#our-story-heading',
                'render_callback' => function() {
                    return get_theme_mod('our_story_heading');
                }
            ]
        ]
    ]
);

// Description Paragraph
new \Kirki\Field\Textarea(
    [
        'settings' => 'our_story_paragraph',
        'label'    => esc_html__( 'Paragraph', 'kirki' ),
        'section'  => 'about_our_story',
        'default'  => 'At WE Management Group, we bring unparalleled expertise...',
        'transport' => 'postMessage',
        'partial_refresh' => [
            'our_story_paragraph' => [
                'selector' => '#our-story-paragraph',
                'render_callback' => function() {
                    return get_theme_mod('our_story_paragraph');
                }
            ]
        ]
    ]
);

// =======================
// OUR APPROACH SECTION
// =======================
new \Kirki\Section(
    'about_our_approach',
    [
        'title'       => esc_html__( 'Our Approach', 'kirki' ),
        'panel'       => 'about_page',
        'priority'    => 20,
        'active_callback' => function () {
            return is_page_template( 'template-about-us.php' );
        },
    ]
);

new \Kirki\Field\Text(
    [
        'settings' => 'our_approach_heading',
        'label'    => esc_html__( 'Section Title', 'kirki' ),
        'section'  => 'about_our_approach',
        'default'  => 'Our Approach',
        'transport' => 'postMessage',
        'partial_refresh' => [
            'our_approach_heading' => [
                'selector' => '#our-approach-heading',
                'render_callback' => function() {
                    return get_theme_mod('our_approach_heading');
                }
            ]
        ]
    ]
);

new \Kirki\Field\Textarea(
    [
        'settings' => 'our_approach_paragraph',
        'label'    => esc_html__( 'Intro Paragraph', 'kirki' ),
        'section'  => 'about_our_approach',
        'default'  => 'We take a collaborative and personalized approach to property management. As a boutique firm, we prioritize understanding your unique objectives and tailoring solutions to meet your specific needs. Our focus is on delivering efficient, results-driven strategies designed to maximize the value of your assets. With a clear sense of purpose and partnership, we work closely with you to achieve your property goals and drive long-term success.',
        'transport' => 'postMessage',
        'partial_refresh' => [
            'our_approach_paragraph' => [
                'selector' => '#our-approach-paragraph',
                'render_callback' => function() {
                    return get_theme_mod('our_approach_paragraph');
                }
            ]
        ]
    ]
);

// =======================
// FOUNDER SECTION
// =======================
new \Kirki\Section(
    'about_founder',
    [
        'title'       => esc_html__( 'Founder Section', 'kirki' ),
        'panel'       => 'about_page',
        'priority'    => 30,
        'active_callback' => function () {
            return is_page_template( 'template-about-us.php' );
        },
    ]
);

new \Kirki\Field\Text(
    [
        'settings' => 'founder_name',
        'label'    => esc_html__( 'Founder Name', 'kirki' ),
        'section'  => 'about_founder',
        'default'  => 'Jessica Alavarez',
        'transport' => 'postMessage',
        'partial_refresh' => [
            'founder_name' => [
                'selector' => '#founder-name',
                'render_callback' => function() {
                    return get_theme_mod('founder_name');
                }
            ]
        ]
    ]
);

new \Kirki\Field\Text(
    [
        'settings' => 'founder_title',
        'label'    => esc_html__( 'Founder Title', 'kirki' ),
        'section'  => 'about_founder',
        'default'  => 'Founder & CEO',
        'transport' => 'postMessage',
        'partial_refresh' => [
            'founder_title' => [
                'selector' => '#founder-title',
                'render_callback' => function() {
                    return get_theme_mod('founder_title');
                }
            ]
        ]
    ]
);

new \Kirki\Field\Textarea(
    [
        'settings' => 'founder_bio',
        'label'    => esc_html__( 'Founder Bio', 'kirki' ),
        'section'  => 'about_founder',
        'default'  => 'With over 15 years of experience in real estate and property management, Jessica founded WEManagement with a vision to revolutionize the industry through technology and exceptional service.',
        'transport' => 'postMessage',
        'partial_refresh' => [
            'founder_bio' => [
                'selector' => '#founder-bio',
                'render_callback' => function() {
                    return get_theme_mod('founder_bio');
                }
            ]
        ]
    ]
);

new \Kirki\Field\Textarea(
    [
        'settings' => 'founder_quote',
        'label'    => esc_html__( 'Founder Quote', 'kirki' ),
        'section'  => 'about_founder',
        'default'  => '"Our success comes from treating every property as if it were our own and every tenant as a valued member of our community. This philosophy has guided us from day one."',
        'transport' => 'postMessage',
        'partial_refresh' => [
            'founder_quote' => [
                'selector' => '#founder-quote',
                'render_callback' => function() {
                    return get_theme_mod('founder_quote');
                }
            ]
        ]
    ]
);

new \Kirki\Field\URL(
    [
        'settings' => 'founder_linkedin',
        'label'    => esc_html__( 'LinkedIn URL', 'kirki' ),
        'section'  => 'about_founder',
        'default'  => 'https://www.linkedin.com/in/jessicaalvarezcre/',
        'transport' => 'postMessage',
        'partial_refresh' => [
            'founder_linkedin' => [
                'selector' => '#founder-linkedin',
                'render_callback' => function() {
                    return get_theme_mod('founder_linkedin');
                }
            ]
        ]
    ]
);