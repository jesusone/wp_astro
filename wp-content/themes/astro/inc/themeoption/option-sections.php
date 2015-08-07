<?php 
/**
 *	Header Section
 *	@author
*/
$this->sections[] = array(
    'title' => __('Header', PR_THEME_NAME),
    'icon' => 'el-icon-credit-card',
    'fields' => array(
        array(
            'id' => 'header_layout',
            'title' => __('Layouts', PR_THEME_NAME),
            'subtitle' => __('select a layout for header', PR_THEME_NAME),
            'default' => '',
            'type' => 'image_select',
            'options' => array(
                'default' => get_template_directory_uri().'/images/headers/default.png',
                'none-cart' => get_template_directory_uri().'/images/headers/no-cart.png'
            )
        ),
        array(
            'subtitle' => __('in pixels.', PR_THEME_NAME),
            'id' => 'header_height',
            'type' => 'text',
            'title' => 'Header Height',
            'default' => '186px'
        ),
        array(
            'subtitle' => __('in pixels, top right bottom left, ex: 10px 10px 10px 10px', PR_THEME_NAME),
            'id' => 'header_margin',
            'type' => 'text',
            'title' => 'Margin',
            'default' => ''
        ),
        array(
            'subtitle' => __('in pixels, top right bottom left, ex: 10px 10px 10px 10px', PR_THEME_NAME),
            'id' => 'header_padding',
            'type' => 'text',
            'title' => 'Padding',
            'default' => ''
        ),
        array(
            'subtitle' => __('enable sticky mode for menu.', PR_THEME_NAME),
            'id' => 'menu_sticky',
            'type' => 'switch',
            'title' => __('Sticky Header', PR_THEME_NAME),
            'default' => false,
        ),
         array(
            'subtitle' => __('in pixels.', PR_THEME_NAME),
            'id' => 'menu_sticky_height',
            'type' => 'text',
            'title' => 'Sticky Header Height',
            'default' => '80px',
            'required' => array( 0 => 'menu_sticky', 1 => '=', 2 => 1 )
        ),
        array(
            'subtitle' => __('enable sticky mode for menu Tablets.', PR_THEME_NAME),
            'id' => 'menu_sticky_tablets',
            'type' => 'switch',
            'title' => __('Sticky Tablets', PR_THEME_NAME),
            'default' => false,
            'required' => array( 0 => 'menu_sticky', 1 => '=', 2 => 1 )
        ),
        array(
            'subtitle' => __('enable sticky mode for menu Mobile.', PR_THEME_NAME),
            'id' => 'menu_sticky_mobile',
            'type' => 'switch',
            'title' => __('Sticky Mobile', PR_THEME_NAME),
            'default' => false,
            'required' => array( 0 => 'menu_sticky', 1 => '=', 2 => 1 )
        )
    )
);

/* Logo */
$this->sections[] = array(
    'title' => __('Logo', PR_THEME_NAME),
    'icon' => 'el-icon-picture',
    'subsection' => true,
    'fields' => array(
        array(
            'title' => __('Select Logo', PR_THEME_NAME),
            'subtitle' => __('Select an image file for your logo.', PR_THEME_NAME),
            'id' => 'main_logo',
            'type' => 'media',
            'url' => true,
            'default' => array(
                'url'=>get_template_directory_uri().'/assets/images/logo.png'
            )
        ),
        array(
            'subtitle' => __('in pixels.', PR_THEME_NAME),
            'id' => 'main_logo_height',
            'type' => 'text',
            'title' => 'Logo Height',
            'default' => '129px'
        ),
        array(
            'subtitle' => __('in pixels.', PR_THEME_NAME),
            'id' => 'sticky_logo_height',
            'type' => 'text',
            'title' => 'Sticky Logo Height',
            'default' => '60px'
        )
    )
);

