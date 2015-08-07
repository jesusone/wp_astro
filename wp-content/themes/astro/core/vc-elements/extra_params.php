<?php

vc_add_param("vc_row", array (
       'type' => 'dropdown',
        'heading' => __("Full Width", PR_THEME_NAME),
        'param_name' => 'full_width',
        'value' => array (
                "No" => 0,
                "Yes" => 1
        ),
        'description' => __("Row Content Full Width", PR_THEME_NAME)
) );
// Custom row box.
vc_remove_param("vc_row", "el_id");
vc_add_param ( "vc_row", array (
        "type" => "textfield",
        "class" => "",
        "heading" => __( "Id Rows ", PR_THEME_NAME ),
        "param_name" => "dt_id",
        "value" => ""
) );
vc_add_param ( "vc_row", array (
        "type" => "dropdown",
        "class" => "",
        "heading" => __( "Row style", PR_THEME_NAME ),
        "admin_label" => true,
        "param_name" => "type",
        "value" => array (
                    "Default" => "pr-default",
                    "Background Video" => "pr-bg-video"
        ),
        "description" => __( "", PR_THEME_NAME )
) );
 
 
vc_add_param ( "vc_row", array (
        "type" => "checkbox",
        "class" => "",
        "heading" => __( "Enable parallax", PR_THEME_NAME ),
        "param_name" => "enable_parallax",
        "value" => array (
                __( "Yes, please", PR_THEME_NAME )  => true,
        )
) );


?>
