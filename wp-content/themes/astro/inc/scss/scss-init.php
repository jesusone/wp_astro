<?php
    class cmsblueScssInit {
         public $scss;
         function __construct()
         {
              global $pr_options;
              /* scss */
              $this->scss = new scssc();
               /* set paths scss */
                $this->scss->setImportPaths(get_template_directory() . '/assets/scss/');
               /* generate css over time */
               
                if (isset($pr_options['dev_mode']) && $pr_options['dev_mode']) {
                    $this->generate_file();
                    
                } else {
                    /* save option generate css */
                    add_action("redux/options/pr_options/saved", array(
                        $this,
                        'generate_file'
                    ));
                } 
         }
         public function generate_file()
        {
           
            global $pr_options;
            if (! empty($pr_options)) {
                
                /* write options to scss file */
                file_put_contents(get_template_directory() . '/assets/scss/options.scss', $this->css_render(), LOCK_EX); // Save it
                
                /* minimize CSS styles */
                if (!$pr_options['dev_mode']) {
                    $this->scss->setFormatter('scss_formatter_compressed');
                }
                
                /* compile scss to css */
                $css = $this->scss_render();
                
                $file = "static.css";
                
                if(!empty($pr_options['presets_color']) && $pr_options['presets_color']){
                    $file = "presets-".$pr_options['presets_color'].".css";
                }
                
                /* write static.css file */
                file_put_contents(get_template_directory() . '/assets/css/' . $file, $css, LOCK_EX); // Save it
            }
        }
        public function scss_render(){
            //var_dump($this->scss->compile('@import "master.scss"')); die();
        /* compile scss to css */
             return $this->scss->compile('@import "master.scss"');
        }
           /**
     * main css
     *
     * @since 1.0.0
     * @return string
     */
    public function css_render()
    {
    
        global $pr_options, $cmsblue_base;
        ob_start();
        /* custom css.  */ 
        echo esc_attr($pr_options['custom_css']);
        
        /* google fonts. */
       //$cmsblue_base->setGoogleFont($pr_options['google-font-1'], $pr_options['google-font-selector-1']);
        //$cmsblue_base->setGoogleFont($pr_options['google-font-2'], $pr_options['google-font-selector-2']);
        
        /* local fonts */
      //  $cmsblue_base->setFontFace($pr_options['local-fonts-1'], $pr_options['local-fonts-selector-1']);
       // $cmsblue_base->setFontFace($pr_options['local-fonts-2'], $pr_options['local-fonts-selector-2']);
        /* forward options to scss. */
        echo '$primary_color:'.esc_attr($pr_options['primary_color']).';';
        /* ==========================================================================
           Start Header
        ========================================================================== */
        /* Header backgroud */
        if(!empty($pr_options['bg_header']['rgba'])) {
              echo "#navigation .main-nav {
               background-color:".esc_attr($pr_options['bg_header']['rgba'])." ;
              }";
        } 
        if(!empty($pr_options['bg_header_sticky']['rgba'])) {
              echo "#navigation .main-nav.black-nav {
               background-color:".esc_attr($pr_options['bg_header']['rgba'])." ;
              }";
        }
        
        if(!empty($pr_options['bg_header']['rgba'])) {
              echo "#navigation .main-nav {
               background-color:".esc_attr($pr_options['bg_header']['rgba'])." ;
              }";
        }
        /* Set logo*/
         if(!empty($pr_options['main_logo_height'])) {
              echo "#navigation .navbar-brand a h1 img {
               max-height:".esc_attr($pr_options['main_logo_height'])." ;
              }";
        }
            /* Menu Main*/
            
                if($pr_options['menu_color_first_level']){
                    
                   echo "#navigation .navbar-right li a {
                        color:".esc_attr($pr_options['menu_color_first_level']).";
                        font-size:".esc_attr($pr_options['menu_fontsize_first_level']).";
                        padding:".esc_attr($pr_options['menu_padding_first_level']).";
                        margin:".esc_attr($pr_options['menu_margin_first_level']).";
                      
                   }" ;
                   
                }
            /* End Menu Main*/
          

        /* ==========================================================================
           End Header
        ========================================================================== */

        /* ==========================================================================
           Start Body
        ========================================================================== */
            /* All Slector - Color Primary */
            if($pr_options['primary_color']) {
                echo ".wg-title,
                .entry-blog .entry-date,
                .cms-blog-layout1 .cms-blog-header .cms-blog-date,
                .entry-blog .entry-meta i,
                #secondary [class*='widget_'] ul li a:hover, 
                #secondary [class*='widget-'] ul li a:hover:before,
                #secondary [class*='widget_'] ul li a:hover:before, 
                #secondary [class*='widget-'] ul li a:hover:before,
                .entry-blog .entry-meta ul li.detail-author a,
                .entry-blog .entry-meta ul li a:hover {
                    color:".esc_attr($pr_options['primary_color']).";
                }";
            }
            if($pr_options['primary_color']) {
                echo ".navigation .page-numbers:hover,
                .navigation .prev.page-numbers:hover:before,
                .navigation .next.page-numbers:hover:after,
                .navigation .page-numbers.current {
                    background:".esc_attr($pr_options['primary_color']).";
                }";
            }
            /* End All Slector - Color Primary */

            /* All Slector - Color Kndergarten */
           /* if($pr_options['kindergarten_color']){
                echo ".wg-title:before {
                    background-color:".esc_attr($pr_options['kindergarten_color']).";
                }";
            } */
            
            /* End All Slector - Color Kndergarten */

            /* All Slector -  Color Secondary */
            if($pr_options['secondary_color']){
                echo ".page-sub-title {
                    color:".esc_attr($pr_options['secondary_color']).";
                }";
            }
            /* End All Slector - Color Secondary */

            /* All Slector - Background Color Secondary */
            if($pr_options['secondary_color']){
                echo ".entry-blog .entry-date, .cms-blog-layout1 .cms-blog-header .cms-blog-date,
                body .mejs-controls .mejs-time-rail .mejs-time-current, 
                body .mejs-controls .mejs-time-rail .mejs-time-loaded, 
                body .mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current {
                    background-color:".esc_attr($pr_options['secondary_color']).";
                }";
            }
            /* End All Slector - Background Color Secondary */

            /* Body Margin + Padding */
            if(!empty($pr_options['body_padding'])){
                echo "body #page{padding:".esc_attr($pr_options['body_padding']).";}";
            }
            if(!empty($pr_options['body_margin'])){
                echo "body #page{margin:".esc_attr($pr_options['body_margin']).";}";
            }
            if(!empty($pr_options['container_padding'])){
                echo "body #page #main {padding:".esc_attr($pr_options['container_padding']).";}";
            }
            if(!empty($pr_options['container_margin'])){
                echo "body #page #main {margin:".esc_attr($pr_options['container_margin']).";}";
            }
            /* Title Style Color */
            if(!empty($pr_options['column_style']) && $pr_options['column_style'] == 'title-primary-color'){
                echo ".title-primary-color .wpb_text_column > wpb_wrapper h3 {
                    border-bottom: 1px solid ".esc_attr($pr_options['title-primary-color']).";
                }";
            }
            if(!empty($pr_options['column_style']) && $pr_options['column_style'] == 'title-secondary-color'){
                echo ".title-secondary-color .wpb_text_column > wpb_wrapper h3 {
                    border-bottom: 1px solid ".esc_attr($pr_options['title-secondary-color']).";
                }";
            }
        /* ==========================================================================
           End Body
        ========================================================================== */
        
        /* ==========================================================================
           Start Footer
        ========================================================================== */
            /* Footer Top */
            if($pr_options['footer_margin']){
                echo "footer #cshero-footer-top{margin:".esc_attr($pr_options['footer_margin']).";}";
            }
            if($pr_options['footer_padding']){
                echo "footer #cshero-footer-top{padding:".esc_attr($pr_options['footer_padding']).";}";
            }
            if($pr_options['footer_top_color']){
                echo "#cshero-footer-top {
                    color:".esc_attr($pr_options['footer_top_color']).";
                }";
            }
            if($pr_options['footer_headding_color']){
                echo "#cshero-footer-top .wg-title {
                    color:".esc_attr($pr_options['footer_headding_color']).";
                }";
            }
            if($pr_options['footer_headding_color']){
                echo "#cshero-footer-top .wg-title:before {
                    background-color:".esc_attr($pr_options['footer_headding_color']).";
                }";
            }
            if($pr_options['footer_top_link_color']){
                echo "#cshero-footer-top a {
                    color:".esc_attr($pr_options['footer_top_link_color']).";
                }";
            }
            if($pr_options['footer_top_link_color_hover']){
                echo "#cshero-footer-top a:hover {
                    color:".esc_attr($pr_options['footer_top_link_color_hover']).";
                }";
            }
            /* End Footer Top */

            /* Footer Bottom */
            if($pr_options['footer_botton_margin']){
                echo "footer #cshero-footer-bottom{margin:".esc_attr($pr_options['footer_botton_margin']).";}";
            }
            if($pr_options['footer_botton_padding']){
                echo "footer #cshero-footer-bottom{padding:".esc_attr($pr_options['footer_botton_padding']).";}";
            }
            if($pr_options['footer_bottom_color']){
                echo "#cshero-footer-bottom {
                    color:".esc_attr($pr_options['footer_bottom_color']).";
                }";
            }
            /* End Footer Bottom */
        /* ==========================================================================
           End Footer
        ========================================================================== */
        
      
        return ob_get_clean();
    }
    }
    new cmsblueScssInit(); 
?>
