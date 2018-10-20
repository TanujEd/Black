<?php

if ( !function_exists('pr') ){
    function pr( $arr , $dye = 0){
       $root = debug_backtrace();
       $file = str_replace($_SERVER['DOCUMENT_ROOT'],'',$root[0]['file']);
       $string = '</br>Line: '.$root[0]['line'].'</br>File : '.$file;

       echo "<pre>";        
       print_r($arr);        
       echo "</pre>";
       

       if($dye == 1){            
           die($string);
       }
    }
}


    if(!function_exists('e')){
        function e($text){
            if(is_array($text) || is_object($text)) 
                print_r($text);
            else
                echo __($text);
        }
    }

    add_action( 'wp_enqueue_scripts', 'gorgeous_enqueue_style' );
    function gorgeous_enqueue_style() {
        if ( is_child_theme() ) {

        wp_dequeue_style('twentyseventeen');
        
        // load parent stylesheet first if this is a child theme
        wp_enqueue_style('gorgeous', get_stylesheet_directory_uri() .'style.css' );
    }




        //     function mytheme_customize_register( $wp_customize ) {

        //     //All our sections, settings, and controls will be added here
        //     $wp_customize->add_setting( 'header_textcolor' , array(
        //         'default'   => '#000000',
        //         'transport' => 'refresh',
        //     ) );

        //     $wp_customize->add_section( 'mytheme_new_section_name' , array(
        //         'title'      => __( 'Visible Section Name', 'mytheme' ),
        //         'priority'   => 30,
        //     ) );
        //     $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
        //         'label'      => __( 'Header Color', 'mytheme' ),
        //         'section'    => 'your_section_id',
        //         'settings'   => 'your_setting_id',
        //     ) ) );
        //     $wp_customize->add_setting( 'header_color' , array(
        //     'default'     => '#000000',
        //     'transport'   => 'refresh',
        // ) );
        // }
        //     add_action( 'customize_register', 'mytheme_customize_register' );







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
        }


