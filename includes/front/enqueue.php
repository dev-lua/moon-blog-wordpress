<?php

function moon_enqueue() {
    $uri = get_theme_file_uri();
    $ver = MOON_DEV_MODE ? time() : false;
    
    wp_register_style( 
        'moon_google_fonts', 
        'https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:ital,wght@0,200;0,300;0,500;0,600;0,700;1,300&display=swap',
        [],
        time()
    );
    wp_register_style( 'moon_bootstrap', $uri . '/assets/css/bootstrap.css', [], $ver );
    wp_register_style( 'moon_style', $uri . '/assets/css/style.css', [], $ver );
    wp_register_style( 'moon_dark', $uri . '/assets/css/dark.css', [], $ver );
    wp_register_style( 'moon_font_icons', $uri . '/assets/css/font-icons.css', [], $ver );
    wp_register_style( 'moon_animate', $uri . '/assets/css/animate.css', [], $ver );
    wp_register_style( 'moon_magnific', $uri . '/assets/css/magnific.css', [], $ver );
    wp_register_style( 'moon_responsive', $uri . '/assets/css/responsive.css', [], $ver );
    wp_register_style( 'moon_custom', $uri . '/assets/css/custom.css', [], $ver );

    wp_enqueue_style( 'moon_google_fonts' );
    wp_enqueue_style( 'moon_bootstrap' );
    wp_enqueue_style( 'moon_style' );
    wp_enqueue_style( 'moon_style' );
    wp_enqueue_style( 'moon_dark' );
    wp_enqueue_style( 'moon_font_icons' );
    wp_enqueue_style( 'moon_animate' );
    wp_enqueue_style( 'moon_magnific' );
    wp_enqueue_style( 'moon_responsive' );
    wp_enqueue_style( 'moon_custom' );

    wp_register_script( 'moon_plugins', $uri . '/assets/js/bootstrap.js', [], $ver, true );

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'moon_plugins' );
}