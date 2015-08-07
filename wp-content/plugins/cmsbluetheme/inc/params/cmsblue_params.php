<?php
 /*
 * Taxonomy checkbox list field
 */

function pro_taxonomy_settings_field($settings, $value) {
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
                        '<label><input onclick="changeCategory(this);" id="%s" class="ww-check-taxonomy %s" type="checkbox" name="%s" value="%s" %s/>%s</label>', $settings['param_name'] . '-' . $term->slug, $settings['param_name'] . ' ' . $settings['type'], $settings['param_name'], $term->term_id, checked(in_array($term->term_id, $value_arr), true, false), $term->name
                );
            }
        }
    }

    return '<div class="ww-taxonomy-block">'
            . '<input type="hidden" name="' . $settings['param_name'] . '" class="wpb_vc_param_value wpb-checkboxes ' . $settings['param_name'] . ' ' . $settings['type'] . '_field" value="' . $value . '" ' . $dependency . ' />'
            . '<div class="ww-taxonomy-terms">'
            . implode($terms_fields)
            . '</div>'
            . '</div>';
}

add_extra_field('pro_taxonomy', 'pro_taxonomy_settings_field');

function pro_category($settings, $value) {
    $dependency = vc_generate_dependencies_attributes($settings);
    $terms_fields = array();
    $value_arr = $value;

    if (!is_array($value_arr)) {
        $value_arr = array_map('trim', explode(',', $value_arr));
    }
    $args = array(
        'type' => 'post',
        'child_of' => 0,
        'parent' => '',
        'orderby' => 'name',
        'order' => 'ASC',
        'hide_empty' => 1,
        'hierarchical' => 1,
        'exclude' => '',
        'include' => '',
        'number' => '',
        'taxonomy' => 'category',
        'pad_counts' => false
    );
    $cats = get_categories($args);
    if ($cats && !is_wp_error($cats)) {
        foreach ($cats as $term) {
            $terms_fields[] = sprintf('<label><input onclick="changeCategory(this);" id="%s" class="ww-check-taxonomy %s" type="checkbox" name="%s" value="%s" %s/>%s</label>', $settings['param_name'] . '-' . $term->slug, $settings['param_name'] . ' ' . $settings['type'], $settings['param_name'], $term->term_id, checked(in_array($term->term_id, $value_arr), true, false), $term->name
            );
        }
    }
    return '<div class="ww-taxonomy-block">'
            . '<input type="hidden" name="' . $settings ['param_name'] . '" class="wpb_vc_param_value wpb-checkboxes ' . $settings['param_name'] . ' ' . $settings['type'] . '_field" value="' . $value . '" ' . $dependency . ' />'
            . '<div class="ww-taxonomy-terms">'
            . implode($terms_fields)
            . '</div>'
            . '</div>';
}
add_extra_field('pro_category', 'pro_category');
add_shortcode_param('cmsblue_template', 'cmsblue_shortcode_template');          
function cmsblue_shortcode_template($settings, $value) {
    $shortcode = $settings['shortcode'];
    $theme_dir = get_template_directory() . '/core/layouts/vc_templates';
    $reg = "/^({$shortcode}\.php|{$shortcode}--.*\.php)/";
    $files = cmsblueFileScanDirectory($theme_dir, $reg);
    $files = array_merge(cmsblueFileScanDirectory(CMSBLUE_TEMPLATES, $reg), $files);
    $output = "";
    $output .= "<select name=\"" . esc_attr($settings['param_name']) . "\" class=\"wpb_vc_param_value\">";
    foreach ($files as $key => $file) {
        if ($key == esc_attr($value)) {
            $output .= "<option value=\"{$key}\" selected>{$key}</option>";
        } else {
            $output .= "<option value=\"{$key}\">{$key}</option>";
        }
    }
    $output .= "</select>";
    $script = <<<SCRIPT
    <script type="text/javascript">
        jQuery('button.vc_panel-btn-save[data-save=true]').click(function(){
            jQuery('.cms_custom_param.vc_dependent-hidden').remove();
        });
    </script>
SCRIPT;
    return $output.$script;
}
?>
