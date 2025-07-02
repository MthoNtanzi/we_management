<?php
if(!class_exists("kirki")){
    return;
}

// Declare Panel:
new \Kirki\Panel(
	'wmg',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Theme Settings', 'kirki' ),
		'description' => esc_html__( 'Edit Content On The Website', 'kirki' ),
	]
);

// Header Section:
new \Kirki\Section(
	'header',
	[
		'title'       => esc_html__( 'Header', 'kirki' ),
		'description' => esc_html__( 'Edit Content On The Header', 'kirki' ),
		'panel'       => 'wmg',
		'priority'    => 160,
	]
);

// Header Content
new \Kirki\Field\Textarea(
	[
		'settings'    => 'home_description',
		'label'       => esc_html__( 'Homepage Description', 'kirki' ),
		'section'     => 'header',
		'default'     => esc_html__( 'At WE Management Group, we bring unparalleled expertise in commercial real estate, combining years of experience in property management, leasing, and retail development to maximize your investment potential.', 'kirki' ),
		'transport'   => 'postMessage',
		'partial_refresh' => [
			'home_description' => [
				'selector'        => '#home-description',
				'render_callback' => function() {
					return get_theme_mod('home_description');
				}
			]
		]
	]
);

// Footer Section:
new \Kirki\Section(
    'footer',
    [
        'title'       => esc_html__( 'Footer', 'kirki' ),
        'description' => esc_html__( 'Edit Content In The Footer', 'kirki' ),
        'panel'       => 'wmg',
        'priority'    => 170,
    ]
);

// Footer Content
// Address
new \Kirki\Field\Text([
    'settings' => 'footer_address',
    'label'    => esc_html__('Address', 'kirki'),
    'section'  => 'footer',
    'default'  => '1031 Ives Dairy Rd',
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'footer_address' => [
            'selector'        => '.footer-address',
            'render_callback' => function() {
                return get_theme_mod('footer_address');
            }
        ]
    ]
]);

// Phone
new \Kirki\Field\Text([
    'settings' => 'footer_phone',
    'label'    => esc_html__('Phone Number', 'kirki'),
    'section'  => 'footer',
    'default'  => '786-906-2928',
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'footer_phone' => [
            'selector'        => '.footer-phone',
            'render_callback' => function() {
                return get_theme_mod('footer_phone');
            }
        ]
    ]
]);

// Email
new \Kirki\Field\Text([
    'settings' => 'footer_email',
    'label'    => esc_html__('Email Address', 'kirki'),
    'section'  => 'footer',
    'default'  => 'support@wemanagecre.com',
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'footer_email' => [
            'selector'        => '.footer-email',
            'render_callback' => function() {
                return get_theme_mod('footer_email');
            }
        ]
    ]
]);

// Facebook URL
new \Kirki\Field\URL([
    'settings' => 'footer_facebook',
    'label'    => esc_html__('Facebook URL', 'kirki'),
    'section'  => 'footer',
    'default'  => 'https://www.facebook.com/wemanagecre',
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'footer_facebook' => [
            'selector'        => '.footer-facebook',
            'render_callback' => function() {
                return get_theme_mod('footer_facebook');
            }
        ]
    ]
]);

// Instagram URL
new \Kirki\Field\URL([
    'settings' => 'footer_instagram',
    'label'    => esc_html__('Instagram URL', 'kirki'),
    'section'  => 'footer',
    'default'  => 'https://www.instagram.com/wemanagecre/',
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'footer_instagram' => [
            'selector'        => '.footer-instagram',
            'render_callback' => function() {
                return get_theme_mod('footer_instagram');
            }
        ]
    ]
]);

// LinkedIn URL
new \Kirki\Field\URL([
    'settings' => 'footer_linkedin',
    'label'    => esc_html__('LinkedIn URL', 'kirki'),
    'section'  => 'footer',
    'default'  => 'https://www.linkedin.com/company/wemanagementgroup/',
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'footer_linkedin' => [
            'selector'        => '.footer-linkedin',
            'render_callback' => function() {
                return get_theme_mod('footer_linkedin');
            }
        ]
    ]
]);

// Business Hours
new \Kirki\Field\Textarea([
    'settings' => 'footer_hours',
    'label'    => esc_html__('Business Hours', 'kirki'),
    'section'  => 'footer',
    'default'  => "Monday - Friday: 9:00 AM - 6:00 PM\nSaturday: 09:00 AM - 12:00 PM",
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'footer_hours' => [
            'selector'        => '.footer-hours',
            'render_callback' => function() {
                return nl2br(get_theme_mod('footer_hours'));
            }
        ]
    ]
]);

