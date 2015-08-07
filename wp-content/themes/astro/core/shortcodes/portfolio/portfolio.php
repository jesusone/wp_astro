<?php

    function pr_portfolio_shortcode($atts, $content = null) {
         

       global $post, $wp_query, $port_option, $pagination_options;

         extract(shortcode_atts(array(
        'category' => '',
        'crop_image' => false,
        'width_image' => 255,
        'height_image' => 176,
        'show_category'=>true,
         ), $atts));

        //Seting option 
        $port_option = array(
           'show_category'=>$show_category,   
           'category'=>$category,  
           'width_image'=>$width_image,  
           'height_image'=>$height_image,  
           'category'=>$category  
        );
         //Buding array item porfolio
        $args = build_args_portfolio_item(array(
            'wp_query'=>$wp_query,
            'category'=> $category,
            'posts_per_page'=>$posts_per_page
        ));
        //Query get all post type.
        $wp_query = new WP_Query($args);
        $count_post = $wp_query->post_count;

        
        ob_start();
        wp_register_script('js-porfolio', get_template_directory_uri() . '/core/layouts/vc-templetes/portfolio/porfolio.js', 'jquery', '0.4.9'); 
        wp_enqueue_script('js-porfolio'); 
        if ($wp_query->have_posts()) {
          get_template_part( 'core/layouts/vc-templetes/portfolio/portfolio', 'grid');
            //Get item 
           
          /*  echo "<!-- Portfolio Section ========================================================= -->";
            echo "<div id='portfolio' class='bgAlter pr-portfolio-" . esc_attr($atts['type']) . "  " . esc_attr($style) . "' control-columns='" . esc_attr($columns) . "' control-type='" . esc_attr($type) . "'>";
            echo "<div class='container'>";
                echo "<div class='row'>";
                    echo "<div class='col-md-12'>";
                        echo "<!-- Section title -->";
                            echo "<div class='section-title white item_bottom text-center' style='opacity:1;bottom: 0px;' >";
                                echo "<h1>Our Awesome Works</h1>";
                                echo "<p class='section-desc'>";
                                    echo "Hire us if you like what we do, because we helps Agencies to link Business processes and People. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor felis.";
                                echo "</p>"; //End p
                            echo "</div>";  //End section-title
                        echo "<!-- End Section title -->";
                    echo "</div>";  //col-md-12
                echo "</div>";  //row
            echo "</div>"; //End container
            echo "<div class='portfolio-top'>";
            echo "</div>";
           
             get_portfolio_item(array(
            'wp_query'=>$wp_query,
            'category'=> $category,
            'posts_per_page'=>$posts_per_page,
            'layout'=>$layout
        ));
            
            echo "</div>";
            echo "<!-- End Portfolio Section ========================================================= -->";
                     */
       /*  get_portfolio_item(array(
            'wp_query'=>$wp_query,
            'category'=> $category,
            'posts_per_page'=>$posts_per_page,
            ));  */
        }
        else {
             echo "<span class='pr-notfound'>No portfolio found!</span>";
        }
        
    }

    add_shortcode('pr-portfolio', 'pr_portfolio_shortcode');
  if(function_exists('insert_shortcode')) { 
       
      insert_shortcode('pr-portfolio', 'pr_portfolio_shortcode');
  }
  // Get portfolio item
  function get_portfolio_item($dataAttr){
    extract($dataAttr);
    if($wp_query->have_posts()){
          echo "<section id='options'>";
            echo "<ul id='filters' data-option-key='filter'>";
                echo "<li><a href='#' data-filter='*' class='selected active'>View All</a></li>" ;
                 $cats = explode(',', $category);
              // $category = $term_cats = array();  
                foreach ((array) $cats as $cat) {
                   // $category[] = trim($cat);
                    $term_cats = get_term($cat, 'portfolio_category');
                     echo "<li><a href='#' data-filter='.".$term_cats->slug."'>".$term_cats->name."</a></li>" ;  

                
                }
               echo "</ul>";
            echo "</section>";
              echo "<section id='portfolio-wrapper'>";
              
        while ($wp_query->have_posts()) {
            $wp_query->the_post();
            $terms = get_the_terms($wp_query->post->ID, "portfolio_category");
            
            $project_cats = NULL;
            $project_names = array();
            if (!empty($terms)) {
                foreach ($terms as $term) {
                    $project_cats .= strtolower($term->slug) . ' ';
                    $project_names[] = $term->name;
                }
            }

               
         
                $_id = get_the_ID();
                get_template_part( 'core/layouts/vc-templetes/portfolio/portfolio', 'grid');
               
             }
    }
     
            echo "</section>"; 
}
  //Function build args portfolio item
  function build_args_portfolio_item($dataAttr){
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
?>
