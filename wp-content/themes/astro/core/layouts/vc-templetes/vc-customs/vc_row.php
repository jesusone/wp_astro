<?php
$output = $el_class = $bg_image = $bg_color = $bg_image_repeat = $font_color = $padding = $margin_bottom = $css = '';

extract(shortcode_atts(array(
    'el_class'        => '',
    'dt_id'        => '',
    'type' => 'pr-default',
    'bg_image'        => '',
    'bg_color'        => '',
    'bg_image_repeat' => '',
    'font_color'      => '',
    'padding'         => '',
    'margin_bottom'   => '',
    'full_width' => 0,
    'enable_parallax'=>'',
    'css' => ''
), $atts));
wp_enqueue_style( 'js_composer_front' );
wp_enqueue_script( 'wpb_composer_front_js' );
wp_enqueue_style('js_composer_custom_css');
//Set array elemtet class
$pr_id = ($dt_id) ? "id=".$dt_id."" : "";
$pr_class_extras = array();
  if((int)$full_width == true) {
      $pr_full_width = "";
      $class_full_width = "pr-full-width";
  }
  else {
   $pr_full_width = "pr-container";
  }
 $el_class = $this->getExtraClass($el_class);
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG,  'wpb_row  ' .$class_full_width. '   ' . ( $this->settings( 'base' ) === 'pr_row_inner' ? 'pr_inner ' : '' ) . get_row_css_class() .$animation . $el_class . vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );
$style = $this->buildStyle($bg_image, $bg_color, $bg_image_repeat, $font_color, $padding, $margin_bottom);
 if($enable_parallax){
      $pr_class_extras[] = ($type=='pr-default')? 'pr-parallax-bg':'pr-parallax-video';
      $pr_class_extras[] = "parallax";
      $output .= '<div '.$pr_id.' class="'.$css_class.' ' . esc_attr(implode(' ', $pr_class_extras)) . '"' . $data_attr  . '>'; 
      $output .= "<div class='overlay'>" ;
 }     
 else {
      $output .= '<div '.$pr_id.' class="'.$css_class.' ' . esc_attr(implode(' ', $pr_class_extras)) . ' '.$style.'"' . $data_attr  . '>'; 
 }  
//$output .= '<div class="'.$css_class.'">';
if($pr_full_width=='pr-container'){
    $output .='<div class="container">'; 
    $output .= '<div class="row">'; 
}
 $output .= wpb_js_remove_wpautop($content);
if($pr_full_width=='pr-container'){
  $output .= '</div>'; 
  $output .= '</div>'; 
}
if($enable_parallax){
 $output .= '</div><!--end barallax-->';
}
//$output .= '</div>';  // End paralax.
$output .= '</div>'.$this->endBlockComment('row');
echo $output;
