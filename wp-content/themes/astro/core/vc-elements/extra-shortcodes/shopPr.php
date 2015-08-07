<?php

add_action('vc_before_init', 'cmsblue_shop_integrateWithVC');

function cmsblue_shop_integrateWithVC() {
    vc_map(array(
        "name" => __("Shop Astro", THEMENAME),
        "base" => "cmsblue-shop",
        "class" => "cmsblue-shop",
        "category" => __('Astro', THEMENAME),
        "icon" => "of-icon-for-vc",
        "params" => array( 
            array(
              "type" => "loop",
              "heading" => __("Source",THEMENAME),
              "param_name" => "source",
              'settings' => array(
                   'post_type'=>array('value' => 'product'), 
                  'size' => array('hidden' => false, 'value' => 10),
                  'order_by' => array('value' => 'date')
              ),
              "group" => __("Source Settings", THEMENAME),
          ),
         
          array(
              "type" => "product",
              "heading" => __("Columns XS Devices",THEMENAME),
              "param_name" => "col_xs",
              "edit_field_class" => "vc_col-sm-3 vc_column",
              "value" => array(1,2,3,4,6,12),
              "std" => 1,
              "group" => __("Shop Settings", THEMENAME)
          ),
          array(
              "type" => "dropdown",
              "heading" => __("Columns SM Devices",THEMENAME),
              "param_name" => "col_sm",
              "edit_field_class" => "vc_col-sm-3 vc_column",
              "value" => array(1,2,3,4,6,12),
              "std" => 2,
              "group" => __("Shop Settings", THEMENAME)
          ),
          array(
              "type" => "dropdown",
              "heading" => __("Columns MD Devices",THEMENAME),
              "param_name" => "col_md",
              "edit_field_class" => "vc_col-sm-3 vc_column",
              "value" => array(1,2,3,4,6,12),
              "std" => 3,
              "group" => __("Shop Settings", THEMENAME)
          ),
          array(
              "type" => "dropdown",
              "heading" => __("Columns LG Devices",THEMENAME),
              "param_name" => "col_lg",
              "edit_field_class" => "vc_col-sm-3 vc_column",
              "value" => array(1,2,3,4,6,12),
              "std" => 4,
              "group" => __("Shop Settings", THEMENAME)
          ),
          array(
              "type" => "textfield",
              "heading" => __("Extra Class",THEMENAME),
              "param_name" => "class",
              "value" => "",
              "description" => __("",THEMENAME),
              "group" => __("Template", THEMENAME)
          ),
        array(
              "type" => "cms_template",
              "param_name" => "cms_template",
              "shortcode" => "cms_grid",
              "admin_label" => true,
              "heading" => __("Shortcode Template",THEMENAME),
              "group" => __("Template", THEMENAME),
          )
        )
    ));
}
