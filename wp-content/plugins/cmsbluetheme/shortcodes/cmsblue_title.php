<?php
/* Create VC Map*/
vc_map ( array (
	"name" => 'Title Cmsblue',
	"base" => "cmsblue_title",
	"icon" => "of-icon-for-vc",
	"category" => __ ( 'Astro', CMSBLUE_NAME ),
	"params" => array( 
		array (
			"type" => "dropdown",
			"heading" => __ ( "Layout", CMSBLUE_NAME ),
			"param_name" => "layout",
			"value" => array(
				"Layout Default" => "layout1",
				"Layout2" => "layout2",
			),
			"description" => __ ( "Select style box.", CMSBLUE_NAME ),
			"group" => __("General", CMSBLUE_NAME),
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"dependency" => array(
				"element" => "layout",
				"value" => "layout2"
			),
			"heading" => __("Small title", CMSBLUE_NAME),
			"param_name" => "pr_small_title",
			"value" => "",
			"description" => __("Enter small title.", CMSBLUE_NAME),
			"group" => __("General", CMSBLUE_NAME),
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => __("Title", CMSBLUE_NAME),
			"param_name" => "pr_title",
			"value" => "",
			"description" => __("Enter title.", CMSBLUE_NAME),
			"group" => __("General", CMSBLUE_NAME),
		),
		array(
			"type" => "textarea",
			"holder" => "div",
			"class" => "",
			"heading" => __("Description", CMSBLUE_NAME),
			"param_name" => "pr_description",
			"value" => "",
			"description" => __("Enter description.", CMSBLUE_NAME),
			"group" => __("General", CMSBLUE_NAME),
			
		),
		array (
			"type" => "colorpicker",
			"heading" => __ ( 'Color', CMSBLUE_NAME ),
			"param_name" => "color",
			"value" => '',
			"description" => __ ( 'Color', CMSBLUE_NAME ),
			"group" => __("General", CMSBLUE_NAME),
		),

		array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Extra Class", CMSBLUE_NAME),
			"param_name" => "pr_class",
			"value" => "",
			"description" => __("Extra Class.", CMSBLUE_NAME),
			"group" => __("General", CMSBLUE_NAME),
		),
		array(
			"type" => "cmsblue_template",
			"param_name" => "cmsblue_template",
			"shortcode" => "cmsblue_slide",
			"admin_label" => true,
			"heading" => __("Shortcode Template",CMSBLUE_NAME),
			"group" => __("Templete", CMSBLUE_NAME),
		),
	)
) ); 

class WPBakeryShortCode_cmsblue_title extends CmsBlueShortCode {
	protected function content($atts, $content = null){
		global $title_option ;
		$atts_extra = shortcode_atts(array(
			'pr_small_title' => 'Small title',
	        'pr_title' => 'Enter Tite',
	        'pr_description' => 'Enter Description',
	        'layout' => 'layout1',
			), $atts); 
		$title_option = array_merge($atts_extra,$atts);
        $atts['template'] = 'template-'.str_replace('.php','',$atts['cmsblue_template']). ' content-align-' . $atts['content_align'] . ' '. $atts['class'];
		return parent::content($atts, $content);
  }
}
?>