/* Menu */
$this->sections[] = array(
    'title' => __('Menu', PR_THEME_NAME),
    'icon' => 'el-icon-tasks',
    'subsection' => true,
    'fields' => array(
        array(
            'subtitle' => 'Menu position.',
            'id' => 'menu_position',
            'options' => array(
                1 => 'Menu Left',
                2 => 'Menu Right',
            ),
            'type' => 'select',
            'title' => 'Menu Position',
            'default' => '2'
        ),
        array(
            'subtitle' => __('in pixels.', PR_THEME_NAME),
            'id' => 'menu_padding_first_level',
            'type' => 'text',
            'title' => 'Menu Padding - First Level',
            'default' => '0 10px'
        ),
        array(
            'subtitle' => __('in pixels.', PR_THEME_NAME),
            'id' => 'menu_margin_first_level',
            'type' => 'text',
            'title' => 'Menu Margin - First Level',
            'default' => '0'
        ),
        array(
            'subtitle' => __('in pixels.', PR_THEME_NAME),
            'id' => 'menu_fontsize_first_level',
            'type' => 'text',
            'title' => 'Menu Font Size - First Level',
            'default' => '22px'
        ),
        array(
            'subtitle' => __('in pixels.', PR_THEME_NAME),
            'id' => 'menu_fontsize_sub_level',
            'type' => 'text',
            'title' => 'Menu Font Size - Sub Level',
            'default' => '18px'
        ),
        array(
            'subtitle' => __('enable sub menu border bottom.', PR_THEME_NAME),
            'id' => 'menu_border_color_bottom',
            'type' => 'switch',
            'title' => __('Border Bottom Menu Item Sub Level', PR_THEME_NAME),
            'default' => false,
        ),
        array(
            'subtitle' => __('Enable mega menu.', PR_THEME_NAME),
            'id' => 'menu_mega',
            'type' => 'switch',
            'title' => __('Mega Menu', PR_THEME_NAME),
            'default' => true,
        ),
        array(
            'subtitle' => __('Enable menu first level uppercase.', PR_THEME_NAME),
            'id' => 'menu_first_level_uppercase',
            'type' => 'switch',
            'title' => __('Menu First Level Uppercase', PR_THEME_NAME),
            'default' => false,
        ),
        array(
            'subtitle' => __('in pixels.', PR_THEME_NAME),
            'id' => 'menu_icon_font_size',
            'type' => 'text',
            'title' => 'Menu Icon Font Size',
            'default' => '34px'
        )
    )
);

/**
 * Body
 *
 * @author  
 */
$this->sections[] = array(
    'title' => __('Body', PR_THEME_NAME),
    'icon' => 'el-icon-website',
    'fields' => array(
        array(
            'subtitle' => __('Set layout boxed default(Wide).', PR_THEME_NAME),
            'id' => 'body_layout',
            'type' => 'switch',
            'title' => __('Boxed Layout', PR_THEME_NAME),
            'default' => false,
        ),
        array(
            'id'       => 'body_background',
            'type'     => 'background',
            'title'    => __( 'Background', PR_THEME_NAME ),
            'subtitle' => __( 'body background with image, color, etc.', PR_THEME_NAME ),
            'output'   => array('body'),
        ),
        array(
            'subtitle' => __('in pixels, top right bottom left, ex: 10px 10px 10px 10px', PR_THEME_NAME),
            'id' => 'body_margin',
            'type' => 'text',
            'title' => 'Margin',
            'default' => ''
        ),
        array(
            'subtitle' => __('in pixels, top right bottom left, ex: 10px 10px 10px 10px', PR_THEME_NAME),
            'id' => 'body_padding',
            'type' => 'text',
            'title' => 'Padding',
            'default' => ''
        )
    )
);  
/**
 * Content
 * 
 * Archive, Pages, Single, 404, Search, Category, Tags .... 
 * @author  
 */
$this->sections[] = array(
    'title' => __('Content', PR_THEME_NAME),
    'icon' => 'el-icon-compass',
    'subsection' => true,
    'fields' => array(
        array(
            'id'       => 'container_background',
            'type'     => 'background',
            'title'    => __( 'Background', PR_THEME_NAME ),
            'subtitle' => __( 'Container background with image, color, etc.', PR_THEME_NAME ),
            'output'   => array('#main'),
        ),
        array(
            'subtitle' => __('in pixels, top right bottom left, ex: 10px 10px 10px 10px', PR_THEME_NAME),
            'id' => 'container_margin',
            'type' => 'text',
            'title' => 'Margin',
            'default' => '0 0 80px'
        ),
        array(
            'subtitle' => __('in pixels, top right bottom left, ex: 10px 10px 10px 10px', PR_THEME_NAME),
            'id' => 'container_padding',
            'type' => 'text',
            'title' => 'Padding',
            'default' => ''
        )
    )
);

/**
 * Page Loadding
 * 
 * 
 * @author  
 */
$this->sections[] = array(
    'title' => __('Page Loadding', PR_THEME_NAME),
    'icon' => 'el-icon-compass',
    'subsection' => true,
    'fields' => array(
        array(
            'subtitle' => __('Enable page loadding.', PR_THEME_NAME),
            'id' => 'enable_page_loadding',
            'type' => 'switch',
            'title' => __('Enable Page Loadding', PR_THEME_NAME),
            'default' => false,
        ),
        array(
            'subtitle' => 'Select Style Page Loadding.',
            'id' => 'page_loadding_style',
            'type' => 'select',
            'options' => array(
                '1' => 'Style 1',
                '2' => 'Style 2'
            ),
            'title' => 'Page Loadding Style',
            'default' => 'style-1',
            'required' => array( 0 => 'enable_page_loadding', 1 => '=', 2 => 1 )
        )     
    )
);

