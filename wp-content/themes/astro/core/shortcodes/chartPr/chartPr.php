<?php
function pr_chartShortCode($atts, $content = null) {
    global $chartPromSu, $head_small_title, $head_title, $pre_text;
    
    extract(shortcode_atts(array(
        'head_small_title'       => "Happy Clients",
        'head_title'             => "Some Fun Fact",
        'pre_text'               => "Curabitur non nulla sit amet nisl tempus convallis quis lectus. Praesent sapien massa, convallis a pellen tesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt ni dictum porta",
        'ch_title1' => 'Title 1',
        'ch_value1' => 50,
        'ch_icon1' => 'fa fa fa-trophy',
        'ch_title2' => 'Title 2',
        'ch_value2' => 50,
        'ch_icon2' => 'fa fa fa-trophy',
        'ch_title3' => 'Title 3',
        'ch_value3' => 50,
        'ch_icon3' => 'fa fa fa-trophy',
        'ch_title4' => 'Title 4',
        'ch_icon4' => 'fa fa fa-trophy',
        'ch_value4' => 50
      ), $atts));
      $chartPromSu= array();
      foreach($atts as $key => $att){
        if($key=='ch_title1' || $key=='ch_title2' || $key=='ch_title3' || $key=='ch_title4' || $key=='ch_value1' || $key=='ch_value2' || $key=='ch_value3' || $key=='ch_value4'||$key=='ch_icon1' || $key=='ch_icon2' || $key=='ch_icon3' || $key=='ch_icon4'){
            $chartPromSu[$key] = $att;
        }
      }
     
      $head_small_title = $atts['head_small_title']!=''?$atts['head_small_title']:'' ; 
      $head_title = $atts['head_title']!=''?$atts['head_title']:'' ; 
      $pre_text = $atts['pre_text']!=''?$atts['pre_text']:'' ;    
      
     //echo '<pre>'; var_dump($head_small_title); die;
      $chartPromSu = array('chartPromSu' => $chartPromSu);
      
    ob_start();
    get_template_part('core/layouts/vc-templetes/chart/pr', 'chart');
    return ob_get_clean();
}

add_shortcode('pr-chart', 'pr_chartShortCode');
