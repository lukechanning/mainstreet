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
  

}
add_action( 'customize_register', 'mainstreet_custom_register' );

?>