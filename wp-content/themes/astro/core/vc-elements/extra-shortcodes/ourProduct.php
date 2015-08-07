<?php

add_action('init', 'our_product_integrateWithVC');

function our_product_integrateWithVC() {
    vc_map(array(
        "name" => __("OurProduct Astro", THEMENAME),
        "base" => "our-product",
        "class" => "our-product",
        "category" => __('Astro', THEMENAME),
        "icon" => "of-icon-for-vc",
        "params" => array( 
            array(
              "type" => "textfield",
              "heading" => __("Head small title",THEMENAME),
              "param_name" => "head_small_title",
              "value" => 'our products',
              "description" => __ ( 'Enter the head small title.', THEMENAME ),
              "group" => __("General Settings", THEMENAME)
            ),
            array(
              "type" => "textfield",
              "heading" => __("Head title",THEMENAME),
              "param_name" => "head_title",
              "value" => 'World Class Product',
              "description" => __ ( 'Enter Head title.', THEMENAME ),
              "group" => __("General Settings", THEMENAME)
            ),
            array(
              "type" => "textfield",
              "heading" => __("Pre text",THEMENAME),
              "param_name" => "pre_text",
              "value" => 'Curabitur non nulla sit amet nisl tempus convallis quis lectus. Praesent sapien massa, convallis a pellen tesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt ni dictum porta',
              "description" => __ ( 'Enter pre text.', THEMENAME ),
              "group" => __("General Settings", THEMENAME)
            ),
            array (
                "type" => "pro_taxonomy",
                "taxonomy" => "product_cat",
                "heading" => __ ( "Categories", THEMENAME ),
                "param_name" => "category",
                "description" => __ ( "Select categories to show products.", THEMENAME ),
                "group" => __("General Settings", THEMENAME)
            ),
            array(
              "type" => "textfield",
              "heading" => __("Number of product",THEMENAME),
              "param_name" => "number_product",
              "description" => __ ( 'The number of product to display on each page. Set to "0" for display all product.', THEMENAME ),
              "group" => __("General Settings", THEMENAME)
            ),
            array (
                "type" => "textfield",
                "heading" => __ ( 'Add to cart button text', THEMENAME ),
                "param_name" => "addtocart_text",
                "value" => 'Add to cart',
                "description" => __ ( 'Display add to cart text.', THEMENAME ),
                "group" => __("Product Settings", THEMENAME)
            ),
            array (
				"type" => "dropdown",
				"heading" => __ ( 'Order by', THEMENAME ),
				"param_name" => "orderby",
				"value" => array (
						"None" => "none",
						"Title" => "title",
						"Date" => "date",
						"ID" => "ID",
						"Price" => 'price',
						"Sales" => 'sales',
						"Random" => 'rand',
				),
                "description" => __ ( 'Order by ("none", "title", "date", "ID", "Price", "Sales", "Random").', THEMENAME ),
				"group" => __("General Settings", THEMENAME)
			),
            array (
				"type" => "dropdown",
				"heading" => __ ( 'Order', THEMENAME ),
				"param_name" => "order",
				"value" => array (
						"None" => "none",
						"Ascending" => "asc",
						"Descending" => "desc"
				),
                "description" => __ ( 'Order ("none", "asc", "desc").', THEMENAME ),
				"group" => __("General Settings", THEMENAME)
				
			),
            array (
                "type" => "dropdown",
                "heading" => __ ( 'Show or hide head small title', THEMENAME ),
                "param_name" => "show_head_small_title",
                "value" => array (
                        "Yes" => "1",
                        "No" => "0"
                ),
                "description" => __ ( 'Show or hide head small title', THEMENAME ),
                "group" => __("Product Settings", THEMENAME)
            ),
            array (
                "type" => "dropdown",
                "heading" => __ ( 'Show or hide head title', THEMENAME ),
                "param_name" => "show_head_title",
                "value" => array (
                        "Yes" => "1",
                        "No" => "0"
                ),
                "description" => __ ( 'Show or hide head title.', THEMENAME ),
                "group" => __("Product Settings", THEMENAME)
            ),
            array (
                "type" => "dropdown",
                "heading" => __ ( 'Show or hide Pre text', THEMENAME ),
                "param_name" => "show_pre_text",
                "value" => array (
                        "Yes" => "1",
                        "No" => "0"
                ),
                "description" => __ ( 'Show or hide Pre text.', THEMENAME ),
                "group" => __("Product Settings", THEMENAME)
            ),
            array (
                "type" => "dropdown",
                "heading" => __ ( 'Show title', THEMENAME ),
                "param_name" => "show_title",
                "value" => array (
                        "Yes" => "1",
                        "No" => "0"
                ),
                "description" => __ ( 'Show or hide title on your Product.', THEMENAME ),
                "group" => __("Product Settings", THEMENAME)
            ),
            array (
                "type" => "dropdown",
                "heading" => __ ( 'Show rating', THEMENAME ),
                "param_name" => "show_rating",
                "value" => array (
                        "Yes" => "1",
                        "No" => "0"
                ),
                "description" => __ ( 'Show or hide rating on your Product.', THEMENAME ),
                "group" => __("Product Settings", THEMENAME)
            ),
            array (
                "type" => "textfield",
                "heading" => __ ( 'Price icon', THEMENAME ),
                "param_name" => "price_icon",
                "value" => 'fa fa-tag',
                "description" => __ ( 'Font Awesome icon class ex: fa fa-tag.', THEMENAME ),
                "group" => __("Product Settings", THEMENAME)
            ),
            array (
                "type" => "dropdown",
                "heading" => __ ( 'Show price', THEMENAME ),
                "param_name" => "show_price",
                "value" => array (
                        "Yes" => "1",
                        "No" => "0"
                ),
                "description" => __ ( 'Show or hide price on your Product.', THEMENAME ),
                "group" => __("Product Settings", THEMENAME)
            ),
            array (
                "type" => "dropdown",
                "heading" => __ ( 'Show description', THEMENAME ),
                "param_name" => "show_description",
                "value" => array (
                        "Yes" => "1",
                        "No" => "0"
                ),
                "description" => __ ( 'Show or hide description on your Product.', THEMENAME ),
                "group" => __("Product Settings", THEMENAME)
            ),
            array (
                "type" => "dropdown",
                "heading" => __ ( 'Show product information', THEMENAME ),
                "param_name" => "show_product_info",
                "value" => array (
                        "Yes" => "1",
                        "No" => "0"
                ),
                "description" => __ ( 'Show or hide product information on your Product.', THEMENAME ),
                "group" => __("Product Settings", THEMENAME)
            ),
            array (
                "type" => "dropdown",
                "heading" => __ ( 'Show Add to cart button', THEMENAME ),
                "param_name" => "show_addtocart_btn",
                "value" => array (
                        "Yes" => "1",
                        "No" => "0"
                ),
                "description" => __ ( 'Show or hide Add to Cart button.', THEMENAME ),
                "group" => __("Product Settings", THEMENAME)
            ),
            array (
                "type" => "dropdown",
                "heading" => __ ( 'Number of item for a row', THEMENAME ),
                "param_name" => "number_in_row",
                "value" => array (
                        "1" => 1,
                        "2" => 2,
                        "3" => 3,
                        "4" => 4,
                        "6" => 6,
                        "12" => 12
                ),
                "description" => __ ( 'Number of item for a row', THEMENAME ),
                "group" => __("Product List Settings", THEMENAME)
            ), 
            array (
                "type" => "dropdown",
                "heading" => __ ( 'Show or hide title link', THEMENAME ),
                "param_name" => "show_item_title_link",
                "value" => array (
                        "No" => "0",
                        "Yes" => "1"
                ),
                "description" => __ ( 'Show or hide title link.', THEMENAME ),
                "group" => __("Product List Settings", THEMENAME)
            ), 
            array (
                "type" => "dropdown",
                "heading" => __ ( 'Show or hide item price', THEMENAME ),
                "param_name" => "show_item_price",
                "value" => array (
                        "Yes" => "1",
                        "No" => "0"
                ),
                "description" => __ ( 'Show or hide Item price.', THEMENAME ),
                "group" => __("Product List Settings", THEMENAME)
            ), 
          )
    ));
}
