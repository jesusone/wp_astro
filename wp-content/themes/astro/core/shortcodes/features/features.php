<?php
function featuresShortCode($atts, $content = null) {  
    global $features_option;
     
    $features_option = $atts;

    ob_start();
    get_template_part('core/layouts/vc-templetes/features/features', 'default');
    return ob_get_clean();
}
add_shortcode('features', 'featuresShortCode');