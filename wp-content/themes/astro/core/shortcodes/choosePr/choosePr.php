<?php

function pr_choosePRShortCode($atts, $content = null) {
    global $choosePromSu;        
    extract(shortcode_atts(array(
        'choose_sub_title' => 'why',
        'choose_title' => 'CLIENT CHOOSE PROMSU?',
        'choose_desc' => '<p>Lorem ipsum dolor sit amet consectetuer felis tincidunt consectetuer Donec wisi. Laoreet senectus quis vitae congue ut quis fames justo non vel. Venenatis at aliquam wisi Nunc nulla ut id elit ac ac.</p>',
        'choose_bg_image' => 'images/feature.png'), $atts));
    $choosePromSu = array('choosePromSu' => $atts);
    ob_start();
    get_template_part('core/layouts/vc-templetes/choose_promsu/pr', 'client');
    return ob_get_clean();
}

add_shortcode('pr-choosePr', 'pr_choosePRShortCode');
?>