/**
 * Footer
 *
 * @author  
 */
$this->sections[] = array(
    'title' => __('Footer', PR_THEME_NAME),
    'icon' => 'el-icon-credit-card',
);

/* Footer top */
$this->sections[] = array(
    'title' => __('Footer Top', PR_THEME_NAME),
    'icon' => 'el-icon-fork',
    'subsection' => true,
    'fields' => array(
        array(
            'subtitle' => __('Enable footer top.', PR_THEME_NAME),
            'id' => 'enable_footer_top',
            'type' => 'switch',
            'title' => __('Enable Footer Top', PR_THEME_NAME),
            'default' => true,
        ),
        array(
            'id'       => 'footer_background',
            'type'     => 'background',
            'title'    => __( 'Background', PR_THEME_NAME ),
            'subtitle' => __( 'footer background with image, color, etc.', PR_THEME_NAME ),
            'output'   => array('footer #zo-footer-top'),
            'default'   => array(
                'background-color'=>'#6e4692',
                'background-image'=> get_template_directory_uri().'/assets/images/bg-vector-lg.png',
                'background-repeat'=>'repeat',
                'background-size'=>'contain',
                'background-attachment'=>'',
                'background-position'=>'center center'
            ),
            'required' => array( 0 => 'enable_footer_top', 1 => '=', 2 => 1 )
        ),
        array(
            'subtitle' => __('in pixels, top right bottom left, ex: 10px 10px 10px 10px', PR_THEME_NAME),
            'id' => 'footer_margin',
            'type' => 'text',
            'title' => 'Margin',
            'default' => '',
            'required' => array( 0 => 'enable_footer_top', 1 => '=', 2 => 1 )
        ),
        array(
            'subtitle' => __('in pixels, top right bottom left, ex: 10px 10px 10px 10px', PR_THEME_NAME),
            'id' => 'footer_padding',
            'type' => 'text',
            'title' => 'Padding',
            'default' => '65px 0',
            'required' => array( 0 => 'enable_footer_top', 1 => '=', 2 => 1 )
        )
    )
);

/* footer botton */
$this->sections[] = array(
    'title' => __('Footer Bottom', PR_THEME_NAME),
    'icon' => 'el-icon-bookmark',
    'subsection' => true,
    'fields' => array(
        array(
            'subtitle' => __('Enable footer bottom.', PR_THEME_NAME),
            'id' => 'enable_footer_bottom',
            'type' => 'switch',
            'title' => __('Enable Footer Bottom', PR_THEME_NAME),
            'default' => false,
        ),
        array(
            'id'       => 'footer_botton_background',
            'type'     => 'background',
            'title'    => __( 'Background', PR_THEME_NAME ),
            'subtitle' => __( 'background with image, color, etc.', PR_THEME_NAME ),
            'output'   => array('footer #zo-footer-bottom'),
            'default'   => array(),
            'required' => array( 0 => 'enable_footer_bottom', 1 => '=', 2 => 1 )
        ),
        array(
            'subtitle' => __('in pixels, top right bottom left, ex: 10px 10px 10px 10px', PR_THEME_NAME),
            'id' => 'footer_botton_margin',
            'type' => 'text',
            'title' => 'Margin',
            'default' => '',
            'required' => array( 0 => 'enable_footer_bottom', 1 => '=', 2 => 1 )
        ),
        array(
            'subtitle' => __('in pixels, top right bottom left, ex: 10px 10px 10px 10px', PR_THEME_NAME),
            'id' => 'footer_botton_padding',
            'type' => 'text',
            'title' => 'Padding',
            'default' => '',
            'required' => array( 0 => 'enable_footer_bottom', 1 => '=', 2 => 1 )
        ),
        array(
            'subtitle' => __('enable button back to top.', PR_THEME_NAME),
            'id' => 'footer_botton_back_to_top',
            'type' => 'switch',
            'title' => __('Back To Top', PR_THEME_NAME),
            'default' => true,
        )
    )
);

/**
 * Button Option
 *
 * @author  
 */
$this->sections[] = array(
    'title' => __('Button', PR_THEME_NAME),
    'icon' => 'el el-bold',
    'fields' => array(
        array(
            'subtitle' => __('in pixels.', PR_THEME_NAME),
            'id' => 'button_font_size',
            'type' => 'text',
            'title' => 'Button Font Size',
            'default' => '18px'
        ),
        array(
            'subtitle' => __('Enable button uppercase.', PR_THEME_NAME),
            'id' => 'button_text_uppercase',
            'type' => 'switch',
            'title' => __('Button Text Uppercase', PR_THEME_NAME),
            'default' => false,
        )
    )
);

