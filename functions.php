<?php
/**
 * Generate child theme functions and definitions
 *
 * @package Generate
 */

function trick_add_google_fonts() {

wp_enqueue_style( 'trick-google-fonts', 'http://fonts.googleapis.com/css?family=Palanquin+Dark:400,600|Lato:400|Palanquin:300,400', false );
}

add_action( 'wp_enqueue_scripts', 'trick_add_google_fonts' );

// add another google font to GeneratePress menu
add_filter( 'generate_typography_default_fonts','trick_add_system_fonts' );
function trick_add_system_fonts( $fonts ) {
    $fonts[] = 'Palanquin Dark';
    return $fonts;
}

// font-family: 'Lato', sans-serif;
// // regular 400
// font-family: 'Palanquin Dark', sans-serif;
// // regular 400, semi-bold 600

// customize the customizer palettes
add_filter( 'generate_default_color_palettes', 'trick_custom_color_palettes' );
function trick_custom_color_palettes( $palettes ) {
    $palettes = array(
        '#000000',
        '#222222',
        '#FF652F',
        '#FFE401',
        '#13A76B',
        '#747474',
        '#FF9862',
        '#FFFFFF',
    );

    return $palettes;
}

/*
 * Add Logo support
 */
// add_theme_support( 'custom-logo', array(
//     'height' => 250,
//     'width' => 276,
//     'flex-height' => true,
//     'flex-width' => true,
// ) );
