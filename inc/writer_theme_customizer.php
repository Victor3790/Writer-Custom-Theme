<?php
/**
 *  Settings to customize the theme.
*/

if ( ! defined( 'ABSPATH' ) ) die();

function writer_theme_customizer( $wp_customize )
{

    //Register sections
    $wp_customize->add_section( 'wrtr_cust_social_section', [
      'title'     =>  'Redes sociales',
      'priority'  =>  30
    ]);

    $wp_customize->add_section( 'wrtr_cust_writer_section', [
        'title'     =>  'Datos del escritor',
        'priority'  =>  31
    ]);


    //Register settings in the database

    //Social
    $wp_customize->add_setting( 'wrtr_cust_facebook_handle', [
      'default'   => 'https://facebook.com',
      'transport' => 'refresh'
    ]);

    $wp_customize->add_setting( 'wrtr_cust_twitter_handle', [
      'default'   => 'https://twitter.com',
      'transport' => 'refresh'
    ]);

    $wp_customize->add_setting( 'wrtr_cust_instagram_handle', [
      'default'   => 'https://instagram.com',
      'transport' => 'refresh'
    ]);

    //writer
    $wp_customize->add_setting( 'wrtr_cust_name_handle', [
      'default'   => '',
      'transport' => 'refresh'
    ]);

    $wp_customize->add_setting( 'wrtr_cust_description_handle', [
        'default'   => '',
        'transport' => 'refresh'
    ]);

    //Assign a controls

    //Social
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'wrtr_cust_facebook_input',
        array(
            'label'          => 'Facebook',
            'section'        => 'wrtr_cust_social_section',
            'settings'       => 'wrtr_cust_facebook_handle',
            'type'           => 'text'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'wrtr_cust_twitter_input',
        array(
            'label'          => 'Twitter',
            'section'        => 'wrtr_cust_social_section',
            'settings'       => 'wrtr_cust_twitter_handle',
            'type'           => 'text'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'wrtr_cust_instagram_input',
        array(
            'label'          => 'Instagram',
            'section'        => 'wrtr_cust_social_section',
            'settings'       => 'wrtr_cust_instagram_handle',
            'type'           => 'text'
        )
    ));

    //writer
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'wrtr_cust_name_input',
        array(
            'label'          => 'Nombre',
            'section'        => 'wrtr_cust_writer_section',
            'settings'       => 'wrtr_cust_name_handle',
            'type'           => 'text'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'wrtr_cust_description_input',
        array(
            'label'          => 'Descripción',
            'section'        => 'wrtr_cust_writer_section',
            'settings'       => 'wrtr_cust_description_handle',
            'type'           => 'text'
        )
    ));


}

add_action( 'customize_register', 'writer_theme_customizer' );
