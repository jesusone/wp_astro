<?php

add_action('init', 'pricingPr_integrateWithVC');

function pricingPr_integrateWithVC() {
    vc_map(
            array(
                "name" => 'Pricing Astro',
                "base" => "pr-pricing",
                "icon" => "of-icon-for-vc",
                "category" => __('Astro', PR_THEME_NAME),
                "params" => array(
                      array(
                        "type" => "dropdown",
                        "heading" => __("Featured ?", PR_THEME_NAME),
                        "param_name" => "pr_featured",
                         "value" => array(1,2,3,4)
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => __("Title", PR_THEME_NAME),
                        "param_name" => "pr_title1",
                        "group" => "Item One"
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => __("Price", PR_THEME_NAME),
                        "param_name" => "pr_price1",
                        "group" => "Item One"
                    ) ,
                    array(
                        "type" => "textfield",
                        "heading" => __("Domain Names", PR_THEME_NAME),
                        "param_name" => "pr_domains1",
                        "group" => "Item One"
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => __("Dedicated Ram", PR_THEME_NAME),
                        "param_name" => "pr_disk1",
                        "group" => "Item One"
                    ) ,
                    array(
                        "type" => "textfield",
                        "heading" => __("Subdomains", PR_THEME_NAME),
                        "param_name" => "pr_subdomains1",
                        "group" => "Item One"
                    ),
                     
                    array(
                        "type" => "textfield",
                        "heading" => __("Addon Domain", PR_THEME_NAME),
                        "param_name" => "pr_addon_domain1",
                        "group" => "Item One"
                    ),
                   
                    array(
                        "type" => "textfield",
                        "heading" => __("Support", PR_THEME_NAME),
                        "param_name" => "pr_support1",
                        "group" => "Item One"
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => __("Link", PR_THEME_NAME),
                        "param_name" => "pr_link1",
                        "group" => "Item One"
                    ),
                  
                     array(
                        "type" => "textfield",
                        "heading" => __("Title", PR_THEME_NAME),
                        "param_name" => "pr_title2",
                        "group" => "Item Tow"
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => __("Price", PR_THEME_NAME),
                        "param_name" => "pr_price2",
                        "group" => "Item Tow"
                    ) ,
                    array(
                        "type" => "textfield",
                        "heading" => __("Domain Names", PR_THEME_NAME),
                        "param_name" => "pr_domains2",
                        "group" => "Item Tow"
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => __("Dedicated Ram", PR_THEME_NAME),
                        "param_name" => "pr_disk2",
                        "group" => "Item Tow"
                    ) ,
                    array(
                        "type" => "textfield",
                        "heading" => __("Subdomains", PR_THEME_NAME),
                        "param_name" => "pr_subdomains2",
                        "group" => "Item Tow"
                    ),
                     
                    array(
                        "type" => "textfield",
                        "heading" => __("Addon Domain", PR_THEME_NAME),
                        "param_name" => "pr_addon_domain2",
                        "group" => "Item Tow"
                    ),
                   
                    array(
                        "type" => "textfield",
                        "heading" => __("Support", PR_THEME_NAME),
                        "param_name" => "pr_support2",
                        "group" => "Item Tow"
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => __("Link", PR_THEME_NAME),
                        "param_name" => "pr_link2",
                        "group" => "Item Tow"
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => __("Title", PR_THEME_NAME),
                        "param_name" => "pr_title3",
                        "group" => "Item Three"
                    ),
                     array(
                        "type" => "textfield",
                        "heading" => __("Price", PR_THEME_NAME),
                        "param_name" => "pr_price3",
                        "group" => "Item Three"
                    ) ,
                    array(
                        "type" => "textfield",
                        "heading" => __("Domain Names", PR_THEME_NAME),
                        "param_name" => "pr_domains3",
                        "group" => "Item Three"
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => __("Dedicated Ram", PR_THEME_NAME),
                        "param_name" => "pr_disk3",
                        "group" => "Item Three"
                    ) ,
                    array(
                        "type" => "textfield",
                        "heading" => __("Subdomains", PR_THEME_NAME),
                        "param_name" => "pr_subdomains3",
                        "group" => "Item Three"
                    ),
                     
                    array(
                        "type" => "textfield",
                        "heading" => __("Addon Domain", PR_THEME_NAME),
                        "param_name" => "pr_addon_domain3",
                        "group" => "Item Three"
                    ),
                   
                    array(
                        "type" => "textfield",
                        "heading" => __("Support", PR_THEME_NAME),
                        "param_name" => "pr_support3",
                        "group" => "Item Three"
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => __("Link", PR_THEME_NAME),
                        "param_name" => "pr_link3",
                        "group" => "Item Three"
                    ),
                     array(
                        "type" => "textfield",
                        "heading" => __("Title", PR_THEME_NAME),
                        "param_name" => "pr_title4",
                        "group" => "Item Four"
                    ),
                     array(
                        "type" => "textfield",
                        "heading" => __("Price", PR_THEME_NAME),
                        "param_name" => "pr_price4",
                        "group" => "Item Four"
                    ) ,
                    array(
                        "type" => "textfield",
                        "heading" => __("Domain Names", PR_THEME_NAME),
                        "param_name" => "pr_domains4",
                        "group" => "Item Four"
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => __("Dedicated Ram", PR_THEME_NAME),
                        "param_name" => "pr_disk4",
                        "group" => "Item Four"
                    ) ,
                    array(
                        "type" => "textfield",
                        "heading" => __("Subdomains", PR_THEME_NAME),
                        "param_name" => "pr_subdomains4",
                        "group" => "Item Four"
                    ),
                     
                    array(
                        "type" => "textfield",
                        "heading" => __("Addon Domain", PR_THEME_NAME),
                        "param_name" => "pr_addon_domain4",
                        "group" => "Item Four"
                    ),
                   
                    array(
                        "type" => "textfield",
                        "heading" => __("Support", PR_THEME_NAME),
                        "param_name" => "pr_support4",
                        "group" => "Item Four"
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => __("Link", PR_THEME_NAME),
                        "param_name" => "pr_link4",
                        "group" => "Item Four"
                    )
                )
            )
    );
}

?>
