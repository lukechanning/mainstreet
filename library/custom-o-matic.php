<?php 
function mainstreet_custom_register( $wp_customize ) {

    //Add Custom Header
    $wp_customize->add_section( 'mainstreet_logo_section' , array(
    'title'       => __( 'mainstreet Logo', 'mainstreet' ),
    'priority'   => 30,
    'description' => 'Upload a logo to replace the default mainstreet name and
    description in the header',
    ) );
    $wp_customize->add_setting( 'mainstreet_logo' );
    $wp_customize->add_control( new WP_Customize_Image_Control(
    $wp_customize, 'mainstreet_logo', array(
    'label'   => __( 'Logo', 'themeslug' ),
    'section' => 'mainstreet_logo_section',
    'settings' => 'mainstreet_logo',
    ) ) );
    
    //Add Home Hero Image
    $wp_customize->add_section( 'mainstreet_home_hero_section' , array(
    'title'       => __( 'mainstreet Hero Image', 'mainstreet' ),
    'priority'   => 30,
    'description' => 'Upload an image to add to the home hero section of the homepage',
    ) );
    $wp_customize->add_setting( 'mainstreet_home_hero' );
    $wp_customize->add_control( new WP_Customize_Image_Control(
    $wp_customize, 'mainstreet_home_hero', array(
    'label'   => __( 'Home Hero Image', 'themeslug' ),
    'section' => 'mainstreet_home_hero_section',
    'settings' => 'mainstreet_home_hero',
    ) ) );
    
    //Add Home Hero BG
    $wp_customize->add_section( 'mainstreet_hero_bg_section' , array(
    'title'       => __( 'mainstreet Hero BG', 'mainstreet' ),
    'priority'   => 30,
    'description' => 'Upload an image to add to the hero homepage',
    ) );
    $wp_customize->add_setting( 'mainstreet_hero_bg' );
    $wp_customize->add_control( new WP_Customize_Image_Control(
    $wp_customize, 'mainstreet_hero_bg', array(
    'label'   => __( 'Home Hero BG', 'themeslug' ),
    'section' => 'mainstreet_hero_bg_section',
    'settings' => 'mainstreet_hero_bg',
    ) ) );

}
add_action( 'customize_register', 'mainstreet_custom_register' );

?>