/* Button Default */
$this->sections[] = array(
    'icon' => 'el el-minus',
    'title' => __('Button Default', PR_THEME_NAME),
    'subsection' => true,
    'fields' => array(
        array(
            'subtitle' => __('in pixels.', PR_THEME_NAME),
            'id' => 'btn_default_padding_top',
            'type' => 'text',
            'title' => __('Button Default - Padding Top', PR_THEME_NAME),
            'default' => '16px'
        ),
        array(
            'subtitle' => __('in pixels.', PR_THEME_NAME),
            'id' => 'btn_default_padding_right',
            'type' => 'text',
            'title' => __('Button Default - Padding Right', PR_THEME_NAME),
            'default' => '50px'
        ),
        array(
            'subtitle' => __('in pixels.', PR_THEME_NAME),
            'id' => 'btn_default_padding_bottom',
            'type' => 'text',
            'title' => __('Button Default - Padding Bottom', PR_THEME_NAME),
            'default' => '16px'
        ),
        array(
            'subtitle' => __('in pixels.', PR_THEME_NAME),
            'id' => 'btn_default_padding_left',
            'type' => 'text',
            'title' => __('Button Default - Padding Left', PR_THEME_NAME),
            'default' => '50px'
        ),
        array(
            'subtitle' => __('in pixels: Ex 1px 1px 1px 1px.', PR_THEME_NAME),
            'id' => 'btn_default_border_width',
            'type' => 'text',
            'title' => __('Button Default - Border Width', PR_THEME_NAME),
            'default' => '2px'
        ),
        array(
            'subtitle' => __('in pixels: Ex 5px.', PR_THEME_NAME),
            'id' => 'btn_default_border_radius',
            'type' => 'text',
            'title' => __('Button Default - Border Radius', PR_THEME_NAME),
            'default' => '3px'
        )
    )
);

/* Button Primary */
$this->sections[] = array(
    'icon' => 'el el-minus',
    'title' => __('Button Primary', PR_THEME_NAME),
    'subsection' => true,
    'fields' => array(
        array(
            'subtitle' => __('in pixels.', PR_THEME_NAME),
            'id' => 'btn_primary_padding_top',
            'type' => 'text',
            'title' => __('Button Primary - Padding Top', PR_THEME_NAME),
            'default' => '16px'
        ),
        array(
            'subtitle' => __('in pixels.', PR_THEME_NAME),
            'id' => 'btn_primary_padding_right',
            'type' => 'text',
            'title' => __('Button Primary - Padding Right', PR_THEME_NAME),
            'default' => '50px'
        ),
        array(
            'subtitle' => __('in pixels.', PR_THEME_NAME),
            'id' => 'btn_primary_padding_bottom',
            'type' => 'text',
            'title' => __('Button Primary - Padding Bottom', PR_THEME_NAME),
            'default' => '16px'
        ),
        array(
            'subtitle' => __('in pixels.', PR_THEME_NAME),
            'id' => 'btn_primary_padding_left',
            'type' => 'text',
            'title' => __('Button Primary - Padding Left', PR_THEME_NAME),
            'default' => '50px'
        ),
        array(
            'subtitle' => __('in pixels: Ex 1px 1px 1px 1px.', PR_THEME_NAME),
            'id' => 'btn_primary_border_width',
            'type' => 'text',
            'title' => __('Button Primary - Border Width', PR_THEME_NAME),
            'default' => '2px'
        ),
        array(
            'subtitle' => __('in pixels: Ex 5px.', PR_THEME_NAME),
            'id' => 'btn_primary_border_radius',
            'type' => 'text',
            'title' => __('Button Primary - Border Radius', PR_THEME_NAME),
            'default' => '5px'
        )
    )
);
/**
 * Styling
 * 
 * css color.
 * @author  
 */
$this->sections[] = array(
    'title' => __('Styling', PR_THEME_NAME),
    'icon' => 'el-icon-adjust',
    'fields' => array(
        array(
            'subtitle' => __('set color main color.', PR_THEME_NAME),
            'id' => 'primary_color',
            'type' => 'color',
            'title' => __('Primary Color', PR_THEME_NAME),
            'default' => '#6e4692'
        ),
        array(
            'id' => 'secondary_color',
            'type' => 'color',
            'title' => __('Secondary Color', PR_THEME_NAME),
            'default' => '#ffdd00'
        ),
        array(
            'subtitle' => __('set color for tags <a></a>.', PR_THEME_NAME),
            'id' => 'link_color',
            'type' => 'color',
            'title' => __('Link Color', PR_THEME_NAME),
            'output'  => array('a'),
            'default' => '#6f4792'
        ),
        array(
            'subtitle' => __('set color for tags <a></a>.', PR_THEME_NAME),
            'id' => 'link_color_hover',
            'type' => 'color',
            'title' => __('Link Color Hover', PR_THEME_NAME),
            'output'  => array('a:hover'),
            'default' => '#9c9c9c'
        )
    )
);

