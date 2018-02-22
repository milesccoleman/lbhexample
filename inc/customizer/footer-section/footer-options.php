<?php
/* Buttom Footer settings options */
$wp_customize->add_section( 'doko-buttom-footer-section', array(
    'priority'       => 35,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => esc_html__( 'Footer Settings', 'doko' )
) );

    // Background Image
    $wp_customize->add_setting( 'doko_footer_background_image', array(
        'sanitize_callback' => 'esc_url_raw'
        
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'doko_footer_background_image', array(
               'label'      => esc_html__( 'Upload Footer Background Image', 'doko' ),
               'section'    => 'doko-buttom-footer-section',
               'settings'   => 'doko_footer_background_image',
    ) ) );
    
   // Footer copyright text
    $wp_customize->add_setting('doko_footer_copyright', array(
        'default' => esc_html__('2017 @ all rights reserved.', 'doko'),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'doko_text_sanitize',  //done
        
    ));

    $wp_customize->add_control('doko_footer_copyright', array(
        'type' => 'text',
        'label' => esc_html__('Footer Text', 'doko'),
        'section' => 'doko-buttom-footer-section',
        'settings' => 'doko_footer_copyright'
    ));