// Call to Action Section:
new \Kirki\Section(
    'call_to_action_section',
    [
        'title'       => esc_html__( 'Call to Action', 'kirki' ),
        'description' => esc_html__( 'Customize the Call to Action section', 'kirki' ),
        'panel'       => 'wmg',
        'priority'    => 170,
    ]
);

// CTA Image
new \Kirki\Field\Image(
    [
        'settings' => 'cta_image',
        'label'    => esc_html__( 'CTA Image', 'kirki' ),
        'section'  => 'call_to_action_section',
        'default'  => get_template_directory_uri() . '/assets/img/get_in_touch/reach_out_2.jpg',
        'transport'   => 'postMessage',
        'partial_refresh' => [
            'cta_image' => [
                'selector'        => '.cta-image',
                'render_callback' => function() {
                    return '<img src="'.esc_url(get_theme_mod('cta_image')).'" alt="CTA Image">';
                }
            ]
        ]
    ]
);

// CTA Heading
new \Kirki\Field\Textarea(
    [
        'settings' => 'cta_heading',
        'label'    => esc_html__( 'CTA Heading', 'kirki' ),
        'section'  => 'call_to_action_section',
        'default'  => esc_html__( 'Get in Touch with a Certified Property Expert', 'kirki' ),
        'transport'   => 'postMessage',
        'partial_refresh' => [
            'cta_heading' => [
                'selector'        => '.cta-heading',
                'render_callback' => function() {
                    return get_theme_mod('cta_heading');
                }
            ]
        ]
    ]
);

// CTA Text
new \Kirki\Field\Textarea(
    [
        'settings' => 'cta_text',
        'label'    => esc_html__( 'CTA Text', 'kirki' ),
        'section'  => 'call_to_action_section',
        'default'  => esc_html__( 'Have questions or need help finding the right property? Our experienced real estate professional is here to assist you with expert guidance, whether you\'re leasing, buying, or listing your property.', 'kirki' ),
        'transport'   => 'postMessage',
        'partial_refresh' => [
            'cta_text' => [
                'selector'        => '.cta-text',
                'render_callback' => function() {
                    return get_theme_mod('cta_text');
                }
            ]
        ]
    ]
);

// CTA Phone
new \Kirki\Field\Text(
    [
        'settings' => 'cta_phone',
        'label'    => esc_html__( 'CTA Phone Number', 'kirki' ),
        'section'  => 'call_to_action_section',
        'default'  => '786-906-2928',
        'transport'   => 'postMessage',
        'partial_refresh' => [
            'cta_phone' => [
                'selector'        => '.cta-phone',
                'render_callback' => function() {
                    return get_theme_mod('cta_phone');
                }
            ]
        ]
    ]
);

// CTA Call Button Text
new \Kirki\Field\Text(
    [
        'settings' => 'cta_call_button',
        'label'    => esc_html__( 'CTA Call Button Text', 'kirki' ),
        'section'  => 'call_to_action_section',
        'default'  => esc_html__( 'Make A Call', 'kirki' ),
        'transport'   => 'postMessage',
        'partial_refresh' => [
            'cta_call_button' => [
                'selector'        => '.cta-call-button',
                'render_callback' => function() {
                    return get_theme_mod('cta_call_button');
                }
            ]
        ]
    ]
);

// CTA Appointment Link
new \Kirki\Field\Text(
    [
        'settings' => 'cta_appointment_link',
        'label'    => esc_html__( 'CTA Appointment Link', 'kirki' ),
        'section'  => 'call_to_action_section',
        'default'  => './contact.html',
        'transport'   => 'postMessage',
        'partial_refresh' => [
            'cta_appointment_link' => [
                'selector'        => '.cta-appointment-link',
                'render_callback' => function() {
                    return get_theme_mod('cta_appointment_link');
                }
            ]
        ]
    ]
);

// CTA Appointment Button Text
new \Kirki\Field\Text(
    [
        'settings' => 'cta_appointment_button',
        'label'    => esc_html__( 'CTA Appointment Button Text', 'kirki' ),
        'section'  => 'call_to_action_section',
        'default'  => esc_html__( 'Get Appointment', 'kirki' ),
        'transport'   => 'postMessage',
        'partial_refresh' => [
            'cta_appointment_button' => [
                'selector'        => '.cta-appointment-button',
                'render_callback' => function() {
                    return get_theme_mod('cta_appointment_button');
                }
            ]
        ]
    ]
);

