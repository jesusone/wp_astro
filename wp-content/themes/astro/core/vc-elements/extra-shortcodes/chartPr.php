<?php

add_action('init', 'ChartPr_integrateWithVC');

function ChartPr_integrateWithVC() {
    vc_map(
            array(
                "name" => 'Counter Promsu',
                "base" => "pr-chart",
                "icon" => "of-icon-for-vc",
                "category" => __('Astro', PR_THEME_NAME),
                "params" => array(
                    array(
                      "type" => "textfield",
                      "heading" => __("Head small title",THEMENAME),
                      "param_name" => "head_small_title",
                      "value" => 'Happy Clients',
                      "description" => __ ( 'Enter the head small title.', THEMENAME ),
                      "group" => __("General Settings", THEMENAME)
                    ),
                    array(
                      "type" => "textfield",
                      "heading" => __("Head title",THEMENAME),
                      "param_name" => "head_title",
                      "value" => 'Some fun fact',
                      "description" => __ ( 'Enter Head title.', THEMENAME ),
                      "group" => __("General Settings", THEMENAME)
                    ),
                    array(
                      "type" => "textfield",
                      "heading" => __("Pre text",THEMENAME),
                      "param_name" => "pre_text",
                      "value" => 'Curabitur non nulla sit amet nisl tempus convallis quis lectus. Praesent sapien massa, convallis a pellen tesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt ni dictum porta',
                      "description" => __ ( 'Enter pre text.', THEMENAME ),
                      "group" => __("General Settings", THEMENAME)
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => __("Title", PR_THEME_NAME),
                        "param_name" => "ch_title1",
                        "group" => "Item one"
                    ),
                   
                    array(
                        "type" => "textfield",
                        "heading" => __("Value (%)", PR_THEME_NAME),
                        "param_name" => "ch_value1",
                        "group" => "Item one"
                    ) ,
                     array(
                        "type" => "textfield",
                        "heading" => __("Icon", PR_THEME_NAME),
                        "param_name" => "ch_icon1",
                        "group" => "Item one"
                    ) ,
                     array(
                        "type" => "textfield",
                        "heading" => __("Title", PR_THEME_NAME),
                        "param_name" => "ch_title2",
                        "group" => "Item Tow"
                    ),
                   
                    array(
                        "type" => "textfield",
                        "heading" => __("Value (%)", PR_THEME_NAME),
                        "param_name" => "ch_value2",
                        "group" => "Item Tow"
                    ) ,
                     array(
                        "type" => "textfield",
                        "heading" => __("Icon", PR_THEME_NAME),
                        "param_name" => "ch_icon2",
                        "group" => "Item Tow"
                    ) ,
                     array(
                        "type" => "textfield",
                        "heading" => __("Title", PR_THEME_NAME),
                        "param_name" => "ch_title3",
                        "group" => "Item Three"
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => __("Value (%)", PR_THEME_NAME),
                        "param_name" => "ch_value3",
                        "group" => "Item Three"
                    ),
                     array(
                        "type" => "textfield",
                        "heading" => __("Icon", PR_THEME_NAME),
                        "param_name" => "ch_icon3",
                        "group" => "Item Three"
                    ),
                     array(
                        "type" => "textfield",
                        "heading" => __("Title", PR_THEME_NAME),
                        "param_name" => "ch_title4",
                        "group" => "Item Four"
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => __("Value (%)", PR_THEME_NAME),
                        "param_name" => "ch_value4",
                        "group" => "Item Four"
                    ),
                     array(
                        "type" => "textfield",
                        "heading" => __("Icon", PR_THEME_NAME),
                        "param_name" => "ch_icon4",
                        "group" => "Item Four"
                    ) ,  
                )
            )
    );
}

?>
