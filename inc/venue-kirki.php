<?php

// Create main panel
new \Kirki\Panel(
    'venue_panel',
    [
        'priority'    => 10,
        'title'       => esc_html__( 'venue Options', 'kirki' ),
        'description' => esc_html__( 'venue All options here', 'kirki' ),
    ]
);

// Header section
function header_section() {
    new \Kirki\Section(
        'venue_header',
        [
            'title'       => esc_html__( 'Header Option', 'kirki' ),
            'description' => esc_html__( 'Header information here you can find.', 'kirki' ),
            'panel'       => 'venue_panel',
            'priority'    => 160,
        ]
    );
}
add_action( 'init', 'header_section' );

// Header logo section
function header_logo_section() {
    new \Kirki\Section(
        'venue_header_logo',
        [
            'title'       => esc_html__( 'Header Logo', 'kirki' ),
            'description' => esc_html__( 'Header logo information here you can find.', 'kirki' ),
            'panel'       => 'venue_panel',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'venue_logo_header',
            'label'       => esc_html__( 'Logo header', 'kirki' ),
            'description' => esc_html__( 'Please upload your black logo here.', 'kirki' ),
            'section'     => 'venue_header_logo',
            'default'     => get_template_directory_uri() . '/assets/img/logo.png',
        ]
    );
}
add_action( 'init', 'header_logo_section' );
