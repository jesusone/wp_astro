<?php
  vc_map( array(
        "name" => __("Astro Blog",PR_THEME_NAME),
        "base" => "cmsblue_blog",
        "class" => "",
        "category" => 'Astro',
        "icon" => "icon-blue",
        "params" => array(
            array(
               "type" => "dropdown",
               "holder" => "div",
               "class" => "",
               "heading" => __("Blog Style", PR_THEME_NAME),
               "param_name" => "blog_style",
               "value" => array(
                  "Default"=>'default',
                ),
               "description" => __("<em>Blog Style 1 only use feature image and have not sidebar. Set Sidebar in metabox of page.</em>", PR_THEME_NAME)
            ),
            array(
               "type" => "textfield",
               "holder" => "div",
               "heading" => __("Number of Post", PR_THEME_NAME),
               "param_name" => "number_posts" 
            ),
             array(
               "type" => "checkbox",
               "holder" => "div",
               "class" => "",
               "heading" => __("Category", PR_THEME_NAME),
               "param_name" => "blog_category",
               "value" => blue_get_list_taxonomy('category'),
               "description" => __("<em>Tick 'All Categories' if you want to show all Categories</em>", PR_THEME_NAME)
            ),
             array(
               "type" => "dropdown",
               "holder" => "div",
               "class" => "",
               "heading" => __("Order By", PR_THEME_NAME),
               "param_name" => "orderby",
               "value" => blue_get_list_order_by(),
               "description" => ""
            ),
             array(
               "type" => "dropdown",
               "holder" => "div",
               "class" => "",
               "heading" => __("Order", PR_THEME_NAME),
               "param_name" => "order",
               "value" => array("ASC"=>'ASC',"DESC"=>'DESC'),
               "description" => ""
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => __("Show Pagination",PR_THEME_NAME),
                "param_name" => "loadmore",
                "value" => array("No"=>'0',"Yes"=>'1'),
                "description" => __("<em>Pagination only work good when page have only one element have pagination.</em>", PR_THEME_NAME)
            ),
        )
));

?>
