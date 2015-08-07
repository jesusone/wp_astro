<?php

add_action('init', 'prClient_integrateWithVC');

function prClient_integrateWithVC(){
    vc_map(
            array(
                "name" => 'Promsu Client',
                "base" => "pr-client",
                "icon" => "of-icon-for-vc",
                "category" => __('Promsu', PR_THEME_NAME),
                "params" => array(
                    array(
                        "type" => "attach_images",
                        "heading" => __('Client Logo', PR_THEME_NAME),
                        "param_name" => "client_logo",
                    )
                )
            )
    );
}
?>