/** Header Main Color **/
$this->sections[] = array(
    'title' => __('Header Main Color', PR_THEME_NAME),
    'icon' => 'el-icon-minus',
    'subsection' => true,
    'fields' => array(
        array(
            'subtitle' => __('set color for header background color.', PR_THEME_NAME),
            'id' => 'bg_header',
            'type' => 'color_rgba',
            'title' => __('Header Background Color', PR_THEME_NAME),
            'default' => array('color'=>'#fff','alpha'=>'0.50', 'rgba'=>'rgba(19,19,19,0.50)')
        ),
         array(
            'subtitle' => __('set color for header background color.', PR_THEME_NAME),
            'id' => 'bg_header_sticky',
            'type' => 'color_rgba',
            'title' => __('Header Background Color Sticky', PR_THEME_NAME),
            'default' => array('color'=>'#fff','alpha'=>'0.50', 'rgba'=>'rgba(19,19,19,0.50)')
        )
    )
);  

/** Menu Color **/

$this->sections[] = array(
    'title' => __('Menu Color', PR_THEME_NAME),
    'icon' => 'el-icon-minus',
    'subsection' => true,
    'fields' => array(
        array(
            'subtitle' => __('Controls the text color of first level menu items.', PR_THEME_NAME),
            'id' => 'menu_color_first_level',
            'type' => 'color',
            'title' => __('Menu Font Color - First Level', PR_THEME_NAME),
            'default' => '#575656'
        ),
        array(
            'subtitle' => __('Controls the text hover color of first level menu items.', PR_THEME_NAME),
            'id' => 'menu_color_hover_first_level',
            'type' => 'color',
            'title' => __('Menu Font Color Hover - First Level', PR_THEME_NAME),
            'default' => '#6e4692'
        ),
        array(
            'subtitle' => __('Controls the text hover color of first level menu items.', PR_THEME_NAME),
            'id' => 'menu_color_active_first_level',
            'type' => 'color',
            'title' => __('Menu Font Color Active - First Level', PR_THEME_NAME),
            'default' => '#6e4692'
        ),
        array(
            'subtitle' => __('Controls the text color of sub level menu items.', PR_THEME_NAME),
            'id' => 'menu_color_sub_level',
            'type' => 'color',
            'title' => __('Menu Font Color - Sub Level', PR_THEME_NAME),
            'default' => '#575656'
        ),
        array(
            'subtitle' => __('Controls the text hover color of sub level menu items.', PR_THEME_NAME),
            'id' => 'menu_color_hover_sub_level',
            'type' => 'color',
            'title' => __('Menu Font Color Hover - Sub Level', PR_THEME_NAME),
            'default' => '#6e4692'
        ),
        array(
            'subtitle' => __('Controls the text background color of sub level menu items.', PR_THEME_NAME),
            'id' => 'menu_bg_color_sub_level',
            'type' => 'color',
            'title' => __('Menu Background Color - Sub Level', PR_THEME_NAME),
            'default' => '#f5f5f5'
        ),
        array(
            'subtitle' => __('Controls the text background color hover of sub level menu items.', PR_THEME_NAME),
            'id' => 'menu_bg_color_hover_sub_level',
            'type' => 'color',
            'title' => __('Menu Background Color Hover - Sub Level', PR_THEME_NAME),
            'default' => '#e9e9e9'
        ),
        array(
            'subtitle' => __('Controls the border color of sub level menu items.', PR_THEME_NAME),
            'id' => 'menu_item_border_color',
            'type' => 'color',
            'title' => __('Border Color - Sub Level', PR_THEME_NAME),
            'default' => '',
            'required' => array( 0 => 'menu_border_color_bottom', 1 => '=', 2 => 1 )
        )
    )
);

/** Button Color **/

