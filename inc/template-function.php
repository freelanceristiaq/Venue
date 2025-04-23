<?php

// menu 
function venue_main_menu(){
    wp_nav_menu(array(
        'theme_location' => 'main-menu',
        'container'     => '',
        'menu_class'    => '',
        'fallback_cb'   => 'venue_Walker_Nav_Menu::fallback',
        'walker'        => new venue_Walker_Nav_Menu,
    ));
}


function venue_header_logo(){ 
    $venue_logo_header = get_theme_mod('venue_logo_header', get_template_directory_uri().'/assets/img/logo.png');
    ?>

    <a href="<?php home_url(); ?>">
        <img data-width="100%" src="<?php echo esc_url($venue_logo_header); ?>" alt="venu logo">
    </a>
    
    <?php 
}


function venue_header_social(){ 
    $social_fb = get_theme_mod('social_fb',__('#','venue'));
    $social_x = get_theme_mod('social_x',__('#','venue'));
    $social_in = get_theme_mod('social_in',__('#','venue'));
    $social_pin = get_theme_mod('social_pin',__('#','venue'));
    
    ?>

    <?php if($social_fb): ?>
    <a href="<?php echo esc_url($social_fb); ?>"><i class="fa-brands fa-facebook"></i></a>
    <?php endif; ?>

    <?php if($social_x): ?>
    <a href="<?php echo esc_url($social_x); ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"></path></svg></a>
    <?php endif; ?>

    <?php if($social_in): ?>
    <a href="<?php echo esc_url($social_in); ?>"><i class="fa-brands fa-instagram"></i></a>
    <?php endif; ?>

    <?php if($social_pin): ?>
    <a href="<?php echo esc_url($social_pin); ?>"><i class="fa-brands fa-pinterest"></i></a>
    <?php endif; ?>
<?php
}

