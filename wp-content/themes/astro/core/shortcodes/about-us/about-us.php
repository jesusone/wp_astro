<?php

function pr_aboutUsShortCode($atts, $content = null) {
    global $aboutUs, $abouts, $aboutContent;
//    extract(shortcode_atts(array(
//        'choose_sub_title' => 'why',
//        'choose_title' => 'CLIENT CHOOSE PROMSU?',
//        'choose_desc' => '<p>Lorem ipsum dolor sit amet consectetuer felis tincidunt consectetuer Donec wisi. Laoreet senectus quis vitae congue ut quis fames justo non vel. Venenatis at aliquam wisi Nunc nulla ut id elit ac ac.</p>',
//        'choose_bg_image' => 'images/feature.png'), $atts));
    $aboutUs = array('AboutUs' => $atts);
    if (isset($aboutUs['AboutUs']['categories'])) {
        $cats = explode(',', trim($aboutUs['AboutUs']['categories']));
        if (is_array($cats)) {
            foreach ($cats as $value) {
                $args = 'cat=' . $value . '&orderby=date&order=ASC';
                $abouts[$value] = query_posts($args);
            }
        }
    }   
    $aboutContent = $atts;
    $aboutContent = array_merge($aboutContent,array('content' => $content));    
    ob_start();
    get_template_part('core/layouts/vc-templetes/about-us/about-us', 'one');
    return ob_get_clean();
}

add_shortcode('pr-about-us', 'pr_aboutUsShortCode');
?>
