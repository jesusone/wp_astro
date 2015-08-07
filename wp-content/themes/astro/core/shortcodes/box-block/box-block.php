<?php
     function pr_boxblock_shortcode($atts, $content = null) {
         global $box_opton;
           extract(shortcode_atts(array(
            'style' => 'box-services',
            'title_box' => '',
            'description' => '',
            'ex_class' => ''
        ), $atts));
        $box_opton = array(
           'title_box'=> $title_box,
           'description' => $description,
           'style' => $style,
           'ex_class' => $ex_class 
        );
        ob_start();
         get_template_part('core/layouts/vc-templetes/box-block/'.$style );
        return ob_get_clean();
     }
      add_shortcode('pr-boxblock', 'pr_boxblock_shortcode');
?>
