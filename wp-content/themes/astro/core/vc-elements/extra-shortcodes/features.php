<?php
add_action('init', 'features_integrateWithVC');
function features_integrateWithVC(){
vc_map ( array (
	"name" => 'Features',
	"base" => "features",
	"icon" => "cs_icon_for_vc",
	"category" => __ ( 'Astro', THEMENAME ),
	"description" => __ ('Icon Boxes',THEMENAME),
	"params" => array (
      
        array (
                "type" => "dropdown",
                "heading" => __ ( 'Show Title Small', THEMENAME ),
                "param_name" => "show_title_small",
                "value" => array (
                        "Yes" => "1",
                        "No" => "0"
                ),
                "description" => __ ( 'Show or hide title small.', THEMENAME )
        ),
        array (
                "type" => "dropdown",
                "heading" => __ ( 'Show Detail Title Small', THEMENAME ),
                "param_name" => "show_detail_title_small",
                "value" => array (
                        "Yes" => "1",
                        "No" => "0"
                ),
                "description" => __ ( 'Show or hide title small.', THEMENAME )
        ),
        array (
                "type" => "dropdown",
                "heading" => __ ( 'Show Detail content', THEMENAME ),
                "param_name" => "show_detail_content",
                "value" => array (
                        "Yes" => "1",
                        "No" => "0"
                ),
                "description" => __ ( 'Show or hide Detail content.', THEMENAME )
        ),
		array (
                "type" => "dropdown",
                "heading" => __ ( 'Show readmore', THEMENAME ),
                "param_name" => "show_readmore",
                "value" => array (
                        "Yes" => "1",
                        "No" => "0"
                ),
                "description" => __ ( 'Show or hide Readmore.', THEMENAME )
        ),
        array (
				"type" => "textfield",
				"heading" => __ ( 'Readmore text', THEMENAME ),
				"param_name" => "readmore_text",
				"description" => 'Enter the readmore text',
		),
        array (
				"type" => "textfield",
				"heading" => __ ( 'Custom Class', THEMENAME ),
				"param_name" => "custom_class",
				"description" => 'If you wish to style particular Extra element differently, then use this field to add a class name and then refer to it in your css file.'
		),
        
        
        
        
        
        array (
				"type" => "textfield",
				"heading" => __ ( 'Title', THEMENAME ),
				"param_name" => "title_1",
				"group" => "Item 1"
		),
        array (
				"type" => "textfield",
				"heading" => __ ( 'Title small', THEMENAME ),
				"param_name" => "title_small_1",
				"group" => "Item 1"
		),
        array (
				"type" => "textfield",
				"heading" => __ ( 'Icon', THEMENAME ),
				"param_name" => "icon_1",
				"description" => 'You can find icon class at here: <a target="_blank" href="http://fontawesome.io/icons/">"http://fontawesome.io/icons/</a>. For example, fa fa-heart',
				"group" => "Item 1",
		),
        array (
				"type" => "attach_image",
				"heading" => __ ( 'Image', THEMENAME ),
				"param_name" => "image_1",
				"group" => "Item 1",
		),
        array (
				"type" => "textfield",
				"heading" => __ ( 'Detail title', THEMENAME ),
				"param_name" => "detail_title_1",
				"group" => "Item 1"
		),
        array (
				"type" => "textfield",
				"heading" => __ ( 'Detail title small', THEMENAME ),
				"param_name" => "detail_title_small_1",
				"group" => "Item 1"
		),
        array (
    			"type" => "textarea",
    			"heading" => __ ( 'Detail Content', THEMENAME ),
    			"param_name" => 'detail_content_1',
    			"value" => '',
    			"group" => "Item 1",
		),
        array (
				"type" => "textfield",
				"heading" => __ ( 'Readmore link', THEMENAME ),
				"param_name" => "readmore_link_1",
				"description" => 'Enter the readmore link',
				"group" => "Item 1",
		),
        
        
        
        array (
				"type" => "textfield",
				"heading" => __ ( 'Title', THEMENAME ),
				"param_name" => "title_2",
				"group" => "Item 2"
		),
        array (
				"type" => "textfield",
				"heading" => __ ( 'Title small', THEMENAME ),
				"param_name" => "title_small_2",
				"group" => "Item 2"
		),
        array (
				"type" => "textfield",
				"heading" => __ ( 'Icon', THEMENAME ),
				"param_name" => "icon_2",
				"description" => 'You can find icon class at here: <a target="_blank" href="http://fontawesome.io/icons/">"http://fontawesome.io/icons/</a>. For example, fa fa-heart',
				"group" => "Item 2",
		),
        array (
				"type" => "attach_image",
				"heading" => __ ( 'Image', THEMENAME ),
				"param_name" => "image_2",
				"group" => "Item 2",
		),
        array (
				"type" => "textfield",
				"heading" => __ ( 'Detail title', THEMENAME ),
				"param_name" => "detail_title_2",
				"group" => "Item 2"
		),
        array (
				"type" => "textfield",
				"heading" => __ ( 'Detail title small', THEMENAME ),
				"param_name" => "detail_title_small_2",
				"group" => "Item 2"
		),
        array (
    			"type" => "textarea",
    			"heading" => __ ( 'Detail Content', THEMENAME ),
    			"param_name" => 'detail_content_2',
    			"value" => '',
    			"group" => "Item 2",
		),
        array (
				"type" => "textfield",
				"heading" => __ ( 'Readmore link', THEMENAME ),
				"param_name" => "readmore_link_2",
				"description" => 'Enter the readmore link',
				"group" => "Item 2",
		),
        
        
        
        
        
        
        
        
        array (
				"type" => "textfield",
				"heading" => __ ( 'Title', THEMENAME ),
				"param_name" => "title_3",
				"group" => "Item 3"
		),
        array (
				"type" => "textfield",
				"heading" => __ ( 'Title small', THEMENAME ),
				"param_name" => "title_small_3",
				"group" => "Item 3"
		),
        array (
				"type" => "textfield",
				"heading" => __ ( 'Icon', THEMENAME ),
				"param_name" => "icon_3",
				"description" => 'You can find icon class at here: <a target="_blank" href="http://fontawesome.io/icons/">"http://fontawesome.io/icons/</a>. For example, fa fa-heart',
				"group" => "Item 3",
		),
        array (
				"type" => "attach_image",
				"heading" => __ ( 'Image', THEMENAME ),
				"param_name" => "image_3",
				"group" => "Item 3",
		),
        array (
				"type" => "textfield",
				"heading" => __ ( 'Detail title', THEMENAME ),
				"param_name" => "detail_title_3",
				"group" => "Item 3"
		),
        array (
				"type" => "textfield",
				"heading" => __ ( 'Detail title small', THEMENAME ),
				"param_name" => "detail_title_small_3",
				"group" => "Item 3"
		),
        array (
    			"type" => "textarea",
    			"heading" => __ ( 'Detail Content', THEMENAME ),
    			"param_name" => 'detail_content_3',
    			"value" => '',
    			"group" => "Item 3",
		),
        array (
				"type" => "textfield",
				"heading" => __ ( 'Readmore link', THEMENAME ),
				"param_name" => "readmore_link_3",
				"description" => 'Enter the readmore link',
				"group" => "Item 3",
		),
        
        
        
        
        
        
        
        
        array (
				"type" => "textfield",
				"heading" => __ ( 'Title', THEMENAME ),
				"param_name" => "title_4",
				"group" => "Item 4"
		),
        array (
				"type" => "textfield",
				"heading" => __ ( 'Title small', THEMENAME ),
				"param_name" => "title_small_4",
				"group" => "Item 4"
		),
        array (
				"type" => "textfield",
				"heading" => __ ( 'Icon', THEMENAME ),
				"param_name" => "icon_4",
				"description" => 'You can find icon class at here: <a target="_blank" href="http://fontawesome.io/icons/">"http://fontawesome.io/icons/</a>. For example, fa fa-heart',
				"group" => "Item 4",
		),
        array (
				"type" => "attach_image",
				"heading" => __ ( 'Image', THEMENAME ),
				"param_name" => "image_4",
				"group" => "Item 4",
		),
        array (
				"type" => "textfield",
				"heading" => __ ( 'Detail title', THEMENAME ),
				"param_name" => "detail_title_4",
				"group" => "Item 4"
		),
        array (
				"type" => "textfield",
				"heading" => __ ( 'Detail title small', THEMENAME ),
				"param_name" => "detail_title_small_4",
				"group" => "Item 4"
		),
        array (
    			"type" => "textarea",
    			"heading" => __ ( 'Detail Content', THEMENAME ),
    			"param_name" => 'detail_content_4',
    			"value" => '',
    			"group" => "Item 4",
		),
        array (
				"type" => "textfield",
				"heading" => __ ( 'Readmore link', THEMENAME ),
				"param_name" => "readmore_link_4",
				"description" => 'Enter the readmore link',
				"group" => "Item 4",
		),
        
        
        
        
        
        
        
        array (
				"type" => "textfield",
				"heading" => __ ( 'Title', THEMENAME ),
				"param_name" => "title_5",
				"group" => "Item 5"
		),
        array (
				"type" => "textfield",
				"heading" => __ ( 'Title small', THEMENAME ),
				"param_name" => "title_small_5",
				"group" => "Item 5"
		),
        array (
				"type" => "textfield",
				"heading" => __ ( 'Icon', THEMENAME ),
				"param_name" => "icon_5",
				"description" => 'You can find icon class at here: <a target="_blank" href="http://fontawesome.io/icons/">"http://fontawesome.io/icons/</a>. For example, fa fa-heart',
				"group" => "Item 5",
		),
        array (
				"type" => "attach_image",
				"heading" => __ ( 'Image', THEMENAME ),
				"param_name" => "image_5",
				"group" => "Item 5",
		),
        array (
				"type" => "textfield",
				"heading" => __ ( 'Detail title', THEMENAME ),
				"param_name" => "detail_title_5",
				"group" => "Item 5"
		),
        array (
				"type" => "textfield",
				"heading" => __ ( 'Detail title small', THEMENAME ),
				"param_name" => "detail_title_small_5",
				"group" => "Item 5"
		),
        array (
    			"type" => "textarea",
    			"heading" => __ ( 'Detail Content', THEMENAME ),
    			"param_name" => 'detail_content_5',
    			"value" => '',
    			"group" => "Item 5",
		),
        array (
				"type" => "textfield",
				"heading" => __ ( 'Readmore link', THEMENAME ),
				"param_name" => "readmore_link_5",
				"description" => 'Enter the readmore link',
				"group" => "Item 5",
		),
        
        
        
        
        
        
        
        
        
        
        array (
				"type" => "textfield",
				"heading" => __ ( 'Title', THEMENAME ),
				"param_name" => "title_6",
				"group" => "Item 6"
		), 
		array (
				"type" => "textfield",
				"heading" => __ ( 'Title small', THEMENAME ),
				"param_name" => "title_small_6",
				"group" => "Item 6"
		),
        array (
				"type" => "textfield",
				"heading" => __ ( 'Icon', THEMENAME ),
				"param_name" => "icon_6",
				"description" => 'You can find icon class at here: <a target="_blank" href="http://fontawesome.io/icons/">"http://fontawesome.io/icons/</a>. For example, fa fa-heart',
				"group" => "Item 6",
		),
        array (
				"type" => "attach_image",
				"heading" => __ ( 'Image', THEMENAME ),
				"param_name" => "image_6",
				"group" => "Item 6",
		),
        array (
				"type" => "textfield",
				"heading" => __ ( 'Detail title', THEMENAME ),
				"param_name" => "detail_title_6",
				"group" => "Item 6"
		),
        array (
				"type" => "textfield",
				"heading" => __ ( 'Detail title small', THEMENAME ),
				"param_name" => "detail_title_small_6",
				"group" => "Item 6"
		),
        array (
    			"type" => "textarea",
    			"heading" => __ ( 'Detail Content', THEMENAME ),
    			"param_name" => 'detail_content_6',
    			"value" => '',
    			"group" => "Item 6",
		),
        array (
				"type" => "textfield",
				"heading" => __ ( 'Readmore link', THEMENAME ),
				"param_name" => "readmore_link_6",
				"description" => 'Enter the readmore link',
				"group" => "Item 6",
		), 
	)
) );
}