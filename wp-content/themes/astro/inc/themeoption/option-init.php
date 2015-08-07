<?php
  if ( ! class_exists( 'Astro_config' ) ) {
         
      class Astro_config {
            public $args = array();
            public $sections = array();
            public $theme;
            public $ReduxFramework;
            public function __construct() {
                if ( ! class_exists( 'ReduxFramework' ) ) {
                    return;
                }

                // This is needed. Bah WordPress bugs.  ;)
                if ( true == Redux_Helpers::isTheme( __FILE__ ) ) {
                    $this->initSettings();
                      
                } else {
                    add_action( 'plugins_loaded', array( $this, 'initSettings' ), 10 );
                }
                

            }
            public function initSettings() {
                    
                // Set the default arguments
                $this->setArguments();

                // Set a few help tabs so you can see how it's done
                $this->setHelpTabs();

                // Create the sections and fields
                $this->setSections();
                if ( ! isset( $this->args['opt_name'] ) ) { // No errors please
                    return;
                }
               

                $this->ReduxFramework = new ReduxFramework( $this->sections, $this->args );
            }
            public function setHelpTabs() {
 
                // Custom page help tabs, displayed using the help API. Tabs are shown in order of definition.
                $this->args['help_tabs'][] = array(
                    'id'      => 'redux-help-tab-1',
                    'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
                    'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
                );

                $this->args['help_tabs'][] = array(
                    'id'      => 'redux-help-tab-2',
                    'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
                    'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
                );

                // Set the help sidebar
                $this->args['help_sidebar'] = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
            }
            public function setArguments() {
               
                $theme = wp_get_theme(); // For use with some settings. Not necessary.
                $this->args = array(
                    'opt_name'           => 'pr_options',
                    'display_name'       => $theme->get( 'Name' ),
                    'display_version'    => 'V'.$theme->get( 'Version' ),
                    'menu_type'          => 'menu',
                    'allow_sub_menu'     => true,
                    'menu_title'         => $theme->get( 'Name' ),
                    'page_title'         => $theme->get( 'Name' ),
                    'admin_bar'          => true,
                    'dev_mode'           => true,
                     'hints'              => array(
                        'icon'          => 'icon-question-sign',
                        'icon_position' => 'right',
                        'icon_color'    => 'lightgray',
                        'icon_size'     => 'normal',
                        'tip_style'     => array(
                            'color'   => 'light',
                            'shadow'  => true,
                            'rounded' => false,
                            'style'   => '',
                        ),
                        'tip_position'  => array(
                            'my' => 'top left',
                            'at' => 'bottom right',
                        ),
                        'tip_effect'    => array(
                            'show' => array(
                                'effect'   => 'slide',
                                'duration' => '500',
                                'event'    => 'mouseover',
                            ),
                            'hide' => array(
                                'effect'   => 'slide',
                                'duration' => '500',
                                'event'    => 'click mouseleave',
                            ),
                        ),
                    )
                );
            }
            public function setSections() {
                require 'option-sections.php';
            }
            
      }
       global $reduxConfig;
       $reduxConfig = new Astro_config();
       
      // $options = get_option('pr_options');
      // print_r($options);die();
  }
?>
