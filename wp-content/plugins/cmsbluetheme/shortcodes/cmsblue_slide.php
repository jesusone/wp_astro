<?php
/* Create VC Map*/
vc_map ( array (
	"name" => 'Slider Cmsblue',
	"base" => "cmsblue_slide",
	"icon" => "of-icon-for-vc",
	"category" => __ ( 'Astro', CMSBLUE_NAME ),
	"admin_enqueue_js" => array(CMSBLUE_JS.'admin-upload.js'),
    "params" => array (
		array (
			"type" => "dropdown",
			"heading" => __ ( "Slide Type", CMSBLUE_NAME ),
			"param_name" => "style",
			"value" => array(
				"Image" => "style1",
				"Video" => "style2",
				"Content" => "style3",
			),
			"description" => __ ( "Select style box.", CMSBLUE_NAME ),
			"group" => __("General", CMSBLUE_NAME)
		),
		array(
			"type" => "attach_image",
			"heading" => __("Image Content", CMSBLUE_NAME),
			"param_name" => "imagecontent",
			"dependency" => array(
				"element" => "style",
				"value" => "style3"
			),
			"description" => __ ( "Choise image.", CMSBLUE_NAME ),
			"group" => __("General", CMSBLUE_NAME)
		),
		array (
			"type" => "textfield",
			"heading" => __ ( "Video URl", CMSBLUE_NAME ),
			"param_name" => "videourl",
			"description" => __ ( "Input link video.", CMSBLUE_NAME ),
			"dependency" => array(
				"element" => "style",
				"value" => "style2"
			),
           
			"group" => __("General", CMSBLUE_NAME)
		),
		
		array(
			"type" => "cmsblue_template",
			"param_name" => "cmsblue_template",
			"shortcode" => "cmsblue_slide",
			"admin_label" => true,
			"heading" => __("Shortcode Template",CMSBLUE_NAME),
			"group" => __("General", CMSBLUE_NAME),
		),
        /*	SLIDE ITEM	*/
		array(
			"type" => "attach_image",
			"heading" => __("Image", CMSBLUE_NAME),
			"param_name" => "image1",
			"dependency" => array(
				"element" => "style",
				"value" => "style1"
			),
			"description" => __ ( "Choise image.", CMSBLUE_NAME ),
			"group" => __("Slide 1", CMSBLUE_NAME)
		),
		array(
			"type" => "textfield",
			"heading" => __('Title', CMSBLUE_NAME),
			"param_name" => "title_slide1",
			"description" => __('Enter title slide',CMSBLUE_NAME),
			"group" => __("Slide 1", CMSBLUE_NAME)
		),
		array(
			"type" => "textarea",
			"heading" => __('Description', PR_THEME_NAME),
			"param_name" => "description1",
			"description" => __('Enter content of slide',CMSBLUE_NAME),
			"group" => __("Slide 1", CMSBLUE_NAME)
		),
		array(
			"type" => "textfield",
			"heading" => __('Extra class', CMSBLUE_NAME),
			"param_name" => "ex_class1",
			"value" => '',
			"description" => __('Enter extra class form icon font.',CMSBLUE_NAME),
			"group" => __("Slide 1", CMSBLUE_NAME)
		),
		array(
			"type" => "textfield",
			"heading" => __('Text Button', CMSBLUE_NAME),
			"param_name" => "text_button1",
			"value" => 'Button',
			"description" => __('Enter text for button.',CMSBLUE_NAME),
			"group" => __("Slide 1", CMSBLUE_NAME)
		),
		array(
			"type" => "textfield",
			"heading" => __('Link', CMSBLUE_NAME),
			"param_name" => "url_button1",
			"value" => '#',
			"description" => __('Enter extra class form icon font.',CMSBLUE_NAME),
			"group" => __("Slide 1", CMSBLUE_NAME)
		),
		/*END SILER ITEM*/  
		array(
			"type" => "attach_image",
			"heading" => __("Image", CMSBLUE_NAME),
			"param_name" => "image2",
			"dependency" => array(
				"element" => "style",
				"value" => "style1"
			),
			"group" => __("Slide 2", CMSBLUE_NAME),
			"description" => __ ( "Choise image.", CMSBLUE_NAME )
		),
		array(
			"type" => "textfield",
			"heading" => __('Title', CMSBLUE_NAME),
			"param_name" => "title_slide2",
			"description" => __('Enter title slide',CMSBLUE_NAME),
			"group" => __("Slide 2", CMSBLUE_NAME),
		),
		array(
			"type" => "textarea",
			"heading" => __('Description', PR_THEME_NAME),
			"param_name" => "description2",
			"description" => __('Enter content of slide',CMSBLUE_NAME),
			"group" => __("Slide 2", CMSBLUE_NAME),
		),
		array(
			"type" => "textfield",
			"heading" => __('Extra class', CMSBLUE_NAME),
			"param_name" => "ex_class2",
			"value" => '',
			"description" => __('Enter extra class form icon font.',CMSBLUE_NAME),
			"group" => __("Slide 2", CMSBLUE_NAME),
		),
		array(
			"type" => "textfield",
			"heading" => __('Text Button', CMSBLUE_NAME),
			"param_name" => "text_button2",
			"value" => 'Button',
			"description" => __('Enter text for button.',CMSBLUE_NAME),
			"group" => __("Slide 2", CMSBLUE_NAME),
		),
		array(
			"type" => "textfield",
			"heading" => __('Link', CMSBLUE_NAME),
			"param_name" => "url_button2",
			"value" => '#',
			"description" => __('Enter url link.',CMSBLUE_NAME),
			"group" => __("Slide 2", CMSBLUE_NAME),
		), 
		/*END SILER ITEM*/  
		array(
			"type" => "attach_image",
			"heading" => __("Image", CMSBLUE_NAME),
			"param_name" => "image3",
			"dependency" => array(
				"element" => "style",
				"value" => "style1"
			),
			"group" => __("Slide 3", CMSBLUE_NAME),
			"description" => __ ( "Choise image.", CMSBLUE_NAME )
		),
		array(
			"type" => "textfield",
			"heading" => __('Title', CMSBLUE_NAME),
			"param_name" => "title_slide3",
			"description" => __('Enter title slide',CMSBLUE_NAME),
			"group" => __("Slide 3", CMSBLUE_NAME),
		),
		array(
			"type" => "textarea",
			"heading" => __('Description', PR_THEME_NAME),
			"param_name" => "description3",
			"description" => __('Enter content of slide',CMSBLUE_NAME),
			"group" => __("Slide 3", CMSBLUE_NAME),
		),
		array(
			"type" => "textfield",
			"heading" => __('Extra class', CMSBLUE_NAME),
			"param_name" => "ex_class3",
			"value" => '',
			"description" => __('Enter extra class form icon font.',CMSBLUE_NAME),
			"group" => __("Slide 3", CMSBLUE_NAME),
		),
		array(
			"type" => "textfield",
			"heading" => __('Text Button', CMSBLUE_NAME),
			"param_name" => "text_button3",
			"value" => 'Button',
			"description" => __('Enter text for button.',CMSBLUE_NAME),
			"group" => __("Slide 3", CMSBLUE_NAME),
		),
		array(
			"type" => "textfield",
			"heading" => __('Link', CMSBLUE_NAME),
			"param_name" => "url_button3",
			"value" => '#',
			"description" => __('Enter url link.',CMSBLUE_NAME),
			"group" => __("Slide 3", CMSBLUE_NAME),
		),
		/*END SILER ITEM*/  
		array(
			"type" => "attach_image",
			"heading" => __("Image", CMSBLUE_NAME),
			"param_name" => "image4",
			"dependency" => array(
				"element" => "style",
				"value" => "style1"
			),
			"group" => __("Slide 4", CMSBLUE_NAME),
			"description" => __ ( "Choise image.", CMSBLUE_NAME )
		),
		array(
			"type" => "textfield",
			"heading" => __('Title', CMSBLUE_NAME),
			"param_name" => "title_slide4",
			"description" => __('Enter title slide',CMSBLUE_NAME),
			"group" => __("Slide 4", CMSBLUE_NAME),
		),
		array(
			"type" => "textarea",
			"heading" => __('Description', PR_THEME_NAME),
			"param_name" => "description4",
			"description" => __('Enter content of slide',CMSBLUE_NAME),
			"group" => __("Slide 4", CMSBLUE_NAME),
		),
		array(
			"type" => "textfield",
			"heading" => __('Extra class', CMSBLUE_NAME),
			"param_name" => "ex_class4",
			"value" => '',
			"description" => __('Enter extra class form icon font.',CMSBLUE_NAME),
			"group" => __("Slide 4", CMSBLUE_NAME),
		),
		array(
			"type" => "textfield",
			"heading" => __('Text Button', CMSBLUE_NAME),
			"param_name" => "text_button4",
			"value" => 'Button',
			"description" => __('Enter text for button.',CMSBLUE_NAME),
			"group" => __("Slide 4", CMSBLUE_NAME),
		),
		array(
			"type" => "textfield",
			"heading" => __('Link', CMSBLUE_NAME),
			"param_name" => "url_button4",
			"value" => '#',
			"description" => __('Enter url link.',CMSBLUE_NAME),
			"group" => __("Slide 4", CMSBLUE_NAME),
		),
		/*END SILER ITEM*/  
		array(
			"type" => "attach_image",
			"heading" => __("Image", CMSBLUE_NAME),
			"param_name" => "image5",
			"dependency" => array(
				"element" => "style",
				"value" => "style1"
			),
			"group" => __("Slide 5", CMSBLUE_NAME),
			"description" => __ ( "Choise image.", CMSBLUE_NAME )
		),
		array(
			"type" => "textfield",
			"heading" => __('Title', CMSBLUE_NAME),
			"param_name" => "title_slide3",
			"description" => __('Enter title slide',CMSBLUE_NAME),
			"group" => __("Slide 5", CMSBLUE_NAME),
    	),
		array(
			"type" => "textarea",
			"heading" => __('Description', PR_THEME_NAME),
			"param_name" => "description5",
			"description" => __('Enter content of slide',CMSBLUE_NAME),
			"group" => __("Slide 5", CMSBLUE_NAME),
		),
		array(
			"type" => "textfield",
			"heading" => __('Extra class', CMSBLUE_NAME),
			"param_name" => "ex_class5",
			"value" => '',
			"description" => __('Enter extra class form icon font.',CMSBLUE_NAME),
			"group" => __("Slide 5", CMSBLUE_NAME),
		),
		array(
			"type" => "textfield",
			"heading" => __('Text Button', CMSBLUE_NAME),
			"param_name" => "text_button5",
			"value" => 'Button',
			"description" => __('Enter text for button.',CMSBLUE_NAME),
			"group" => __("Slide 5", CMSBLUE_NAME),
		),
		array(
			"type" => "textfield",
			"heading" => __('Link', CMSBLUE_NAME),
			"param_name" => "url_button5",
			"value" => '#',
			"description" => __('Enter url link.',CMSBLUE_NAME),
			"group" => __("Slide 5", CMSBLUE_NAME),
		),
		/*END SILER ITEM*/  
		array(
			"type" => "attach_image",
			"heading" => __("Image", CMSBLUE_NAME),
			"param_name" => "image6",
			"dependency" => array(
				"element" => "style",
				"value" => "style1"
			),
			"group" => __("Slide 6", CMSBLUE_NAME),
			"description" => __ ( "Choise image.", CMSBLUE_NAME )
		),
		array(
			"type" => "textfield",
			"heading" => __('Title', CMSBLUE_NAME),
			"param_name" => "title_slide6",
			"description" => __('Enter title slide',CMSBLUE_NAME),
			"group" => __("Slide 6", CMSBLUE_NAME),
       ),
		array(
			"type" => "textarea",
			"heading" => __('Description', PR_THEME_NAME),
			"param_name" => "description6",
			"description" => __('Enter content of slide',CMSBLUE_NAME),
			"group" => __("Slide 6", CMSBLUE_NAME),
		),
		array(
			"type" => "textfield",
			"heading" => __('Extra class', CMSBLUE_NAME),
			"param_name" => "ex_class6",
			"value" => '',
			"description" => __('Enter extra class form icon font.',CMSBLUE_NAME),
			"group" => __("Slide 6", CMSBLUE_NAME),
		),
		array(
			"type" => "textfield",
			"heading" => __('Text Button', CMSBLUE_NAME),
			"param_name" => "text_button6",
			"value" => 'Button',
			"description" => __('Enter text for button.',CMSBLUE_NAME),
			"group" => __("Slide 6", CMSBLUE_NAME),
		),
		array(
			"type" => "textfield",
			"heading" => __('Link', CMSBLUE_NAME),
			"param_name" => "url_button6",
			"value" => '#',
			"description" => __('Enter url link.',CMSBLUE_NAME),
			"group" => __("Slide 6", CMSBLUE_NAME),
		),
		
	)
) ); 

