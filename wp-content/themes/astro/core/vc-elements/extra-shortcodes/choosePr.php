<?php

add_action('init', 'choosePromSu_integrateWithVC');

function choosePromSu_integrateWithVC() {
    vc_map(
            array(
                "name" => 'CLIENT CHOOSE PROMSU',
                "base" => "pr-choosePr",
                "icon" => "of-icon-for-vc",
                "category" => __('Promsu', PR_THEME_NAME),
                "params" => array(
                    array(
                        "type" => "textfield",
                        "heading" => __("Sub Title", PR_THEME_NAME),
                        "param_name" => "choose_sub_title"
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => __("Title", PR_THEME_NAME),
                        "param_name" => "choose_title"
                    ),
                    array(
                        "type" => "textarea_html",
                        "heading" => __('Descriptions', PR_THEME_NAME),
                        "param_name" => "choose_desc"
                    ),
                    array(
                        "type" => "attach_image",
                        "heading" => __("Background Image", PR_THEME_NAME),
                        "param_name" => "choose_bg_image",
                        'group' => 'Image'
                    ),
                    array(
                        "type" => "attach_image",
                        "heading" => __("Feature Image", PR_THEME_NAME),
                        "param_name" => "choose_feature_image",
                        'group' => 'Image'
                    ),
                    array(
                        "type" => "attach_image",
                        "heading" => __("Icon Image", PR_THEME_NAME),
                        "param_name" => "choose_item1_icon",
                        'group' => 'Item One'
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => __('Cap', PR_THEME_NAME),
                        "param_name" => "choose_item1_cap",
                        'group' => 'Item One'
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => __('Title', PR_THEME_NAME),
                        "param_name" => "choose_item1_title",
                        'group' => 'Item One'
                    ),                    
                    array(
                        "type" => "textarea",
                        "heading" => __('Descriptions', PR_THEME_NAME),
                        "param_name" => "choose_item1_desc",
                        'group' => 'Item One'
                    ),
                    array(
                        "type" => "attach_image",
                        "heading" => __("Icon Image", PR_THEME_NAME),
                        "param_name" => "choose_item2_icon",
                        'group' => 'Item Two'
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => __('Cap', PR_THEME_NAME),
                        "param_name" => "choose_item2_cap",
                        'group' => 'Item Two'
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => __('Title', PR_THEME_NAME),
                        "param_name" => "choose_item2_title",
                        'group' => 'Item Two'
                    ),
                    array(
                        "type" => "textarea",
                        "heading" => __('Descriptions', PR_THEME_NAME),
                        "param_name" => "choose_item2_desc",                       
                        'group' => 'Item Two'
                    ),
                    array(
                        "type" => "attach_image",
                        "heading" => __("Icon Image", PR_THEME_NAME),
                        "param_name" => "choose_item3_icon",
                        "value" => "",
                        'group' => 'Item Three'
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => __('Cap', PR_THEME_NAME),
                        "param_name" => "choose_item3_cap",
                        'group' => 'Item Three'
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => __('Title', PR_THEME_NAME),
                        "param_name" => "choose_item3_title",
                        'group' => 'Item Three'
                    ),
                    array(
                        "type" => "textarea",
                        "heading" => __('Descriptions', PR_THEME_NAME),
                        "param_name" => "choose_item3_desc",
                        'group' => 'Item Three'
                    ),
                    array(
                        "type" => "attach_image",
                        "heading" => __("Icon Image", PR_THEME_NAME),
                        "param_name" => "choose_item4_icon",
                        'group' => 'Item Four'
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => __('cap', PR_THEME_NAME),
                        "param_name" => "choose_item4_cap",
                        'group' => 'Item Four'
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => __('Title', PR_THEME_NAME),
                        "param_name" => "choose_item4_title",
                        'group' => 'Item Four'
                    ),
                    array(
                        "type" => "textarea",
                        "heading" => __('Descriptions', PR_THEME_NAME),
                        "param_name" => "choose_item4_desc",
                        'group' => 'Item Four'
                    )
                )
            )
    );
}

?>
