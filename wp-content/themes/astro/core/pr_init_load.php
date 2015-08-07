<?php
    #-----------------------------------------------------------------#
    # Get them info  wp_get_theme
    #-----------------------------------------------------------------#
    function is_url_exist($url){
        $ch = curl_init($url);    
        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if($code == 200){
            $status = true;
        }else{
            $status = false;
        }
        curl_close($ch);
        return $status;
    }
    $theme_version = '';
    if(function_exists('wp_get_theme' )){
        if( is_child_theme() ) {
            $temp_obj = wp_get_theme();
            $theme_obj = wp_get_theme( $temp_obj->get('Template') );
        } else {
            $theme_obj = wp_get_theme();    
        }
        $theme_version = $theme_obj->get('Version');
        $theme_name = $theme_obj->get('Name');
        $theme_uri = $theme_obj->get('ThemeURI');
        $author_uri = $theme_obj->get('AuthorURI'); 

    }
    else{
        $theme_data = wp_get_theme(get_template_directory() . '/style.css');
        $theme_version = $theme_data['Version'];
        $theme_name = $theme_data['Name'];
        $theme_uri = $theme_data['ThemeURI'];
        $author_uri = $theme_data['AuthorURI'];
    }
    #-----------------------------------------------------------------#
    # Define promsu
    #-----------------------------------------------------------------#
    define('PR_THEME_URL', trailingslashit(get_bloginfo('template_url')));
    define('PR_THEME_PATH', trailingslashit(get_stylesheet_directory()));
    define('PR_THEME_NAME', $theme_name);
    define('PR_THEME_VERSION', $theme_version);
    define('PR_ADMIN_PATH', PR_THEME_PATH.'admin/');
    define('PR_ADMIN_URI', PR_THEME_URL.'/admin/');
    define( 'OPTIONS', strtolower($theme_name).'_options' );
    #-----------------------------------------------------------------#
    # Add Style Main                                                  #
    #-----------------------------------------------------------------#

    if (class_exists('Vc_Manager')) {
        function add_extra_field( $name, $form_field_callback, $script_url = null ) {

            return WpbakeryShortcodeParams::addField( $name, $form_field_callback, $script_url );
            // $check =  WpbakeryShortcodeParams::addField( $name, $form_field_callback, $script_url );
            //  print_r($check);die();
        }
    }
    if (function_exists("vc_map")){
        require PR_THEME_PATH.'core/vc-elements/extra_shorcodes.php';
    }
    if (function_exists("add_extra_field")){

        require PR_THEME_PATH.'core/vc-elements/extra_fields.php';
    }
    if (function_exists("vc_add_param")){
        require PR_THEME_PATH.'/core/vc-elements/extra_params.php';
    }
    if (function_exists("vc_set_template_dir")) {
        vc_set_template_dir(PR_THEME_PATH . "core/layouts/vc-templetes/vc-customs/");
    } 
    #-----------------------------------------------------------------#
    # Add Style Main                                                  #
    #-----------------------------------------------------------------#
    function pr_style_main(){
        // Register 
        wp_register_style('bootstrap.min', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');
        wp_register_style('font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css');
        wp_register_style('pretty-photo', get_stylesheet_directory_uri() . '/css/prettyPhoto.css');
        wp_register_style('animate', get_stylesheet_directory_uri() . '/css/animate.css');
        wp_register_style('astro-animation', get_stylesheet_directory_uri() . '/css/astro-animation.css');
        wp_register_style('main-style', get_stylesheet_directory_uri() . '/style.css');
        //wp_register_style('responsive', get_stylesheet_directory_uri() . '/assets/css/responsive.css');
        wp_register_style('static', get_stylesheet_directory_uri() . '/assets/css/static.css');
    
        //Run style
        wp_enqueue_style('bootstrap.min');
        wp_enqueue_style('font-awesome');
        wp_enqueue_style('pretty-photo');
        wp_enqueue_style('astro-animation');
        wp_enqueue_style('main-style');
        wp_enqueue_style('static');
      //  wp_enqueue_style('style');
      //  wp_enqueue_style('responsive');
        
    }
    add_action('wp_enqueue_scripts', 'pr_style_main');
    #---------------------------------------------------------------#
    # Add Javascript  Main
    #-----------------------------------------------------------------#
    function pr_javascript_main(){
        wp_register_script('js-jquery-min', get_template_directory_uri() . '/assets/js/jquery.js', 'jquery', '2.1.1');
        wp_register_script('js-bootstrap-min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', 'jquery', '3.3.4');
        wp_register_script('js-inview', get_template_directory_uri() . '/assets/js/jquery.inview.min.js', 'jquery', '1.3');
        wp_register_script('js-countto', get_template_directory_uri() . '/assets/js/jquery.countTo.js', 'jquery', '1.5.25');
        wp_register_script('js-parallax', get_template_directory_uri() . '/assets/js/jquery.parallax.js', 'jquery', '1.8.1');
        wp_register_script('js-mousescroll', get_template_directory_uri() . '/assets/js/mousescroll.js', 'jquery', '1.8.1');
        wp_register_script('js-prettyphoto', get_template_directory_uri() . '/assets/js/jquery.prettyPhoto.js', 'jquery', '1.8.1');
        wp_register_script('js-mixitup', get_template_directory_uri() . '/assets/js/jquery.mixitup.min.js', 'jquery', '1.5.5');
        wp_register_script('js-canvas', get_template_directory_uri() . '/assets/js/canvas.js', 'jquery');
        wp_register_script('js-preloader', get_template_directory_uri() . '/assets/js/pre_loader.js', 'jquery', '1.8.1');
        wp_register_script('js-main', get_template_directory_uri() . '/assets/js/main.js', 'jquery', '2.1.1');
      
        wp_enqueue_script('js-jquery-min');
        wp_enqueue_script('js-bootstrap-min');  
        wp_enqueue_script('js-inview');
        wp_enqueue_script('js-countto'); 
        wp_enqueue_script('js-mousescroll'); 
        wp_enqueue_script('js-prettyphoto');
        wp_enqueue_script('js-parallax'); 
         
        wp_enqueue_script('js-mixitup');
        wp_enqueue_script('js-canvas');
        wp_enqueue_script('js-preloader'); 
        wp_enqueue_script('js-main'); 
        
    }
    add_action('wp_enqueue_scripts', 'pr_javascript_main');


    //Add main men
    require PR_THEME_PATH.'core/load-menu.php';
    //End
    #----------------------------------------------#
    require PR_THEME_PATH.'core/shortcodes/shortcode-init.php';
    
    #----------------------------------------------#
    include_once PR_THEME_PATH.'core/widget/widget-footer.php';

?>
