<?php

function featurePrShortCode($atts, $content = null) {
    
    //var_dump ($atts);
    global $featurePromSu;        
    extract(shortcode_atts(array(
         'fi_title' => 'New Title',
         'fi_value_button' => 'Purchase',
         'fi_link_option' => '#',
         'fi_description' => 'No Content',
         'fi_image' => '#',
       
    ), $atts));
    $featurePromSu = array('featurePr' => $atts);
    ob_start();
    get_template_part('core/layouts/vc-templetes/feature-promsu/pr', 'feature');
    return ob_get_clean();
}

add_shortcode('pr-feature', 'featurePrShortCode');
?>
