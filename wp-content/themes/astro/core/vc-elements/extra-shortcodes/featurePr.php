<?php

add_action('init', 'featurePr_integrateWithVC');

function featurePr_integrateWithVC() {
    vc_map(
            array(
                "name" => 'FeaturePr Promsu',
                "base" => "pr-feature",
                "icon" => "of-icon-for-vc",
                "category" => __('Promsu', PR_THEME_NAME),
                "params" => array(
                    array(
                        "type" => "textarea_html",
                        "heading" => __("Title", PR_THEME_NAME),
                        "param_name" => "fi_title"       
                    ),
                   
                    array(
                        "type" => "textfield",
                        "heading" => __("Value Button", PR_THEME_NAME),
                        "param_name" => "fi_value_button",
                        
                    ) ,
                     array(
                        "type" => "textfield",
                        "heading" => __("Link Button", PR_THEME_NAME),
                        "param_name" => "fi_link_option",
                        
                    ) ,
                     array(
                         "type" => "textarea",
                         "heading" => __("Description", PR_THEME_NAME),
                         "param_name" => "fi_description"
                             ),
                    array(
                        "type" => "attach_image",
                        "heading" => __("Image feature", PR_THEME_NAME),
                        "param_name" => "fi_image",
                    )
                   
                )
            )
    );
}

?>
