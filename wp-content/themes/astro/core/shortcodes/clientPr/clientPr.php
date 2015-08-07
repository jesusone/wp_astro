<?php

function pr_clientPRShortCode($atts, $content = null) {
    global $clientPromSu; 
    print_r($clientPromSu);
    extract(shortcode_atts(array(
        'client_logo' => 'images/feature.png',
      ), $atts));
    $clientPromSu = array('clientPromSu' => $atts);
    ob_start();
    get_template_part('core/layouts/vc-templetes/client/pr', 'client');
    return ob_get_clean();
}


add_shortcode('pr-client', 'pr_clientPRShortCode');
?>
