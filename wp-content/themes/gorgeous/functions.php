<?php
include('SNT_List_Control.php');
add_action( 'customize_controls_enqueue_scripts', 'snt_customizer_controls_scripts' );
function snt_customizer_controls_scripts() {
	  wp_enqueue_script( 'custom_snt_control_js', get_stylesheet_directory_uri() . '/assets/js/customizer-controls.js', array( 'customize-preview', 'jquery' ) );
	  wp_enqueue_style( 'custom_snt_control_style', get_stylesheet_directory_uri() . '/assets/css/customizer-controls.css' );

}






add_action('customize_register', 'unique_footer_customizer');
function unique_footer_customizer($wp_customize){


//adding section in wordpress customizer   
$wp_customize->add_section('footer_settings_section', array(
'title'          => 'Footer Text Section'
));
//adding setting for footer text area
$wp_customize->add_setting('footer_text', array(
'default'        => 'Default Text For Footer Section',
));
$wp_customize->add_control('footer_text', array(
'label'   => 'Footer Text Here',
'section' => 'footer_settings_section',
'type'    => 'textarea',
));
$wp_customize->add_setting('background_color', array(
    'default'        => '#ffffff',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background_color', array(
        'label'   => 'Footer Color Setting',
        'section' => 'footer_settings_section',            
        'settings'   => 'background_color',

)));
    
//adding setting for footer logo
$wp_customize->add_setting('footer_logo');
$wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize,'footer_logo',array(
'label'      => __('Footer Logo', 'mytheme'),
'section'    => 'footer_settings_section',
'settings'   => 'footer_logo',
)));
    
//adding setting for footer logo
$wp_customize->add_setting('unique_list');
$wp_customize->add_control(new SNT_List_Control($wp_customize,'unique_list',array(
'label'      => __('Unique List', 'mytheme'),
'section'    => 'footer_settings_section',
'settings'   => 'unique_list',
)));
}