// FAQ Section:
new \Kirki\Section(
    'faq_section',
    [
        'title'       => esc_html__( 'FAQs', 'kirki' ),
        'description' => esc_html__( 'Manage Frequently Asked Questions', 'kirki' ),
        'panel'       => 'wmg',
        'priority'    => 180,
    ]
);

new \Kirki\Field\Repeater(
    [
        'settings' => 'faqs_repeater',
        'label'    => esc_html__( 'FAQs', 'kirki' ),
        'section'  => 'faq_section',
        'priority' => 10,
        'row_label' => [
            'type'  => 'field',
            'value' => esc_html__( 'FAQ Item', 'kirki' ),
            'field' => 'faq_question',
        ],
        'transport'   => 'postMessage',
        'partial_refresh' => [
            'faqs_repeater' => [
                'selector'        => '.faq-container',
                'render_callback' => function() {
                    $faqs = get_theme_mod('faqs_repeater', []);
                    ob_start();
                    foreach ($faqs as $faq) {
                        echo '<div class="faq-item">';
                        echo '<h3>'.esc_html($faq['faq_question']).'</h3>';
                        echo '<p>'.esc_html($faq['faq_answer']).'</p>';
                        echo '</div>';
                    }
                    return ob_get_clean();
                }
            ]
        ],
        'fields' => [
            'faq_question' => [
                'type'    => 'text',
                'label'   => esc_html__( 'Question', 'kirki' ),
                'default' => '',
            ],
            'faq_answer' => [
                'type'    => 'textarea',
                'label'   => esc_html__( 'Answer', 'kirki' ),
                'default' => '',
            ],
        ],
        'default' => [
            [
                'faq_question' => 'What areas do you serve?',
                'faq_answer'   => 'We proudly serve clients throughout the US, offering expert real estate services in both urban and suburban commercial markets.',
            ],
            [
                'faq_question' => 'Can you help with property valuations and market analysis?',
                'faq_answer'   => 'Yes, we offer comprehensive property valuation and market analysis services to help clients make informed decisions backed by data and local market trends.',
            ],
            [
                'faq_question' => 'How do you ensure client satisfaction?',
                'faq_answer'   => 'We prioritize transparency, responsive communication, and tailored solutions to ensure every client feels informed, confident, and supported throughout the process.',
            ],
            [
                'faq_question' => 'What types of commercial properties do you handle?',
                'faq_answer'   => 'We work with a range of commercial properties including office buildings, retail spaces, industrial facilities, and multifamily investments.',
            ],
            [
                'faq_question' => 'How are your agents qualified?',
                'faq_answer'   => 'We are licensed with deep industry experience and ongoing training in market trends, compliance, and negotiation strategies.',
            ],
            [
                'faq_question' => "What's the typical process for buying commercial real estate?",
                'faq_answer'   => 'The process involves identifying property goals, searching for listings, making offers, conducting due diligence, securing financing, and closing the deal—all with our guidance.',
            ],
        ],
    ]
);

// About Us Section
new \Kirki\Section(
    'about_us',
    [
        'title'       => esc_html__( 'About Us', 'kirki' ),
        'description' => esc_html__( 'Edit the "Who We Are" section content.', 'kirki' ),
        'panel'       => 'wmg',
        'priority'    => 170,
    ]
);

// Heading Field
new \Kirki\Field\Text(
    [
        'settings' => 'about_us_heading',
        'label'    => esc_html__( 'Section Heading', 'kirki' ),
        'section'  => 'about_us',
        'default'  => esc_html__( 'Who we are & why choose us', 'kirki' ),
        'transport'   => 'postMessage',
        'partial_refresh' => [
            'about_us_heading' => [
                'selector'        => '.about-us-heading',
                'render_callback' => function() {
                    return get_theme_mod('about_us_heading');
                }
            ]
        ]
    ]
);

// First Paragraph
new \Kirki\Field\Textarea(
    [
        'settings' => 'about_us_paragraph_1',
        'label'    => esc_html__( 'First Paragraph', 'kirki' ),
        'section'  => 'about_us',
        'default'  => esc_html__( 'WE Management Group is a trusted leader in commercial property management and brokerage, based in Miami, Florida. With our experience, we prioritize transparency, efficiency, and client success.', 'kirki' ),
        'transport'   => 'postMessage',
        'partial_refresh' => [
            'about_us_paragraph_1' => [
                'selector'        => '.about-us-paragraph-1',
                'render_callback' => function() {
                    return get_theme_mod('about_us_paragraph_1');
                }
            ]
        ]
    ]
);

