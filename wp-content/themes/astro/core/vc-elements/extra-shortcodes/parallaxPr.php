<?php

add_action('init', 'parallaxPr_integrateWithVC');

function parallaxPr_integrateWithVC() {
    vc_map(
            array(
                "name" => 'Parallax Video',
                "base" => "pr-parallax",
                "icon" => "of-icon-for-vc",
                "category" => __('Astro', PR_THEME_NAME),
                "params" => array(
                    
                    array(
                        "type" => "textfield",
                        "heading" => __("Extra class name", PR_THEME_NAME),
                        "param_name" => "pa_el_class"
                    ),
                    array(
                        "type" => "attach_image",
                        "heading" => __("Image Video", PR_THEME_NAME),
                        "param_name" => "pr_video_images",
                        'group' => 'Video Settings'
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => __("Video url", PR_THEME_NAME),
                        "param_name" => "pr_video_url",
                        'group' => 'Video Settings'
                    ),
                    array(
                         "type" => "textfield",
                        "heading" => __("Title", PR_THEME_NAME),
                        "param_name" => "pr_video_title",
                        'group' => 'Video Settings'
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => __("Description", PR_THEME_NAME),
                        "param_name" => "pr_video_description",
                        'group' => 'Video Settings'
                    ) ,
                    array(
                        "type" => "textfield",
                        "heading" => __("Video Icon", PR_THEME_NAME),
                        "param_name" => "pr_video_icon",
                        'group' => 'Video Settings'
                    )
                   
                )
            )
    );
}

?>
