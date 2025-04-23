<?php

if ( ! function_exists( 'venue_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     *
     * @since Twenty Fifteen 1.0
     */
    function venue_setup() {
    
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on venue, use a find and replace
         * to change 'venue' to the name of your theme in all the template files
         */
        load_theme_textdomain( 'venue', get_template_directory() . '/languages' );
    
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );
    
        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded  tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );
    
        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        add_theme_support( 'post-thumbnails' );

        // set_post_thumbnail_size( 825, 510, true );
    
        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus( array(
            'main-menu' => __( 'Main Menu','venue' ),
        ) );
    
        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ) );
    
        /*
         * Enable support for Post Formats.
         *
         * See: https://codex.wordpress.org/Post_Formats
         */
        add_theme_support( 'post-formats', array(
            'image', 'video', 'gallery', 'audio',
        ) );


        remove_theme_support( 'widgets-block-editor' );
    
    }
    endif; // venue_setup
    add_action( 'after_setup_theme', 'venue_setup' ); 


    /**
     * Add a sidebar.
     */
    function venue_widgets_init() {

        register_sidebar( array(
            'name'          => __( 'Blog Sidebar', 'venue' ),
            'id'            => 'blog-sidebar',
            'description'   => __( 'This widgets will display in blog sidebar', 'venue' ),
            'before_widget' => '<div id="%1$s" class="tp-sidebar-widget mb-45 %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="tp-sidebar-widget-title">',
            'after_title'   => '</h3>',
        ) );

        register_sidebar( array(
            'name'          => __( 'Footer Widget 01', 'venue' ),
            'id'            => 'footer-widget-1',
            'description'   => __( 'This widgets will display in footer widget 01', 'venue' ),
            'before_widget' => '<div id="%1$s" class="tp-footer-widget tp-footer-col-1 mb-50 %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="tp-footer-widget-title">',
            'after_title'   => '</h3>',
        ) );

        register_sidebar( array(
            'name'          => __( 'Footer Widget 02', 'venue' ),
            'id'            => 'footer-widget-2',
            'description'   => __( 'This widgets will display in footer widget 02', 'venue' ),
            'before_widget' => '<div id="%1$s" class="tp-footer-widget tp-footer-col-2 mb-50 %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="tp-footer-widget-title">',
            'after_title'   => '</h3>',
        ) );

        register_sidebar( array(
            'name'          => __( 'Footer Widget 03', 'venue' ),
            'id'            => 'footer-widget-3',
            'description'   => __( 'This widgets will display in footer widget 03', 'venue' ),
            'before_widget' => '<div id="%1$s" class="tp-footer-widget tp-footer-col-3 mb-50 %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="tp-footer-widget-title">',
            'after_title'   => '</h3>',
        ) );

        register_sidebar( array(
            'name'          => __( 'Footer Widget 04', 'venue' ),
            'id'            => 'footer-widget-4',
            'description'   => __( 'This widgets will display in footer widget 04', 'venue' ),
            'before_widget' => '<div id="%1$s" class="tp-footer-widget tp-footer-col-4 mb-50 %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="tp-footer-widget-title">',
            'after_title'   => '</h3>',
        ) );
    }
    add_action( 'widgets_init', 'venue_widgets_init' );



    // venue_theme_scripts 
    function venue_theme_scripts() {
        
        // CSS files
        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.2.3', 'all' );
        wp_enqueue_style( 'bootstrap-theme', get_template_directory_uri() . '/assets/css/bootstrap-theme.min.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'font-awesome-pro', get_template_directory_uri() . '/assets/css/fontAwesome.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'date-picker', get_template_directory_uri() . '/assets/css/datepicker.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'hero-slider', get_template_directory_uri() . '/assets/css/hero-slider.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl-carousel.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'templatemo-style', get_template_directory_uri() . '/assets/css/templatemo-style.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'venue-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'style', get_stylesheet_uri() );

        // JS
        wp_enqueue_script('modernizr', get_template_directory_uri()  . '/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js', [], null, false);
        wp_enqueue_script('bootstrap', get_template_directory_uri()  . '/assets/js/vendor/bootstrap.min.js', ['jquery'], null, true);
        wp_enqueue_script('datepicker', get_template_directory_uri() . '/assets/js/datepicker.js', ['jquery'], null, true);
        wp_enqueue_script('plugins', get_template_directory_uri()  . '/assets/js/plugins.js', ['jquery'], null, true);
        wp_enqueue_script('main', get_template_directory_uri()  . '/assets/js/main.js', ['jquery'], null, true);
    
    
        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }
    add_action( 'wp_enqueue_scripts', 'venue_theme_scripts' );


    if ( class_exists( 'Kirki' ) ) {
        require_once('inc/venue-kirki.php');
    }
    require_once('inc/template-function.php');
    require_once('inc/nav-walker.php');
    

