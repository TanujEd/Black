<?php 
/* 
* Plugin Name: Elimodo Plugin
* Description: This is plugin is created only for few motive
*/



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

                defined('ABSPATH') or die('Hey Sorry Something is wrong on your plugin which creates some problem');

                class ElimodoPlugin
                {
                    function __construct($string){
                    $this->str = $string;
                    $this->init();
                    add_action('init',array($this,'activate'));
                    }
                    
                    function init(){
                        add_action('wp_head', [$this, 'print']);
                    }

                    function print(){
                        pr($this->str);
                    }

                    function activate(){
                    $this->custom_post_type();
                    flush_rewrite_rules();
                    }

                    function deactivate(){
                    flush_rewrite_rules();
                    }


                    function custom_post_type(){
                    register_post_type('book',
                    array(
                    'labels'      => array(
                     'name'          => __('Books'),
                     'singular_name' => __('book'),
                    ),
                    'public'      => true,
                    'has_archive' => true,
                    'rewrite'     => array( 'slug' => 'products' ),
                    'supports'    => array( 'title', 'editor', 'author', 'thumbnail','custom-fields'),
                    'taxonomies'  => array('post_tag'),
                    )
                    );
                    register_taxonomy( 'awesome_taxonomy', array( 'post', 'page', 'awesome' ) );
                

                    // register_post_type('book',
                    // ['public'=>true,
                    // 'label' =>'Book'              
                    // ]);
                    }

                    function enqueue()
                    {
                        //style
                        wp_enqueue_style('style_css', plugins_url('assets/style.css',__FILE__ ));

                        //script
                        wp_enqueue_script('blank_js', plugins_url('assets/blank.js',__FILE__ ));
                    }

                    function register()
                    {
                        add_action('admin_enqueue_scripts', array($this, 'enqueue' ));                       
                    }
                    
                    }
                    if(class_exists('ElimodoPlugin')){
                        $elimodoplugin = new ElimodoPlugin('Hey there Goodbye!');
                        $elimodoplugin->register();
                    }

                    //activate

                    register_activation_hook( __FILE__, array($elimodoplugin, 'activate'));

                    // deactivate

                    register_deactivation_hook( __FILE__, array($elimodoplugin, 'deactivate'));