class WPBakeryShortCode_cmsblue_slide extends CmsBlueShortCode {
	protected function content($atts, $content = null){
		 global $slide;
		 $imagemax = 6;
		 $image_number = 0;
		for($i=1;$i <= $imagemax; $i++){
			if(isset($atts['title_slide'.$i])&& $atts['title_slide'.$i] != ''){
			  	$image_number += 1;
			}
		}
		$atts_extra = shortcode_atts(array(
			'style' => '',
			'videourl' => '',
			'image1' => '',
			'image2' => '',
			'image3' => '',
			'title_slide1' => __("Silde Title",CMSBLUE_NAME),
			'description1' => __("Silde Description",CMSBLUE_NAME),
			'text_button1' => __("Button",CMSBLUE_NAME),
			'title_slide2' => __("Silde Title",CMSBLUE_NAME),
			'description2' => __("Silde Description",CMSBLUE_NAME),
			'text_button2' => __("Button",CMSBLUE_NAME),
			'title_slide3' => __("Silde Title",CMSBLUE_NAME),
			'description3' => __("Silde Description",CMSBLUE_NAME),
			'text_button3' => __("Button",CMSBLUE_NAME),
			'title_slide4' => __("Silde Title",CMSBLUE_NAME),
			'description4' => __("Silde Description",CMSBLUE_NAME),
			'text_button4' => __("Button",CMSBLUE_NAME),
			'title_slide5' => __("Silde Title",CMSBLUE_NAME),
			'description5' => __("Silde Description",CMSBLUE_NAME),
			'text_button5' => __("Button",CMSBLUE_NAME),
			'title_slide6' => __("Silde Title",CMSBLUE_NAME),
			'description6' => __("Silde Description",CMSBLUE_NAME),
			'text_button6' => __("Button",CMSBLUE_NAME),
			), $atts); 
		$atts = array_merge($atts_extra,$atts);
		
		$atts['image_number'] = $image_number; 
		$slide = $atts;
		$atts['template'] = 'template-'.str_replace('.php','',$atts['cmsblue_template']). ' content-align-' . $atts['content_align'] . ' '. $atts['class'];
		return parent::content($atts, $content);


	}
	
}
?>
