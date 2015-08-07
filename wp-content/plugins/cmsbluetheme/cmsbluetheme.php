<?php
  /**
*
* Plugin Name: Cmsbluetheme
* Plugin URI: http://cmsbluetheme.com
* Description: This plugin is package compilation some addons, which is developed by cmsbluetheme Team for Visual Comporser plugin.
* Version: 1.0.0
* Author: Chau Trieu
* Author URI: http://cmsbluetheme.com
* Copyright 2011-2015 cmsbluetheme.com. All rights reserved.
*/

define( 'CMSBLUE_NAME', 'cmsbluetheme');
define( 'CMSBLUE_DIR', plugin_dir_path(__FILE__) );
define( 'CMSBLUE_URL', plugin_dir_url(__FILE__) );
define( 'CMSBLUE_LANGUAGES', CMSBLUE_DIR . "languages" . DIRECTORY_SEPARATOR );
define( 'CMSBLUE_LIB', CMSBLUE_DIR . "lib" . DIRECTORY_SEPARATOR );
define( 'CMSBLUE_INC', CMSBLUE_DIR . "inc" . DIRECTORY_SEPARATOR );
define( 'CMSBLUE_TEMPLATES', CMSBLUE_DIR . "templates" . DIRECTORY_SEPARATOR );
define( 'CMSBLUE_CSS', CMSBLUE_URL . "assets/css/" );
define( 'CMSBLUE_JS', CMSBLUE_URL . "assets/js/" );
define( 'CMSBLUE_IMAGES', CMSBLUE_URL . "assets/images/" );

require_once CMSBLUE_INC . 'cmsblue_functions.php';
new CmsBlueTheme();
class CmsBlueTheme {
   public function __construct(){
      /* Add action VC */
       add_action('vc_before_init', array($this, 'cmsBlueElementRegister'));
       /* Add scrip*/
       add_action('wp_enqueue_scripts', array( $this, 'cmsblue_register_script'));
   }
   public function cmsBlueElementRegister(){
    //Load shortcde
      require_once CMSBLUE_INC . 'cmsblue_shortcodes.php';
   } 
   public function cmsblue_register_script(){
       wp_register_script('js-porfolio', CMSBLUE_JS. 'portfolio.js', 'jquery', '0.4.9'); 
   } 
}
?>
