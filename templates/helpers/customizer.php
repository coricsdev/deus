<?php
/**
 *  WordPress Customizer Settings
 * 
 */

function deus_customizer_settings( $wp_customizer ){
    //add a customizer settings
    //include a new section
    $wp_customizer->add_section( 'header', [
        'title' => __('Header Settings', 'deus'),
        'priority' => 70
    ] );

    // add a capability to the customizer settings
    $wp_customizer->add_setting( 'header_image', [
        'capability' => 'edit_theme_options'
    ] );
    
    // add a new control
    $wp_customizer->add_control( new WP_Customize_Image_Control( $wp_customizer, 'header_image', [ 
        'label' => __( 'Header Image', 'deus' ),
        'description' => 'Recommended: 1920 x 550 pixels',
        'section' => 'header'
        ] ) );

    //adding header text
    $wp_customizer->add_setting( 'header_text_field', [
        'capability' => 'edit_theme_options',
        'default' => 'Welcome to Deus'
    ] );

    //adding text control
    $wp_customizer->add_control( 'header_text_control', [
        'label' => __( 'Header Text', 'deus' ),
        'description' => 'Change Header Text',
        'section' => 'header',
        'settings' => 'header_text_field'
    ] );

     //adding header description field
     $wp_customizer->add_setting( 'header_desc_field', [
        'capability' => 'edit_theme_options',
        'default' => 'The power of custom WP Theme'
    ] );

    //adding text control
    $wp_customizer->add_control( 'header_description_control', [
        'label' => __( 'Header Description', 'deus' ),
        'description' => 'Change Header description',
        'section' => 'header',
        'settings' => 'header_desc_field'
    ] );
}
add_action( 'customize_register', 'deus_customizer_settings' );