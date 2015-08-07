<?php

add_action('init', 'prTeam_integrateWithVC');

function prTeam_integrateWithVC(){
    vc_map(
            array(
                "name" => 'Astro team',
                "base" => "pr-team",
                "icon" => "of-icon-for-vc",
                "category" => __('Promsu', PR_THEME_NAME),
                "params" => array(
                    array(
                        "type" => "text",
                        "heading" => __('Title', PR_THEME_NAME),
                        "param_name" => "about_title",
                    ),
                    array(
                        "type" => "textarea",
                        "heading" => __('Descriptions', PR_THEME_NAME),
                        "param_name" => "about_desc",
                    ),
                   
                )
            )
    );
}
?>
