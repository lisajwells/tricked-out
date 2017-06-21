<?php
/**
 * Generate child theme functions and definitions
 *
 * @package Generate
 */

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
