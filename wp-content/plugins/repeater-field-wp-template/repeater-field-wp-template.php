

<?php 
/* 
* Plugin Name: Repeater field
* version : 1.0.0
* Description: This plugin is bascially developed for generating the repeater field 
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
 
  // Front
      add_action( 'wp_enqueue_scripts', 'repeater_field_enqueue' );
      // Admin
      add_action( 'admin_enqueue_scripts', 'repeater_field_enqueue' );
      function repeater_field_enqueue() {
        wp_enqueue_script( 'repeater-js', plugin_dir_url( __FILE__ ) . '/assets/js/repeater.js', array( 'jquery', 'wp-util' ), '', true );
      }

      function  faq_repeater($atts){
      $atts = shortcode_atts( array(
      'id' => 'repeater_container'
       ), $atts, 'faq_repeater' );
       global $post;

  // Assuming we are setting a field inside a metabox
        $field_data = get_post_meta( $post->ID, 'field_data', false );
        echo file_get_contents(__DIR__.'/tmpl/template.html');
        echo file_get_contents(__DIR__.'/tmpl/repeater.html');
        ?>  
        <div id="<?php e($atts['id']); ?>">
        <label for="field_data">
        <strong><?php _e( 'Field Name', 'yourtextdomain' ); ?></strong>
        </label>
        <div id="field_data">


           <?php $field_data=array("uniqueness"); ?>
           <?php pr($field_data); ?>

            <?php if(!empty($field_data)) {?>
                <?php foreach ( $field_data as $field ) { ?>
                    <div class="field-group">
                        <input  type="text"  id="create_field" name="field_data[]"   value="<?php echo $field; ?>" />    
                        <button type="button" id="field_data_remove" class="button button-secondary field-data-remove">Remove</button>
                    </div>
                <?php } ?>
            <?php } ?>
                    
        </div>
        <!-- <input type="button"  id="field_data_add"  onclick="showInput();" name="submit" class="button button-primary" value="submit" /> -->
        <button type="button" id="field_data_add"   class="button button-primary">Add</button>
            <ul id="repeater-list">
                <li>Uniqueid</li>
                <li>Local id</li>
                <li>Uniqueness</li>
            </ul>
        </div>
        <?php
        }
        add_shortcode( 'faq_repeater', 'faq_repeater' );

    


// if(! defined('ABSPATH')){
//   die;
// }

// defined('ABSPATH') or die('Hey, your not able to access it');

// if(!function exists('add_action'))
// {
//   echo "Hey , you're not able to access it";
//   exit;
// }