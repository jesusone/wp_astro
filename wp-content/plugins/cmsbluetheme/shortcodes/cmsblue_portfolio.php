<?php
/* Create VC Map*/
vc_map ( array (
        "name" => 'Portfolio Cmsblue',
        "base" => "cmsblue_portfolio",
        "icon" => "of-icon-for-vc",
        "category" => __ ( 'Astro', CMSBLUE_NAME ),
        'admin_enqueue_js' => array(PR_ADMIN_URI.'assets/js/visual-setting.js'),
        "params" => array (
                array (
                        "type" => "pro_taxonomy",
                        "taxonomy" => "portfolio_category",
                        "heading" => __ ( "Categories", CMSBLUE_NAME ),
                        "param_name" => "category",
                        "description" => __ ( "Select categories show portfolio.", CMSBLUE_NAME )
                ),
                array (
                        "type" => "checkbox",
                        "heading" => __ ( 'Crop image', CMSBLUE_NAME ),
                        "param_name" => "crop_image",
                        "value" => array (
                                __ ( "Yes, please", CMSBLUE_NAME ) => true
                        ),
                        "description" => __ ( 'Crop or not crop image on your Portfolio.', CMSBLUE_NAME )
                ),
                array (
                        "type" => "textfield",
                        "heading" => __ ( 'Width image', CMSBLUE_NAME ),
                        "param_name" => "width_image",
                        "description" => __ ( 'Enter the width of image crop. Default: 300.', CMSBLUE_NAME )
                ),
                 array (
                        "type" => "textfield",
                        "heading" => __ ( 'Height image', CMSBLUE_NAME ),
                        "param_name" => "height_image",
                        "description" => __ ( 'Enter the height of image crop. Default: 200.', CMSBLUE_NAME )
                ),
                array (
                        "type" => "checkbox",
                        "heading" => __ ( 'Filter', CMSBLUE_NAME ),
                        "param_name" => "filter",
                        "value" => array (
                                __ ( "Yes, please", "js_composer" ) => "true"
                        ),
                        "description" => __ ( 'Would you like your portfolio items to be filter?', CMSBLUE_NAME )
                ),
                array (
                        "type" => "checkbox",
                        "heading" => __ ( 'Show title', CMSBLUE_NAME ),
                        "param_name" => "show_title",
                        "value" => array (
                                __ ( "Yes, please", "js_composer" ) => "true"
                        ),
                        "description" => __ ( 'Show or hide title on your Portfolio.', CMSBLUE_NAME )
                ),
                array (
                        "type" => "checkbox",
                        "heading" => __ ( 'Show category', CMSBLUE_NAME ),
                        "param_name" => "show_category",
                        "value" => array (
                                __ ( "Yes, please", "js_composer" ) => "true"
                        ),
                        "description" => __ ( 'Show or hide category on your Portfolio.', CMSBLUE_NAME )
                ),
                array (
                        "type" => "checkbox",
                        "heading" => __ ( 'Show description', CMSBLUE_NAME ),
                        "param_name" => "show_description",
                        "value" => array (
                                __ ( "Yes, please", "js_composer" ) => "true"
                        ),
                        "description" => __ ( 'Show or hide description on your Portfolio.', CMSBLUE_NAME )
                ),
                array (
                        "type" => "textfield",
                        "heading" => __ ( 'Number of posts to show per page', CMSBLUE_NAME ),
                        "param_name" => "posts_per_page",
                        'value' => '12',
                        "description" => __ ( 'The number of posts to display on each page. Set to "-1" for display all posts on the page.', CMSBLUE_NAME )
                ),
                array (
                        "type" => "textfield",
                        "heading" => __ ( 'Max of posts to show per page', CMSBLUE_NAME ),
                        "param_name" => "max_posts_per_page",
                        'value' => '',
                        "description" => __ ( 'The number of posts load more on each page. Set to "-1" for display all posts on the page or empty not load more.', CMSBLUE_NAME )
                ),
              
                array (
                        "type" => "dropdown",
                        "heading" => __ ( 'Order by', CMSBLUE_NAME ),
                        "param_name" => "orderby",
                        "value" => array (
                                "None" => "none",
                                "Title" => "title",
                                "Date" => "date",
                                "ID" => "ID"
                        ),
                        "description" => __ ( 'Order by ("none", "title", "date", "ID").', CMSBLUE_NAME )
                ),
                array (
                        "type" => "dropdown",
                        "heading" => __ ( 'Order', CMSBLUE_NAME ),
                        "param_name" => "order",
                        "value" => Array (
                                "None" => "none",
                                "ASC" => "ASC",
                                "DESC" => "DESC"
                        ),
                        "description" => __ ( 'Order ("None", "Asc", "Desc").', CMSBLUE_NAME )
                ),
                array(
                  "type" => "cmsblue_template",
                  "param_name" => "cmsblue_template",
                  "shortcode" => "cmsblue_portfolio",
                  "admin_label" => true,
                  "heading" => __("Shortcode Template",CMSBLUE_NAME),
                  "group" => __("Template", CMSBLUE_NAME),
              )
        )
) ); 
class WPBakeryShortCode_cmsblue_portfolio extends CmsBlueShortCode {
    protected function content($atts, $content = null){
        global $post, $wp_query, $port_option, $pagination_options;
       $atts_extra = shortcode_atts(array(
        'category' => '',
        'crop_image' => false,
        'width_image' => 255,
        'height_image' => 176,
        'show_category'=>true,
        ), $atts); 
        $atts = array_merge($atts_extra,$atts);
        extract($atts);
        $port_option = array(
           'show_category'=>$show_category,   
           'category'=>$category,  
           'width_image'=>$width_image,  
           'height_image'=>$height_image,  
           'category'=>$category  
        );
        //Buding array item porfolio
        $args = $this->build_args_portfolio_item(array(
            'wp_query'=>$wp_query,
            'category'=> $category,
            'posts_per_page'=>$posts_per_page
        ));
        //Query get all post type.
        $wp_query = new WP_Query($args);
        $count_post = $wp_query->post_count;
        $atts['template'] = 'template-'.str_replace('.php','',$atts['cmsblue_template']). ' content-align-' . $atts['content_align'] . ' '. $atts['class'];
        wp_enqueue_script('js-porfolio');  
        return parent::content($atts, $content);
        
        
    }
    //Function build args portfolio item
   public function build_args_portfolio_item($dataAttr){
      extract($dataAttr);
      //Have category           
        if (isset($category) && $category != '') {
               $cats = explode(',', $category);
               $category = $term_cats = array();  
                foreach ((array) $cats as $cat) :
                    $category[] = trim($cat);
                    $term_cats[] = get_term($cat, 'portfolio_category');
                endforeach;
                $args = array(
                    'posts_per_page' => $posts_per_page,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'portfolio_category',
                            'field' => 'id',
                            'terms' => $category
                        )
                    ),
                    'orderby' => $orderby,
                    'order' => null,
                    'post_type' => 'portfolio',
                    'post_status' => 'publish',
                    'paged' => $paged
                );
        }
        else {
             $args = array(
                'posts_per_page' => $posts_per_page,
                'orderby' => $orderby,
                'order' => null,
                'post_type' => 'portfolio',
                'post_status' => 'publish',
                'paged' => $paged
            );
        }
        return $args;
  }
}
?>
