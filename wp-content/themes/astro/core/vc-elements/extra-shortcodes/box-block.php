<?php
    add_action('init', 'boxblock_integrateWithVC');
    function boxblock_integrateWithVC(){
        vc_map ( array (
            "name" => 'Box Block',
             "base" => "pr-boxblock",
             "icon" => "of-icon-for-vc",
             "category" => __ ( 'Promsu', PR_THEME_NAME ),
             "params" => array (
                  array (
                        "type" => "dropdown",
                        "heading" => __ ( "Style", PR_THEME_NAME ),
                        "param_name" => "style",
                        "value" => array(
                            "Style Service" => "box-services",
                            "Style About" => "box-about",
                            "Style Contact" => "box-contact",
                            "Style Video Barallax" => "box-video-barallax",
                        ),
                        "description" => __ ( "Select style box.", PR_THEME_NAME )
                        
                        ),
                  array(
                        "type" => "textfield",
                        "heading" => __('Title', PR_THEME_NAME),
                        "param_name" => "title_box",
                        "description" => __('Enter title box',PR_THEME_NAME)
                    ),
                  array(
                        "type" => "textarea",
                        "heading" => __('Description', PR_THEME_NAME),
                        "param_name" => "description",
                        "description" => __('Enter content of box',PR_THEME_NAME)
                    ),
                  array(
                        "type" => "textfield",
                        "heading" => __('Extra class', PR_THEME_NAME),
                        "param_name" => "ex_class",
                        "value" => '',
                        "description" => __('Enter extra class form icon font.',PR_THEME_NAME)
                    )
             )
        )
        );
        
    }
    
?>