$this->sections[] = array(
    'title' => __('Button Color', PR_THEME_NAME),
    'icon' => 'el el-bold',
    'subsection' => true,
    'fields' => array(
        array(
            'subtitle' => __('Controls the button text color.', PR_THEME_NAME),
            'id' => 'btn_default_color',
            'type' => 'color',
            'title' => __('Button Default - Font Color', PR_THEME_NAME),
            'default' => '#ffffff'
        ),
        array(
            'subtitle' => __('Controls the button text hover color.', PR_THEME_NAME),
            'id' => 'btn_default_color_hover',
            'type' => 'color',
            'title' => __('Button Default - Font Color Hover', PR_THEME_NAME),
            'default' => '#ffffff'
        ),
        array(
            'subtitle' => __('Controls the button background color.', PR_THEME_NAME),
            'id' => 'btn_default_bg_color',
            'type' => 'color',
            'title' => __('Button Default - Background Color', PR_THEME_NAME),
            'default' => '#3bbcd6'
        ),
        array(
            'subtitle' => __('Controls the button background color.', PR_THEME_NAME),
            'id' => 'btn_default_bg_color_hover',
            'type' => 'color',
            'title' => __('Button Default - Background Color Hover', PR_THEME_NAME),
            'default' => '#ffde0a'
        ),
        array(
            'subtitle' => __('Controls the button border color.', PR_THEME_NAME),
            'id' => 'btn_default_border_color',
            'type' => 'color',
            'title' => __('Button Default - Border Color', PR_THEME_NAME),
            'default' => '#1a9eb9'
        ),
        array(
            'subtitle' => __('Controls the button border hover color.', PR_THEME_NAME),
            'id' => 'btn_default_border_color_hover',
            'type' => 'color',
            'title' => __('Button Default - Border Color Hover', PR_THEME_NAME),
            'default' => '#f0ba00'
        ),
        array(
            'subtitle' => __('Controls the button text color.', PR_THEME_NAME),
            'id' => 'btn_primary_color',
            'type' => 'color',
            'title' => __('Button Primary - Font Color', PR_THEME_NAME),
            'default' => '#ffffff'
        ),
        array(
            'subtitle' => __('Controls the button text hover color.', PR_THEME_NAME),
            'id' => 'btn_primary_color_hover',
            'type' => 'color',
            'title' => __('Button Primary - Font Color Hover', PR_THEME_NAME),
            'default' => '#ffffff'
        ),
        array(
            'subtitle' => __('Controls the button background color.', PR_THEME_NAME),
            'id' => 'btn_primary_bg_color',
            'type' => 'color',
            'title' => __('Button Primary - Background Color', PR_THEME_NAME),
            'default' => '#765197'
        ),
        array(
            'subtitle' => __('Controls the button background color.', PR_THEME_NAME),
            'id' => 'btn_primary_bg_color_hover',
            'type' => 'color',
            'title' => __('Button Primary - Background Color Hover', PR_THEME_NAME),
            'default' => '#765197'
        ),
        array(
            'subtitle' => __('Controls the button border color.', PR_THEME_NAME),
            'id' => 'btn_primary_border_color',
            'type' => 'color',
            'title' => __('Button Primary - Border Color', PR_THEME_NAME),
            'default' => '#5c367c'
        ),
        array(
            'subtitle' => __('Controls the button border hover color.', PR_THEME_NAME),
            'id' => 'btn_primary_border_color_hover',
            'type' => 'color',
            'title' => __('Button Primary - Border Color Hover', PR_THEME_NAME),
            'default' => '#5c367c'
        )
    )
);
/** Footer Top Color **/
$this->sections[] = array(
    'title' => __('Footer Top Color', PR_THEME_NAME),
    'icon' => 'el-icon-chevron-up',
    'subsection' => true,
    'fields' => array(
        array(
            'subtitle' => __('Set color footer top.', PR_THEME_NAME),
            'id' => 'footer_top_color',
            'type' => 'color',
            'title' => __('Footer Top Color', PR_THEME_NAME),
            'default' => '#ffffff'
        ),
        array(
            'subtitle' => __('Set title color footer top.', PR_THEME_NAME),
            'id' => 'footer_headding_color',
            'type' => 'color',
            'title' => __('Footer Headding Color', PR_THEME_NAME),
            'default' => '#ffffff'
        ),
        array(
            'subtitle' => __('Set title link color footer top.', PR_THEME_NAME),
            'id' => 'footer_top_link_color',
            'type' => 'color',
            'title' => __('Footer Link Color', PR_THEME_NAME),
            'default' => '#ffffff'
        ),
        array(
            'subtitle' => __('Set title link color footer top.', PR_THEME_NAME),
            'id' => 'footer_top_link_color_hover',
            'type' => 'color',
            'title' => __('Footer Link Color Hover', PR_THEME_NAME),
            'default' => '#ffffff'
        )
    )
);

/** Footer Bottom Color **/
$this->sections[] = array(
    'title' => __('Footer Bottom Color', PR_THEME_NAME),
    'icon' => 'el-icon-chevron-down',
    'subsection' => true,
    'fields' => array(
        array(
            'subtitle' => __('Set color footer top.', PR_THEME_NAME),
            'id' => 'footer_bottom_color',
            'type' => 'color',
            'title' => __('Footer Bottom Color', PR_THEME_NAME),
            'default' => ''
        )
    )
);