// Second Paragraph
new \Kirki\Field\Textarea(
    [
        'settings' => 'about_us_paragraph_2',
        'label'    => esc_html__( 'Second Paragraph', 'kirki' ),
        'section'  => 'about_us',
        'default'  => esc_html__( "We pride ourselves on fostering strong tenant relationships, optimizing asset performance, and creating vibrant spaces that drive success for property owners and tenants alike. Whether you're looking to enhance your property's value, attract quality tenants, or streamline operations, we are your trusted partner in achieving your commercial real estate goals. Let us help you unlock the full potential of your assets and build thriving spaces for businesses and communities.", 'kirki' ),
        'transport'   => 'postMessage',
        'partial_refresh' => [
            'about_us_paragraph_2' => [
                'selector'        => '.about-us-paragraph-2',
                'render_callback' => function() {
                    return get_theme_mod('about_us_paragraph_2');
                }
            ]
        ]
    ]
);

// Extra Info Section
new \Kirki\Section(
    'extra_info',
    [
        'title'       => esc_html__( 'Extra Info Blocks', 'kirki' ),
        'description' => esc_html__( 'Edit the content for Local Expertise, Licensed Professionals, and Proactive Management.', 'kirki' ),
        'panel'       => 'wmg',
        'priority'    => 180,
    ]
);

// Block 1: Local Expertise
new \Kirki\Field\Text([
    'settings' => 'extra_info_heading_1',
    'label'    => esc_html__( 'Heading 1', 'kirki' ),
    'section'  => 'extra_info',
    'default'  => esc_html__( 'Local Expertise', 'kirki' ),
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'extra_info_heading_1' => [
            'selector'        => '.extra-info-heading-1',
            'render_callback' => function() {
                return get_theme_mod('extra_info_heading_1');
            }
        ]
    ]
]);

new \Kirki\Field\Textarea([
    'settings' => 'extra_info_paragraph_1',
    'label'    => esc_html__( 'Paragraph 1', 'kirki' ),
    'section'  => 'extra_info',
    'default'  => esc_html__( 'Our deep understanding of the industry allows us to navigate the complexities of commercial properties with precision, ensuring seamless operations and maximum value for your investments.', 'kirki' ),
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'extra_info_paragraph_1' => [
            'selector'        => '.extra-info-paragraph-1',
            'render_callback' => function() {
                return get_theme_mod('extra_info_paragraph_1');
            }
        ]
    ]
]);

// Block 2: Licensed Professionals
new \Kirki\Field\Text([
    'settings' => 'extra_info_heading_2',
    'label'    => esc_html__( 'Heading 2', 'kirki' ),
    'section'  => 'extra_info',
    'default'  => esc_html__( 'Licensed Professionals', 'kirki' ),
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'extra_info_heading_2' => [
            'selector'        => '.extra-info-heading-2',
            'render_callback' => function() {
                return get_theme_mod('extra_info_heading_2');
            }
        ]
    ]
]);

new \Kirki\Field\Textarea([
    'settings' => 'extra_info_paragraph_2',
    'label'    => esc_html__( 'Paragraph 2', 'kirki' ),
    'section'  => 'extra_info',
    'default'  => esc_html__( 'Our team holds FL Real Estate Broker certifications for trusted service. With deep knowledge of local regulations and a strong ethical commitment, we handle every transaction with professionalism and integrity.', 'kirki' ),
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'extra_info_paragraph_2' => [
            'selector'        => '.extra-info-paragraph-2',
            'render_callback' => function() {
                return get_theme_mod('extra_info_paragraph_2');
            }
        ]
    ]
]);

// Block 3: Proactive Management
new \Kirki\Field\Text([
    'settings' => 'extra_info_heading_3',
    'label'    => esc_html__( 'Heading 3', 'kirki' ),
    'section'  => 'extra_info',
    'default'  => esc_html__( 'Proactive Management', 'kirki' ),
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'extra_info_heading_3' => [
            'selector'        => '.extra-info-heading-3',
            'render_callback' => function() {
                return get_theme_mod('extra_info_heading_3');
            }
        ]
    ]
]);

new \Kirki\Field\Textarea([
    'settings' => 'extra_info_paragraph_3',
    'label'    => esc_html__( 'Paragraph 3', 'kirki' ),
    'section'  => 'extra_info',
    'default'  => esc_html__( 'We take a collaborative and personalized approach to property management. As a boutique firm, we prioritize understanding your unique objectives and tailoring solutions to meet your specific needs.', 'kirki' ),
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'extra_info_paragraph_3' => [
            'selector'        => '.extra-info-paragraph-3',
            'render_callback' => function() {
                return get_theme_mod('extra_info_paragraph_3');
            }
        ]
    ]
]);

