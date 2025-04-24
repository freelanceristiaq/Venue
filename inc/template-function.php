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



function venue_footer_social(){ 
    $social_fb = get_theme_mod('social_fb',__('#','venue'));
    $social_x = get_theme_mod('social_x',__('#','venue'));
    $social_in = get_theme_mod('social_in',__('#','venue'));
    $social_ln = get_theme_mod('social_ln',__('#','venue'));
    $social_rs = get_theme_mod('social_rs',__('#','venue'));
    $social_dr = get_theme_mod('social_dr',__('#','venue'));

    
    ?>

    <?php if($social_fb): ?>
    <a href="<?php echo esc_url($social_fb); ?>"><i class="fa-brands fa-facebook"></i></a>
    <?php endif; ?>

    <?php if($social_x): ?>
    <a href="<?php echo esc_url($social_x); ?>"><i class="fa fa-twitter"></i></a>
    <?php endif; ?>

    <?php if($social_in): ?>
    <a href="<?php echo esc_url($social_in); ?>"><i class="fa-brands fa-instagram"></i></a>
    <?php endif; ?>

    <?php if($social_ln): ?>
    <a href="<?php echo esc_url($social_ln); ?>"><i class="fa fa-linkedin"></i></a>
    <?php endif; ?>

    <?php if($social_rs): ?>
    <a href="<?php echo esc_url($social_rs); ?>"><i class="fa fa-rss"></a>
    <?php endif; ?>

    <?php if($social_dr): ?>
    <a href="<?php echo esc_url($social_dr); ?>"><i class="fa fa-dribbble"></i></a>
    <?php endif; ?>
<?php
}

