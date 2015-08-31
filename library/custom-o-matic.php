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
    
    //Add CTA BG
    $wp_customize->add_section( 'mainstreet_cta_bg_section' , array(
    'title'       => __( 'mainstreet CTA BG', 'mainstreet' ),
    'priority'   => 30,
    'description' => 'Upload an image to add to the CTA section on most pages',
    ) );
    $wp_customize->add_setting( 'mainstreet_cta_bg' );
    $wp_customize->add_control( new WP_Customize_Image_Control(
    $wp_customize, 'mainstreet_cta_bg', array(
    'label'   => __( 'CTA BG', 'themeslug' ),
    'section' => 'mainstreet_cta_bg_section',
    'settings' => 'mainstreet_cta_bg',
    ) ) );

}
add_action( 'customize_register', 'mainstreet_custom_register' );

//Let's add our custom Product Post Type 
    
    function product_post_type() {
    
    	$labels = array(
    		'name'                => _x( 'Procuts', 'Post Type General Name', 'text_domain' ),
    		'singular_name'       => _x( 'Product', 'Post Type Singular Name', 'text_domain' ),
    		'menu_name'           => __( 'Products', 'text_domain' ),
    		'name_admin_bar'      => __( 'Products', 'text_domain' ),
    		'parent_item_colon'   => __( 'Parent Product:', 'text_domain' ),
    		'all_items'           => __( 'All Products', 'text_domain' ),
    		'add_new_item'        => __( 'Add New Product', 'text_domain' ),
    		'add_new'             => __( 'Add Product', 'text_domain' ),
    		'new_item'            => __( 'New Product', 'text_domain' ),
    		'edit_item'           => __( 'Edit Product', 'text_domain' ),
    		'update_item'         => __( 'Update Product', 'text_domain' ),
    		'view_item'           => __( 'View Product', 'text_domain' ),
    		'search_items'        => __( 'Search Product', 'text_domain' ),
    		'not_found'           => __( 'No Product Found', 'text_domain' ),
    		'not_found_in_trash'  => __( 'No product found in trash', 'text_domain' ),
    	);
    	$args = array(
    		'label'               => __( 'Product', 'text_domain' ),
    		'description'         => __( 'Product posts for highlighting specials', 'text_domain' ),
    		'labels'              => $labels,
    		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', ),
    		'taxonomies'          => array( 'category', 'post_tag' ),
    		'hierarchical'        => false,
    		'public'              => true,
    		'show_ui'             => true,
    		'show_in_menu'        => true,
    		'menu_position'       => 5,
    		'show_in_admin_bar'   => true,
    		'show_in_nav_menus'   => true,
    		'can_export'          => true,
    		'has_archive'         => true,		
    		'exclude_from_search' => false,
    		'publicly_queryable'  => true,
    		'capability_type'     => 'page',
    		'menu_icon'           => 'dashicons-cart',
    	);
    	register_post_type( 'product_post', $args );
    
    }
    add_action( 'init', 'product_post_type', 0 );
    
//Let's add a custom post type for gifts

    // Register Custom Post Type
    function gift_registry() {
    
    	$labels = array(
    		'name'                => _x( 'Gifts', 'Post Type General Name', 'text_domain' ),
    		'singular_name'       => _x( 'Gift', 'Post Type Singular Name', 'text_domain' ),
    		'menu_name'           => __( 'Gifts', 'text_domain' ),
    		'name_admin_bar'      => __( 'Gifts', 'text_domain' ),
    		'parent_item_colon'   => __( 'Parent Gift: ', 'text_domain' ),
    		'all_items'           => __( 'All Gifts', 'text_domain' ),
    		'add_new_item'        => __( 'Add New Gift', 'text_domain' ),
    		'add_new'             => __( 'Add Gift', 'text_domain' ),
    		'new_item'            => __( 'New Gift', 'text_domain' ),
    		'edit_item'           => __( 'Edit Gift', 'text_domain' ),
    		'update_item'         => __( 'Update Gift', 'text_domain' ),
    		'view_item'           => __( 'View Gift', 'text_domain' ),
    		'search_items'        => __( 'Search Gift', 'text_domain' ),
    		'not_found'           => __( 'No Gift Found', 'text_domain' ),
    		'not_found_in_trash'  => __( 'No gift in trash ', 'text_domain' ),
    	);
    	$args = array(
    		'label'               => __( 'Gift', 'text_domain' ),
    		'description'         => __( 'Add Gift Registry items in multiple categories', 'text_domain' ),
    		'labels'              => $labels,
    		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', ),
    		'taxonomies'          => array( 'category', 'post_tag' ),
    		'hierarchical'        => false,
    		'public'              => true,
    		'show_ui'             => true,
    		'show_in_menu'        => true,
    		'menu_position'       => 5,
    		'show_in_admin_bar'   => true,
    		'show_in_nav_menus'   => true,
    		'can_export'          => true,
    		'has_archive'         => true,		
    		'exclude_from_search' => false,
    		'publicly_queryable'  => true,
    		'capability_type'     => 'page',
    		'menu_icon'           => 'dashicons-tag',
    	);
    	register_post_type( 'gift_registry', $args );
    
    }
    add_action( 'init', 'gift_registry', 0 );

?>