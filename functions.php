<?php

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
add_action( 'after_setup_theme', function () {

    /**
     * Let WordPress manage the document title.
     * This theme does not use a hard-coded <title> tag in the document head,
     * WordPress will provide it for us.
     */
    add_theme_support( 'title-tag' );

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    $logo_width  = 300;
    $logo_height = 100;

    add_theme_support(
        'custom-logo',
        array(
            'height'               => $logo_height,
            'width'                => $logo_width,
            'flex-width'           => true,
            'flex-height'          => true,
            'unlink-homepage-logo' => true,
        )
    );

    /*
    * Enable support for Post Thumbnails on posts and pages.
    *
    * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
    */
    add_theme_support( 'post-thumbnails' );

    /**
     * Register theme menus
     */
    register_nav_menus(
        array(
            'primary' => esc_html__( 'Primary Menu' ),
            'footer'  => __( 'Footer Menu' ),
        )
    );

} );

/**
 * Register widget area.
 */
add_action( 'widgets_init', function() {

    register_sidebar(
		array(
			'name'          => esc_html__( 'Navbar Social Links' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here to appear in the navbar.' ),
			'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
			'after_widget'  => '</ul>',
			'before_title'  => '',
			'after_title'   => '',
		)
	);

    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Area' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets to appear in footer.' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);

} );

/**
 * Enqueue theme scripts and styles
 */
add_action( 'wp_enqueue_scripts', function () {

    /**
     * Enqueue bootstrap css
     */
    wp_enqueue_style( 'bootstrap-style', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1' );

    /**
     * Enqueue fontawesome style
     */
    wp_enqueue_style( 'fonstawesome-style', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '5.13.0' );

    /**
     * Enqueue custom style
     */
    wp_enqueue_style( 'my-theme-style', get_template_directory_uri() . '/style.css', array( 'bootstrap-style' ), wp_get_theme()->get( 'Version' ) );

    /**
     * Enqueue mod style
     */
    wp_enqueue_style( 'my-theme-style-mod', get_template_directory_uri() . '/assets/css/style-mod.css', array( 'my-theme-style' ), wp_get_theme()->get( 'Version' ) );

    /**
     * Enqueue jQuery script
     */
    wp_enqueue_script( 'jquery-script', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true );
    
    /**
     * Enqueue boostrap script
     */
    wp_enqueue_script( 'bootstrap-script', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true );

    /**
     * Enqueue popper script
     */
    wp_enqueue_script( 'popper-script', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true );

    /**
     * Enqueue custom script
     */
    wp_enqueue_script( 'my-theme-script', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery-script' ), wp_get_theme()->get( 'Version' ), true );

} );