/**
 * Typography
 * 
 * @author  
 */
$this->sections[] = array(
    'title' => __('Typography', PR_THEME_NAME),
    'icon' => 'el-icon-text-width',
    'fields' => array(
        array(
            'id' => 'font_body',
            'type' => 'typography',
            'title' => __('Body Font', PR_THEME_NAME),
            'google' => true,
            'font-backup' => true,
            'all_styles' => true,
            'output'  => array('body'),
            'units' => 'px',
            'default' => array(
                'color' => '#9c9c9c',
                'font-style' => 'normal',
                'font-weight' => '400',
                'font-family' => 'Dosis',
                'google' => true,
                'font-size' => '18px',
                'line-height' => '26px',
                'text-align' => ''
            ),
            'subtitle' => __('Typography option with each property can be called individually.', PR_THEME_NAME),
        ),
        array(
            'id' => 'font_h1',
            'type' => 'typography',
            'title' => __('H1', PR_THEME_NAME),
            'google' => true,
            'font-backup' => true,
            'all_styles' => true,
            'output'  => array('body h1'),
            'units' => 'px',
            'default' => array(
                'color' => '#6f4792',
                'font-style' => 'normal',
                'font-weight' => '700',
                'font-family' => 'Amatic SC',
                'google' => true,
                'font-size' => '62px',
                'line-height' => '72px',
                'text-align' => ''
            )
        ),
        array(
            'id' => 'font_h2',
            'type' => 'typography',
            'title' => __('H2', PR_THEME_NAME),
            'google' => true,
            'font-backup' => true,
            'all_styles' => true,
            'output'  => array('body h2'),
            'units' => 'px',
            'default' => array(
                'color' => '#6f4792',
                'font-style' => 'normal',
                'font-weight' => '700',
                'font-family' => 'Amatic SC',
                'google' => true,
                'font-size' => '53px',
                'line-height' => '58px',
                'text-align' => ''
            )
        ),
        array(
            'id' => 'font_h3',
            'type' => 'typography',
            'title' => __('H3', PR_THEME_NAME),
            'google' => true,
            'font-backup' => true,
            'all_styles' => true,
            'output'  => array('body h3'),
            'units' => 'px',
            'default' => array(
                'color' => '#6f4792',
                'font-style' => 'normal',
                'font-weight' => '700',
                'font-family' => 'Amatic SC',
                'google' => true,
                'font-size' => '48px',
                'line-height' => '54px',
                'text-align' => ''
            )
        ),
        array(
            'id' => 'font_h4',
            'type' => 'typography',
            'title' => __('H4', PR_THEME_NAME),
            'google' => true,
            'font-backup' => true,
            'all_styles' => true,
            'output'  => array('body h4'),
            'units' => 'px',
            'default' => array(
                'color' => '',
                'font-style' => 'normal',
                'font-weight' => '700',
                'font-family' => 'Dosis',
                'google' => true,
                'font-size' => '34px',
                'line-height' => '34px',
                'text-align' => ''
            )
        ),
        array(
            'id' => 'font_h5',
            'type' => 'typography',
            'title' => __('H5', PR_THEME_NAME),
            'google' => true,
            'font-backup' => true,
            'all_styles' => true,
            'output'  => array('body h5'),
            'units' => 'px',
            'default' => array(
                'color' => '',
                'font-style' => 'normal',
                'font-weight' => '700',
                'font-family' => 'Dosis',
                'google' => true,
                'font-size' => '24px',
                'line-height' => '26px',
                'text-align' => ''
            )
        ),
        array(
            'id' => 'font_h6',
            'type' => 'typography',
            'title' => __('H6', PR_THEME_NAME),
            'google' => true,
            'font-backup' => true,
            'all_styles' => true,
            'output'  => array('body h6'),
            'units' => 'px',
            'default' => array(
                'color' => '',
                'font-style' => 'normal',
                'font-weight' => '700',
                'font-family' => 'Dosis',
                'google' => true,
                'font-size' => '14px',
                'line-height' => '18px',
                'text-align' => ''
            )
        )
    )
);

