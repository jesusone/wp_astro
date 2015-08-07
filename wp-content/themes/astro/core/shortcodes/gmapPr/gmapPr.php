<?php
   
    function gmapPr_shortcode($atts, $content = null) {
       global $gmap_setting;
         extract(shortcode_atts(array(
        'pr_lat' => '43.04446',
        'pr_lng' => '-76.130791',
        ), $atts));
        $gmap_setting = $atts;
        wp_register_script('js-googleapis', 'https://maps.googleapis.com/maps/api/js?sensor=false', 'jquery');
        wp_register_script('js-gmap', get_template_directory_uri() . '/assets/js/gmaps.js', 'jquery', '0.4.9'); 
        wp_register_script('cmsbluegmap', get_template_directory_uri() . '/core/layouts/vc-templetes/gmap/cmsbluegmap.js', 'jquery', '0.4.9'); 
       wp_enqueue_script('js-googleapis'); 
       wp_enqueue_script('js-gmap'); 
       wp_enqueue_script('cmsbluegmap'); 
       ob_start();
       get_template_part('core/layouts/vc-templetes/gmap/gmap');
       return ob_get_clean();
    }

 add_shortcode('pr-cmsblue-gmap', 'gmapPr_shortcode');
  if(function_exists('insert_shortcode')) { 
      insert_shortcode('pr-cmsblue-gmap', 'gmapPr_shortcode');
  }
?>
