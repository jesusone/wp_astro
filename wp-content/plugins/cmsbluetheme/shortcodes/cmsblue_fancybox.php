<?php
/* Create VC Map*/
vc_map ( array (
	"name" => 'Fancybox Cmsblue',
	"base" => "cmsblue_fancybox",
	"icon" => "of-icon-for-vc",
	"category" => __ ( 'Astro', CMSBLUE_NAME ),
	"params" => array( 
		array(
			"type" => "textfield",
			"heading" => __('Title', PR_THEME_NAME),
			"param_name" => "title_box",
			"description" => __('Enter title box',PR_THEME_NAME)
		),
		array(
			"type" => "textarea",
			"heading" => __('Description', PR_THEME_NAME),
			"param_name" => "description",
			"description" => __('Enter content of box',PR_THEME_NAME)
		),
		array(
			"type" => "textfield",
			"heading" => __('Extra class', PR_THEME_NAME),
			"param_name" => "ex_class",
			"value" => '',
			"description" => __('Enter extra class form icon font.',PR_THEME_NAME)
		),
		array(
			"type" => "cmsblue_template",
			"param_name" => "cmsblue_template",
			"shortcode" => "cmsblue_fancybox",
			"admin_label" => true,
			"heading" => __("Shortcode Template",CMSBLUE_NAME),
			"group" => __("Templete", CMSBLUE_NAME),
		),
	)
) ); 

class WPBakeryShortCode_cmsblue_fancybox extends CmsBlueShortCode {
	protected function content($atts, $content = null){
		global $box_opton;
		$atts_extra = shortcode_atts(array(
			 'style' => 'box-services',
            'title_box' => '',
            'description' => '',
            'ex_class' => ''
			), $atts); 
		$box_opton = array_merge($atts_extra,$atts);
        $atts['template'] = 'template-'.str_replace('.php','',$atts['cmsblue_template']). ' content-align-' . $atts['content_align'] . ' '. $atts['class'];
		return parent::content($atts, $content);
  }
}
?>