/* extra font. */
$this->sections[] = array(
    'title' => __('Extra Fonts', PR_THEME_NAME),
    'icon' => 'el el-fontsize',
    'subsection' => true,
    'fields' => array(
        array(
            'id' => 'google-font-1',
            'type' => 'typography',
            'title' => __('Font 1', PR_THEME_NAME),
            'google' => true,
            'font-backup' => false,
            'font-style' => false,
            'color' => false,
            'text-align'=> false,
            'line-height'=>false,
            'font-size'=> false,
            'subsets'=> false,
            'default' => array(
                'font-weight' => '700',
                'font-family' => 'Dosis'
            )
        ),
        array(
            'id' => 'google-font-selector-1',
            'type' => 'textarea',
            'title' => __('Selector 1', PR_THEME_NAME),
            'subtitle' => __('add html tags ID or class (body,a,.class,#id)', PR_THEME_NAME),
            'validate' => 'no_html',
            'default' => 'body .btn, #secondary .wg-title, #comments .comments-title, #comments .comment-reply-title, .zo-recent-post-wrapper .zo-recent-details .title',
        ),
        array(
            'id' => 'google-font-2',
            'type' => 'typography',
            'title' => __('Font 2', PR_THEME_NAME),
            'google' => true,
            'font-backup' => false,
            'font-style' => false,
            'color' => false,
            'text-align'=> false,
            'line-height'=>false,
            'font-size'=> false,
            'subsets'=> false,
            'default' => array(
                'font-weight' => '700',
                'font-family' => 'Amatic SC'
            )
        ),
        array(
            'id' => 'google-font-selector-2',
            'type' => 'textarea',
            'title' => __('Selector 2', PR_THEME_NAME),
            'subtitle' => __('add html tags ID or class (body,a,.class,#id)', PR_THEME_NAME),
            'validate' => 'no_html',
            'default' => '#zo-footer-top .wg-title',
        ),
    )
);

/* local fonts. */
$local_fonts ="";
$this->sections[] = array(
    'title' => __('Local Fonts', PR_THEME_NAME),
    'icon' => 'el-icon-bookmark',
    'subsection' => true,
    'fields' => array(
        array(
            'id'       => 'local-fonts-1',
            'type'     => 'select',
            'title'    => __( 'Fonts 1', PR_THEME_NAME ),
            'options'  => $local_fonts,
            'default'  => 'MyriadPro-Semibold',
        ),
        array(
            'id' => 'local-fonts-selector-1',
            'type' => 'textarea',
            'title' => __('Selector 1', PR_THEME_NAME),
            'subtitle' => __('add html tags ID or class (body,a,.class,#id)', PR_THEME_NAME),
            'validate' => 'no_html',
            'default' => '.zo-pricing-wrapper .zo-pricing-content ul li span',
            'required' => array(
                0 => 'local-fonts-1',
                1 => '!=',
                2 => ''
            )
        ),
        array(
            'id'       => 'local-fonts-2',
            'type'     => 'select',
            'title'    => __( 'Fonts 2', PR_THEME_NAME ),
            'options'  => $local_fonts,
            'default'  => '',
        ),
        array(
            'id' => 'local-fonts-selector-2',
            'type' => 'textarea',
            'title' => __('Selector 2', PR_THEME_NAME),
            'subtitle' => __('add html tags ID or class (body,a,.class,#id)', PR_THEME_NAME),
            'validate' => 'no_html',
            'default' => '',
            'required' => array(
                0 => 'local-fonts-2',
                1 => '!=',
                2 => ''
            )
        )
    )
);

/**
 * Custom CSS
 * 
 * extra css for customer.
 * @author
 */
$this->sections[] = array(
    'title' => __('Custom CSS', PR_THEME_NAME),
    'icon' => 'el-icon-bulb',
    'fields' => array(
        array(
            'id' => 'custom_css',
            'type' => 'ace_editor',
            'title' => __('CSS Code', PR_THEME_NAME),
            'subtitle' => __('create your css code here.', PR_THEME_NAME),
            'mode' => 'css',
            'theme' => 'monokai',
        )
    )
);
/**
 * Animations
 *
 * Animations options for theme. libs css, js.
 * @author  
 */
$this->sections[] = array(
    'title' => __('Animations', PR_THEME_NAME),
    'icon' => 'el-icon-magic',
    'fields' => array(
        array(
            'subtitle' => __('Enable animation mouse scroll...', PR_THEME_NAME),
            'id' => 'smoothscroll',
            'type' => 'switch',
            'title' => __('Smooth Scroll', PR_THEME_NAME),
            'default' => false
        ),
        array(
            'subtitle' => __('Enable animation parallax for images...', PR_THEME_NAME),
            'id' => 'paralax',
            'type' => 'switch',
            'title' => __('Images Paralax', PR_THEME_NAME),
            'default' => true
        ),
    )
);
/**
 * Optimal Core
 * 
 * Optimal options for theme. optimal speed
 * @author  
 */
$this->sections[] = array(
    'title' => __('Optimal Core', PR_THEME_NAME),
    'icon' => 'el-icon-idea',
    'fields' => array(
        array(
            'subtitle' => __('no minimize , generate css over time...', PR_THEME_NAME),
            'id' => 'dev_mode',
            'type' => 'switch',
            'title' => __('Dev Mode (not recommended)', PR_THEME_NAME),
            'default' => true
        )
    )
);    