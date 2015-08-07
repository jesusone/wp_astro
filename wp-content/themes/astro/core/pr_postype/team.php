<?php

#-----------------------------------------------------------------#
# Register team admin
#-----------------------------------------------------------------# 
add_action('init', 'pr_post_type_team');

function pr_post_type_team() {

    $attr = array(
        'labels' => array(
            'name' => __('Team', PR_THEME_NAME),
            'singular_name' => __('Team', PR_THEME_NAME),
            'all_items' => __('All Team', PR_THEME_NAME),
            'edit_item' => __('Edit Team', PR_THEME_NAME),
            'update_item' => __('Update Team', PR_THEME_NAME),
            'not_found' => __('No team found', PR_THEME_NAME)
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => $data['team_slug']),
        'supports' => array('title', 'editor', 'thumbnail', 'comments'),
        'can_export' => true,
        'menu_position' => 9
    );
    register_post_type('team', $attr);
    register_taxonomy('team_category', 'team', array('hierarchical' => true, 'label' => __('Team Categories', PR_THEME_NAME), 'query_var' => true, 'rewrite' => true));
}
