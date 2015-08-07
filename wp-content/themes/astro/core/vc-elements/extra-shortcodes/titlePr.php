<?php

add_action('init', 'title_integrateWithVC');

function title_integrateWithVC() {
    vc_map(array(
        "name" => __("Title", THEMENAME),
        "base" => "pr-title",
        "class" => "title",
        "category" => __('Promsu', THEMENAME),
        "icon" => "of-icon-for-vc",
        "params" => array( 
             array (
                "type" => "dropdown",
                "heading" => __ ( "Layout", PR_THEME_NAME ),
                "param_name" => "layout",
                "value" => array(
                    "Layout Default" => "layout1",
                    "Layout2" => "layout2",
                ),
                "description" => __ ( "Select style box.", PR_THEME_NAME )
                
                ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => __("Small title", THEMENAME),
                "param_name" => "pr_small_title",
                "value" => "",
                "description" => __("Enter small title.", THEMENAME)
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => __("Title", THEMENAME),
                "param_name" => "pr_title",
                "value" => "",
                "description" => __("Enter title.", THEMENAME)
            ),
            array(
                "type" => "textarea",
                "holder" => "div",
                "class" => "",
                "heading" => __("Description", THEMENAME),
                "param_name" => "pr_description",
                "value" => "",
                "description" => __("Enter description.", THEMENAME)
            ),
            array (
                "type" => "colorpicker",
                "heading" => __ ( 'Color', THEMENAME ),
                "param_name" => "color",
                "value" => '',
                "description" => __ ( 'Color', THEMENAME ),
            ),
            
            array(
                "type" => "textfield",
                "class" => "",
                "heading" => __("Extra Class", THEMENAME),
                "param_name" => "pr_class",
                "value" => "",
                "description" => __("Extra Class.", THEMENAME)
            ),
        )
    ));
}
