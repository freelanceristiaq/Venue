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
            'description' => esc_html__( 'Please upload your header logo here.', 'kirki' ),
            'section'     => 'venue_header_logo',
            'default'     => get_template_directory_uri() . '/assets/img/logo.png',
        ]
    );
}
add_action( 'init', 'header_logo_section' );


// Footer Logo section
function footer_logo_section() {
    new \Kirki\Section(
        'venue_footer_logo',
        [
            'title'       => esc_html__( 'Footer Logo', 'kirki' ),
            'description' => esc_html__( 'You can find the footer logo settings here.', 'kirki' ),
            'panel'       => 'venue_panel',
            'priority'    => 160,
        ]
    );
}
add_action( 'init', 'footer_logo_section' );



// footer  social section 
function footer_social_section(){
    new \Kirki\Section(
        'venue_footer_social',
        [
            'title'       => esc_html__( 'Footer Social', 'venue' ),
            'description' => esc_html__( 'Footer social information here you can find.', 'venue' ),
            'panel'       => 'venue_panel',
            'priority'    => 160,
        ]
    );
    
    new \Kirki\Field\Text(
        [
            'settings' => 'social_fb',
            'label'    => esc_html__( 'Facebook URL', 'venue' ),
            'section'  => 'venue_footer_social',
            'default'  => esc_html__( '#', 'venue' ),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'social_x',
            'label'    => esc_html__( 'Twitter URL', 'venue' ),
            'section'  => 'venue_footer_social',
            'default'  => esc_html__( '#', 'venue' ),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'social_in',
            'label'    => esc_html__( 'Instagram URL', 'venue' ),
            'section'  => 'venue_footer_social',
            'default'  => esc_html__( '#', 'venue' ),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'social_ln',
            'label'    => esc_html__( 'Linkedin', 'venue' ),
            'section'  => 'venue_footer_social',
            'default'  => esc_html__( '#', 'venue' ),
            'priority' => 10,
        ]
    );    
    new \Kirki\Field\Text(
        [
            'settings' => 'social_rs',
            'label'    => esc_html__( 'Rss', 'venue' ),
            'section'  => 'venue_footer_social',
            'default'  => esc_html__( '#', 'venue' ),
            'priority' => 10,
        ]
    );    

    new \Kirki\Field\Text(
        [
            'settings' => 'social_dr',
            'label'    => esc_html__( 'Dribale', 'venue' ),
            'section'  => 'venue_footer_social',
            'default'  => esc_html__( '#', 'venue' ),
            'priority' => 10,
        ]
    );   
}
footer_social_section();