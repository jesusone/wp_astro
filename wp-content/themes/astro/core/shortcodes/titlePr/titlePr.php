<?php
   
    function titlePr_shortcode($atts, $content = null) {
       global $title_option;
         extract(shortcode_atts(array(
        'pr_small_title' => 'Small title',
        'pr_title' => 'Enter Tite',
        'pr_description' => 'Enter Description',
        'layout' => 'layout1',
        ), $atts));
       //Buding array item porfolio
       $title_option = $atts;
        ob_start();
        get_template_part('core/layouts/vc-templetes/title/title', $layout);
         return ob_get_clean();
       
    }

 add_shortcode('pr-title', 'titlePr_shortcode');
  if(function_exists('insert_shortcode')) { 
      insert_shortcode('pr-title', 'titlePr_shortcode');
  }
?>
