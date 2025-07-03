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
        'default'  => 'At WE Management Group, we bring unparalleled expertise in commercial real estate, combining years of experience in property management, leasing, and retail development. Our deep understanding of the industry allows us to navigate the complexities of commercial properties with precision...',
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
    ]
);

new \Kirki\Field\Textarea(
    [
        'settings' => 'our_approach_paragraph',
        'label'    => esc_html__( 'Intro Paragraph', 'kirki' ),
        'section'  => 'about_our_approach',
        'default'  => 'We take a collaborative and personalized approach to property management...',
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
    ]
);

new \Kirki\Field\Text(
    [
        'settings' => 'founder_title',
        'label'    => esc_html__( 'Founder Title', 'kirki' ),
        'section'  => 'about_founder',
        'default'  => 'Founder & CEO',
    ]
);

new \Kirki\Field\Textarea(
    [
        'settings' => 'founder_bio',
        'label'    => esc_html__( 'Founder Bio', 'kirki' ),
        'section'  => 'about_founder',
        'default'  => 'With over 15 years of experience in real estate and property management, Jessica founded WEManagement with a vision to revolutionize the industry through technology and exceptional service.',
    ]
);

new \Kirki\Field\Textarea(
    [
        'settings' => 'founder_quote',
        'label'    => esc_html__( 'Founder Quote', 'kirki' ),
        'section'  => 'about_founder',
        'default'  => '"Our success comes from treating every property as if it were our own..."',
    ]
);

new \Kirki\Field\URL(
    [
        'settings' => 'founder_linkedin',
        'label'    => esc_html__( 'LinkedIn URL', 'kirki' ),
        'section'  => 'about_founder',
        'default'  => 'https://www.linkedin.com/in/jessicaalvarezcre/',
    ]
);
