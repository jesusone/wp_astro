<?php
  class CMSblueCore {
      
     /**
     * set google font for selecter.
     * 
     * @param array $googlefont
     * @param string $selecter
     */
    public static function setGoogleFont($googlefont = array(), $selecter = ''){
        
        if(isset($googlefont['font-family'])){
            /* add font selecter. */
            if($selecter){
                echo esc_attr($selecter)."{font-family:'".esc_attr($googlefont['font-family'])."';}";
            }
        }
    }
  }
  
?>