// Testimonials Section
new \Kirki\Section(
    'testimonials',
    [
        'title'       => esc_html__( 'Testimonials', 'kirki' ),
        'description' => esc_html__( 'Manage testimonial content displayed on the homepage.', 'kirki' ),
        'panel'       => 'wmg',
        'priority'    => 190,
    ]
);

// Section Heading
new \Kirki\Field\Text([
    'settings' => 'testimonials_heading',
    'label'    => esc_html__( 'Section Heading', 'kirki' ),
    'section'  => 'testimonials',
    'default'  => esc_html__( 'What Our Clients Say', 'kirki' ),
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'testimonials_heading' => [
            'selector'        => '.testimonials-heading',
            'render_callback' => function() {
                return get_theme_mod('testimonials_heading');
            }
        ]
    ]
]);

// Section Description
new \Kirki\Field\Textarea([
    'settings' => 'testimonials_description',
    'label'    => esc_html__( 'Section Description', 'kirki' ),
    'section'  => 'testimonials',
    'default'  => esc_html__( "We take pride in the relationships we've built. Here's what some of our clients have to say about their experience working with us - real stories from satisfied tenants, landlords, and partners.", 'kirki' ),
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'testimonials_description' => [
            'selector'        => '.testimonials-description',
            'render_callback' => function() {
                return get_theme_mod('testimonials_description');
            }
        ]
    ]
]);

// Testimonials Repeater Field
new \Kirki\Field\Repeater([
    'settings' => 'testimonials_repeater',
    'label'    => esc_html__( 'Client Testimonials', 'kirki' ),
    'section'  => 'testimonials',
    'priority' => 20,
    'transport'   => 'postMessage',
    'partial_refresh' => [
        'testimonials_repeater' => [
            'selector'        => '.testimonials-container',
            'render_callback' => function() {
                $testimonials = get_theme_mod('testimonials_repeater', []);
                ob_start();
                foreach ($testimonials as $testimonial) {
                    echo '<div class="testimonial-item">';
                    if (!empty($testimonial['image'])) {
                        echo '<img src="'.esc_url($testimonial['image']).'" alt="'.esc_attr($testimonial['name']).'">';
                    }
                    echo '<blockquote>'.esc_html($testimonial['message']).'</blockquote>';
                    echo '<cite>';
                    echo '<strong>'.esc_html($testimonial['name']).'</strong>';
                    if (!empty($testimonial['role'])) {
                        echo ', '.esc_html($testimonial['role']);
                    }
                    echo '</cite>';
                    echo '</div>';
                }
                return ob_get_clean();
            }
        ]
    ],
    'fields'   => [
        'message' => [
            'type'    => 'textarea',
            'label'   => esc_html__( 'Message', 'kirki' ),
            'default' => '',
        ],
        'name' => [
            'type'    => 'text',
            'label'   => esc_html__( 'Client Name', 'kirki' ),
            'default' => '',
        ],
        'role' => [
            'type'    => 'text',
            'label'   => esc_html__( 'Role', 'kirki' ),
            'default' => 'Client',
        ],
        'image' => [
            'type'  => 'image',
            'label' => esc_html__( 'Client Image', 'kirki' ),
        ],
    ],
    'default' => [
        [
            'message' => 'Working with WE Management Group has been a game changer. Their attention to detail, communication, and commitment to excellence make them stand out in commercial real estate.',
            'name'    => 'Crystal Esparza',
            'role'    => 'Client',
            'image'   => get_template_directory_uri() . '/assets/img/testimonial.png',
        ],
        [
            'message' => 'Jessica is an outstanding property manager. Her attention to detail, clear communication, and ability to handle tenants and property needs with ease make her a true asset in this industry. I\'ve worked with many property managers, and Jessica stands out as one of the best.',
            'name'    => 'Fatherzup World',
            'role'    => 'Client',
            'image'   => get_template_directory_uri() . '/assets/img/testimonial.png',
        ],
        [
            'message' => 'I highly recommend WE Management Group. Jessica was very efficient and professional. She really looks out for the best interest of her clients.',
            'name'    => 'Quality Health',
            'role'    => 'Client',
            'image'   => get_template_directory_uri() . '/assets/img/testimonial.png',
        ],
    ]
]);