<?php
function pr_pricingShortCode($atts, $content = null) {
    global $pricingPromSu;
    extract(shortcode_atts(array(
        'pr_title1' => 'Title 1',
        'pr_price1' => 0.00,
        'pr_disk1' => 100 ,
        'pr_domains1' => 5,
        'pr_subdomains1' => 5,
        'pr_addon_domain1' =>10,
        'pr_link1' =>'#',
        'pr_support1' => '24/7',
        'pr_featured' =>'2'
      ), $atts));
      $pricingPromSu = $atts;
     
    ob_start();
    get_template_part('core/layouts/vc-templetes/pricing/pr', 'pricing');
    return ob_get_clean();
}

add_shortcode('pr-pricing', 'pr_pricingShortCode');
