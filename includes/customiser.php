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
		'default'     => esc_html__( 'At WE Management Group, we bring unparalleled expertise in commercial real estate, combining years of
                experience in property management, leasing, and retail development to maximize your investment
                potential.', 'kirki' ),
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
]);

// Phone
new \Kirki\Field\Text([
    'settings' => 'footer_phone',
    'label'    => esc_html__('Phone Number', 'kirki'),
    'section'  => 'footer',
    'default'  => '786-906-2928',
]);

// Email
new \Kirki\Field\Text([
    'settings' => 'footer_email',
    'label'    => esc_html__('Email Address', 'kirki'),
    'section'  => 'footer',
    'default'  => 'support@wemanagecre.com',
]);

// Facebook URL
new \Kirki\Field\URL([
    'settings' => 'footer_facebook',
    'label'    => esc_html__('Facebook URL', 'kirki'),
    'section'  => 'footer',
    'default'  => 'https://www.facebook.com/wemanagecre',
]);

// YouTube URL
new \Kirki\Field\URL([
    'settings' => 'footer_instagram',
    'label'    => esc_html__('Instagram URL', 'kirki'),
    'section'  => 'footer',
    'default'  => 'https://www.instagram.com/wemanagecre/',
]);

// LinkedIn URL
new \Kirki\Field\URL([
    'settings' => 'footer_linkedin',
    'label'    => esc_html__('LinkedIn URL', 'kirki'),
    'section'  => 'footer',
    'default'  => 'https://www.linkedin.com/company/wemanagementgroup/',
]);

// Business Hours
new \Kirki\Field\Textarea([
    'settings' => 'footer_hours',
    'label'    => esc_html__('Business Hours', 'kirki'),
    'section'  => 'footer',
    'default'  => "Monday - Friday: 9:00 AM - 6:00 PM\nSaturday: 09:00 AM - 12:00 PM",
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
    ]
);

// CTA Heading
new \Kirki\Field\Textarea(
    [
        'settings' => 'cta_heading',
        'label'    => esc_html__( 'CTA Heading', 'kirki' ),
        'section'  => 'call_to_action_section',
        'default'  => esc_html__( 'Get in Touch with a Certified Property Expert', 'kirki' ),
    ]
);

// CTA Text
new \Kirki\Field\Textarea(
    [
        'settings' => 'cta_text',
        'label'    => esc_html__( 'CTA Text', 'kirki' ),
        'section'  => 'call_to_action_section',
        'default'  => esc_html__( 'Have questions or need help finding the right property? Our experienced real estate professional is here to assist you with expert guidance, whether you\'re leasing, buying, or listing your property.', 'kirki' ),
    ]
);

// CTA Phone
new \Kirki\Field\Text(
    [
        'settings' => 'cta_phone',
        'label'    => esc_html__( 'CTA Phone Number', 'kirki' ),
        'section'  => 'call_to_action_section',
        'default'  => '786-906-2928',
    ]
);

// CTA Call Button Text
new \Kirki\Field\Text(
    [
        'settings' => 'cta_call_button',
        'label'    => esc_html__( 'CTA Call Button Text', 'kirki' ),
        'section'  => 'call_to_action_section',
        'default'  => esc_html__( 'Make A Call', 'kirki' ),
    ]
);

// CTA Appointment Link
new \Kirki\Field\Text(
    [
        'settings' => 'cta_appointment_link',
        'label'    => esc_html__( 'CTA Appointment Link', 'kirki' ),
        'section'  => 'call_to_action_section',
        'default'  => './contact.html',
    ]
);

// CTA Appointment Button Text
new \Kirki\Field\Text(
    [
        'settings' => 'cta_appointment_button',
        'label'    => esc_html__( 'CTA Appointment Button Text', 'kirki' ),
        'section'  => 'call_to_action_section',
        'default'  => esc_html__( 'Get Appointment', 'kirki' ),
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
