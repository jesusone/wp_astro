<?php
add_action('init', 'pofolio_integrateWithVC');
function pofolio_integrateWithVC(){
vc_map ( array (
        "name" => 'Portfolio',
        "base" => "pr-portfolio",
        "icon" => "of-icon-for-vc",
        "category" => __ ( 'Promsu', PR_THEME_NAME ),
        'admin_enqueue_js' => array(PR_ADMIN_URI.'assets/js/visual-setting.js'),
        "params" => array (
                array (
                        "type" => "pro_taxonomy",
                        "taxonomy" => "portfolio_category",
                        "heading" => __ ( "Categories", PR_THEME_NAME ),
                        "param_name" => "category",
                        "description" => __ ( "Select categories show portfolio.", PR_THEME_NAME )
                ),
                array (
                        "type" => "checkbox",
                        "heading" => __ ( 'Crop image', PR_THEME_NAME ),
                        "param_name" => "crop_image",
                        "value" => array (
                                __ ( "Yes, please", PR_THEME_NAME ) => true
                        ),
                        "description" => __ ( 'Crop or not crop image on your Portfolio.', PR_THEME_NAME )
                ),
                array (
                        "type" => "textfield",
                        "heading" => __ ( 'Width image', PR_THEME_NAME ),
                        "param_name" => "width_image",
                        "description" => __ ( 'Enter the width of image crop. Default: 300.', PR_THEME_NAME )
                ),
                array (
                        "type" => "textfield",
                        "heading" => __ ( 'Height image', PR_THEME_NAME ),
                        "param_name" => "height_image",
                        "description" => __ ( 'Enter the height of image crop. Default: 200.', PR_THEME_NAME )
                ),
                array (
                        "type" => "checkbox",
                        "heading" => __ ( 'Filter', PR_THEME_NAME ),
                        "param_name" => "filter",
                        "value" => array (
                                __ ( "Yes, please", "js_composer" ) => "true"
                        ),
                        "description" => __ ( 'Would you like your portfolio items to be filter?', PR_THEME_NAME )
                ),
                array (
                        "type" => "checkbox",
                        "heading" => __ ( 'Show title', PR_THEME_NAME ),
                        "param_name" => "show_title",
                        "value" => array (
                                __ ( "Yes, please", "js_composer" ) => "true"
                        ),
                        "description" => __ ( 'Show or hide title on your Portfolio.', PR_THEME_NAME )
                ),
                array (
                        "type" => "checkbox",
                        "heading" => __ ( 'Show category', PR_THEME_NAME ),
                        "param_name" => "show_category",
                        "value" => array (
                                __ ( "Yes, please", "js_composer" ) => "true"
                        ),
                        "description" => __ ( 'Show or hide category on your Portfolio.', PR_THEME_NAME )
                ),
                array (
                        "type" => "checkbox",
                        "heading" => __ ( 'Show description', PR_THEME_NAME ),
                        "param_name" => "show_description",
                        "value" => array (
                                __ ( "Yes, please", "js_composer" ) => "true"
                        ),
                        "description" => __ ( 'Show or hide description on your Portfolio.', PR_THEME_NAME )
                ),
                array (
                        "type" => "textfield",
                        "heading" => __ ( 'Number of posts to show per page', PR_THEME_NAME ),
                        "param_name" => "posts_per_page",
                        'value' => '12',
                        "description" => __ ( 'The number of posts to display on each page. Set to "-1" for display all posts on the page.', PR_THEME_NAME )
                ),
                array (
                        "type" => "textfield",
                        "heading" => __ ( 'Max of posts to show per page', PR_THEME_NAME ),
                        "param_name" => "max_posts_per_page",
                        'value' => '',
                        "description" => __ ( 'The number of posts load more on each page. Set to "-1" for display all posts on the page or empty not load more.', PR_THEME_NAME )
                ),
              
                array (
                        "type" => "dropdown",
                        "heading" => __ ( 'Order by', PR_THEME_NAME ),
                        "param_name" => "orderby",
                        "value" => array (
                                "None" => "none",
                                "Title" => "title",
                                "Date" => "date",
                                "ID" => "ID"
                        ),
                        "description" => __ ( 'Order by ("none", "title", "date", "ID").', PR_THEME_NAME )
                ),
                array (
                        "type" => "dropdown",
                        "heading" => __ ( 'Order', PR_THEME_NAME ),
                        "param_name" => "order",
                        "value" => Array (
                                "None" => "none",
                                "ASC" => "ASC",
                                "DESC" => "DESC"
                        ),
                        "description" => __ ( 'Order ("None", "Asc", "Desc").', PR_THEME_NAME )
                )
        )
) ); 
}
?>
