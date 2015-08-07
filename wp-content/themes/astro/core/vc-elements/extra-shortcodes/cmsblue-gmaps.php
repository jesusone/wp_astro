<?php

add_action('init', 'cmsblue_gmap_integrateWithVC');

function cmsblue_gmap_integrateWithVC() {
    vc_map(array(
        "name" => __("Google Map", PR_THEME_NAME),
        "base" => "pr-cmsblue-gmap",
        "class" => "title",
        "category" => __('Astro', PR_THEME_NAME),
        "icon" => "of-icon-for-vc",
        "params" => array( 
            
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => __("Lat", THEMENAME),
                "param_name" => "pr_lat",
                "value" => "",
                "description" => __("Enter lat.", THEMENAME)
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => __("Lng", THEMENAME),
                "param_name" => "pr_lng",
                "value" => "",
                "description" => __("Enter lng.", THEMENAME)
            ),
        )
    ));
}
