<?php

function parallaxPrShortCode($atts, $content = null) {
    global $pallaxPromSu;        
    extract(shortcode_atts(array(
        'pr_video_url' => '',
        'pr_video_title' => 'Video Title',
        'pr_video_icon' => 'fa fa-play',
        'pr_video_description' => 'Descripton Video',
        'pr_video_images' => '',
    ), $atts));
    $pallaxPromSu = $atts;
    ob_start();
    get_template_part('core/layouts/vc-templetes/parallax_promsu/pr', 'video');
    return ob_get_clean();
}

add_shortcode('pr-parallax', 'parallaxPrShortCode');
?>
