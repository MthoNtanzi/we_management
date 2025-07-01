<?php
if(!class_exists("kirki")){
    return;
}

// Declare Panel
new \Kirki\Panel(
	'wmg',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Theme Settings', 'kirki' ),
		'description' => esc_html__( 'Edit Content On The Website', 'kirki' ),
	]
);

// Header
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
