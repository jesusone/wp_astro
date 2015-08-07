<?php
//FUNCTION HELPER
if(!function_exists('blue_get_list_taxonomy'))
{
    function blue_get_list_taxonomy($tax='category',$array=array())
    {
        
        $taxonomies = get_terms($tax,$array);

        $r=array();

        $r[__('All Categories',PR_THEME_NAME)] = 'all';



        if(!is_wp_error($taxonomies))
        {

            foreach ($taxonomies as $key => $value) {
                # code...
                $r[$value->name]=$value->name;

            }
        }

        return $r;
    }
}
if(!function_exists('blue_get_list_order_by'))
{
    function blue_get_list_order_by()
    {
        
        return array(
            __('None',PR_THEME_NAME)=>'none',
            __('ID',PR_THEME_NAME)=>'ID',
            __('Author',PR_THEME_NAME)=>'author',
            __('Title',PR_THEME_NAME)=>'title',
            __('Name',PR_THEME_NAME)=>'name',
            __('Type',PR_THEME_NAME)=>'type',
            __('Date',PR_THEME_NAME)=>'date',
            __('Modified',PR_THEME_NAME)=>'modified',
            __('Parent',PR_THEME_NAME)=>'parent',
            __('Rand',PR_THEME_NAME)=>'rand',
            __('Comment Count',PR_THEME_NAME)=>'comment_count',
        );
    }
}

foreach (glob("".get_template_directory()."/core/vc-elements/extra-shortcodes/*.php") as $filename)
{
    include $filename;
}

if (!class_exists('WPBakeryVisualComposerAbstract')) {

    /**
     * Taxonomy checkbox list field.
     *
     */
    
  
    function pro_taxonomy_settings_fieldk($settings, $value) {
        $dependency = vc_generate_dependencies_attributes($settings);
        $terms_fields = array();
        $value_arr = $value;

        if (!is_array($value_arr)) {
            $value_arr = array_map('trim', explode(',', $value_arr));
        }

        if (!empty($settings['taxonomy'])) {
            $terms = get_terms($settings['taxonomy'], 'orderby=count&hide_empty=0');

            if ($terms && !is_wp_error($terms)) {
                foreach ($terms as $term) {
                    $terms_fields[] = sprintf(
                            '<label><input id="%s" class="%s" type="checkbox" name="%s" value="%s" %s/>%s</label>', $settings['param_name'] . '-' . $term->slug, $settings['param_name'] . ' ' . $settings['type'], $settings['param_name'], $term->term_id, checked(in_array($term->term_id, $value_arr), true, false), $term->name
                    );
                }
            }
        }

        return '<div class="pro_taxonomy_block">'
                . '<input type="hidden" name="' . $settings['param_name'] . '" class="wpb_vc_param_value wpb-checkboxes ' . $settings['param_name'] . ' ' . $settings['type'] . '_field" value="' . $value . '" ' . $dependency . ' />'
                . '<div class="pro_taxonomy_terms">'
                . implode($terms_fields)
                . '</div>'
                . '</div>';
    }

    add_shortcode_param('pro_taxonomy', 'pro_taxonomy_settings_field');
}
?>
