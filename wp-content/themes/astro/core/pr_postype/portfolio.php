<?php
#-----------------------------------------------------------------#
# Register portfolio admin
#-----------------------------------------------------------------# 
add_action('init', 'pr_post_type_portfolio');
function  pr_post_type_portfolio()
{   
     
    $attr = array(
            'labels' => array(
                'name' => __('Portfolio',PR_THEME_NAME),
                'singular_name' => __('Portfolio',PR_THEME_NAME),
                'all_items' => __('All Portfolio', PR_THEME_NAME),
                'edit_item' => __('Edit Portfolio', PR_THEME_NAME),
                'update_item' => __('Update Portfolio', PR_THEME_NAME),
                'not_found' => __('No portfolio found', PR_THEME_NAME)
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => $data['portfolio_slug']),
            'supports' => array('title', 'editor', 'thumbnail','comments'),
            'can_export' => true,
            'menu_position' => 9
           
    );
    register_post_type('portfolio',$attr);
    register_taxonomy('portfolio_category', 'portfolio', array('hierarchical' => true, 'label' => __('Portfolio Categories', PR_THEME_NAME), 'query_var' => true, 'rewrite' => true));
}
