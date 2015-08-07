<?php

add_action('init', 'prAboutUs_integrateWithVC');

function prAboutUs_integrateWithVC() {
    vc_map(
            array(
                "name" => 'ABOUT US',
                "base" => "pr-about-us",
                "icon" => "of-icon-for-vc",
                "category" => __('Promsu', PR_THEME_NAME),
                'admin_enqueue_js' => array(PR_ADMIN_URI . 'assets/js/visual-setting.js'),
                "params" => array(
                    array(
                        "type" => "pro_category",
                        "heading" => __("Categories", PR_THEME_NAME),
                        "param_name" => "categories",
                        "description" => __("Select categories show about us.", PR_THEME_NAME)
                    ),
                    array(
                        "type" => "textarea",
                        "heading" => __('Title', PR_THEME_NAME),
                        "param_name" => "about_title",
                        'group' => 'Left Content'
                    ),
                    array(
                        "type" => "textarea",
                        "heading" => __('Descriptions', PR_THEME_NAME),
                        "param_name" => "about_desc",
                        'group' => 'Left Content'
                    ),
                    array(
                        "type" => "textarea_html",
                        "heading" => __('Content', PR_THEME_NAME),
                        "param_name" => "content",
                        'group' => 'Right Content'                        
                    )
                )
            )
    );
}
?>
