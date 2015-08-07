<?php
   
    function contactPr_shortcode($atts, $content = null) {
       global $contacPr;
         extract(shortcode_atts(array(
        'con_title' => 'Tite Team',
        'con_desc' => 'Description',
        ), $atts));
        $contacPr =  $atts;
        ob_start();
         get_template_part( 'core/layouts/vc-templetes/contact/pr', 'contact');
        
    }

 add_shortcode('pr-contact', 'contactPr_shortcode');
  if(function_exists('insert_shortcode')) { 
      insert_shortcode('pr-contacts', 'contactPr_shortcode');
  }
?>
