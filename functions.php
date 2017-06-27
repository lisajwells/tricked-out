<?php
/**
 * Generate child theme functions and definitions
 *
 * @package Generate
 */

function trick_add_google_fonts() {
    wp_enqueue_style( 'trick-google-fonts', 'https://fonts.googleapis.com/css?family=Palanquin+Dark:400,600|Palanquin:300', false );
}
add_action( 'wp_enqueue_scripts', 'trick_add_google_fonts' );

// limit number and add google fonts to GeneratePress customizer
add_filter( 'generate_number_of_fonts','trick_show_trickonly_google_fonts' );
function trick_show_trickonly_google_fonts() {
    return 2;
}

add_filter( 'generate_typography_customize_list','trick_add_to_customizer' );
function trick_add_to_customizer( $fonts )
{
    $fonts[ 'palanquin_dark' ] = array( 'name' => 'Palanquin Dark' );
    $fonts[ 'palanquin' ] = array( 'name' => 'Palanquin' );

    return $fonts;
}

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

// add portrait image to front page
function trick_front_add_bkgd_img() {

    if ( is_front_page() ) {
        echo '<div class="front-page-portrait"><img src="'.get_home_url().'/wp-content/uploads/2017/06/Himself-try-again-vignette.jpg"></div>';
    }
};
add_action('generate_after_header', 'trick_front_add_bkgd_img');

// add background image to contact page
function trick_contact_add_bkgd_img() {

    if ( is_page( 'Contact') ) {
        echo '<div class="contact-page-bkgd"><img src="'.get_home_url().'/wp-content/uploads/2017/06/Background-for-Contact.jpg"></div>';
    }
};
add_action('generate_after_header', 'trick_contact_add_bkgd_img');

