<?php
   
    function teamPr_shortcode($atts, $content = null) {
       global $team_option, $wp_query;
         extract(shortcode_atts(array(
        'about_title' => 'Tite Team',
        'about_desc' => 'Description',
        'posts_per_page' => 10,
        ), $atts));
       //Buding array item porfolio
       $team_option = $atts;
        $args = array(
            'post_type' => 'team',
            'posts_per_page'=>$posts_per_page,
             'post_status'=>'publish',
             'order' => 'ASC',
        );
        //Query get all post type.
        $wp_query = new WP_Query($args);
        $count_post = $wp_query->post_count;
        ob_start();
         get_template_part( 'core/layouts/vc-templetes/team/meet', 'team');
        
    }

 add_shortcode('pr-team', 'teamPr_shortcode');
  if(function_exists('insert_shortcode')) { 
      insert_shortcode('pr-team', 'teamPr_shortcode');
  }
?>
