<?php

add_action('init', 'contactPr_integrateWithVC');

function contactPr_integrateWithVC(){
    vc_map(
            array(
                "name" => 'Contact Promsu',
                "base" => "pr-contacts",
                "icon" => "of-icon-for-vc",
                "category" => __('Promsu', PR_THEME_NAME),
                "params" => array(
                    array(
                        "type" => 'textfield',
                        "heading" => __('Title', PR_THEME_NAME),
                        "param_name" =>'con_title'
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => __('Descriptions', PR_THEME_NAME),
                        "param_name" => "con_desc"
                    ) 
                )
            )
    );
}
?>
