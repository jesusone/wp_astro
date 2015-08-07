<?php

class FooterWidget extends WP_Widget {
    
         
                public $widget_face;
				public $widget_astro;
                public $widget_twitter;
                public $widget_gplus;
                public $widget_instagram;
                public $widget_youtube;
                public $widget_dribble;
                public $widget_linkedin;
                public $widget_copyright;
                public $widget_theThemeLab_link;
                public $widget_theThemeLab_name;             
          
                
    
    
            function __construct() {
            parent::__construct(
            // Base ID of your widget
            'wpb_widget', 

            // Widget name will appear in UI
            __('Footer Widget'), 

            // Widget description
            array( 'description' => __( 'Sample widget footer' ), ) 
            );
            }

	function widget( $args, $instance ) {
            
	?>	
      <div class="container text-center item_bottom">
        <?php $logo = get_option('header_logo_light');?>
                <?php if(!empty($logo)&&is_url_exist($logo)):?>
                    <img src="<?php echo $logo;?>" class="footer-logo" alt="footer logo"/>
                <?php endif;?>
    <!-- Social Icon -->
	<div class="social_icons">
		<ul>
			<?php if(!empty( $instance['widget_face'])){?>
			<li><a href="<?php echo $instance['widget_face'] ?>"><i class="fa fa-facebook"></i></a></li>
			<?php } if(!empty( $instance['widget_astro'])){?>
			<li><a href="<?php echo $instance['widget_astro'] ?>"><i class="fa fa-dribbble"></i></a></li>
			<?php } if(!empty( $instance['widget_twitter'])){?>
			<li><a href="<?php echo $instance['widget_twitter'] ?>"><i class="fa fa-twitter"></i></a></li>
			<?php } if(!empty( $instance['widget_gplus'])){?>
			<li><a href="<?php echo $instance['widget_gplus'] ?>"><i class="fa fa-google-plus"></i></a></li>
			<?php } if(!empty( $instance['widget_instagram'])){?>
			<li><a href=<?php echo $instance['widget_instagram'] ?>><i class="fa fa-instagram"></i></a></li>
			<?php } if(!empty($instance['widget_youtube'])){?>
			<li><a href="<?php echo $instance['widget_youtube'] ?>"><i class="fa fa-youtube"></i></a></li>
			<?php } if(!empty( $instance['widget_dribble'])){?>
			<li><a href="<?php echo $instance['widget_dribble'] ?>"><i class="fa fa-dribbble"></i></a></li>
			<?php } if(!empty( $instance['widget_linkedin'] )){?>
			<li><a href="<?php echo $instance['widget_linkedin'] ?>"><i class="fa fa-linkedin"></i></a></li>
			<?php }?>
		</ul>
	</div>
	<!-- End Social Icon -->
	
</div>
      <?php      
	}

	function update( $new_instance, $old_instance ) {
               $instance = $old_instance;
             
           //$instance['widget_logo '] = ( ! empty( $new_instance['widget_logo '] ) ) ? strip_tags( $new_instance['widget_logo '] ) : '';
			
            $instance['widget_face'] = strip_tags($new_instance['widget_face']);
			$instance['widget_astro'] = strip_tags($new_instance['widget_astro']);
            $instance['widget_twitter'] = strip_tags($new_instance['widget_twitter']);
            $instance['widget_gplus'] = strip_tags($new_instance['widget_gplus']);
            $instance['widget_instagram'] = strip_tags($new_instance['widget_instagram']);
            $instance['widget_youtube'] = strip_tags($new_instance['widget_youtube']);
            $instance['widget_dribble'] = strip_tags($new_instance['widget_dribble']);
            $instance['widget_linkedin'] = strip_tags($new_instance['widget_linkedin']);
            $instance['widget_copyright'] = strip_tags($new_instance['widget_copyright']); 
            $instance['widget_theThemeLab_link'] = strip_tags($new_instance['widget_theThemeLab_link']); 
            $instance['widget_theThemeLab_name'] = strip_tags($new_instance['widget_theThemeLab_name']); 
              return $instance;
        

        }

	function form( $instance ) {
           $widget_face              = ! empty( $instance['widget_face'] )      ? $instance['widget_face'] : ( '#' );
		   $widget_astro             = ! empty( $instance['widget_astro'] )      ? $instance['widget_astro'] : ( '#' );
           $widget_twitter           = ! empty( $instance['widget_twitter'] )   ? $instance['widget_twitter'] : ( '#' );
           $widget_gplus             = ! empty( $instance['widget_gplus'] )     ? $instance['widget_gplus'] : ( '#' );     
           $widget_instagram         = ! empty( $instance['widget_instagram'] ) ? $instance['widget_instagram'] : ( '#' );
           $widget_youtube           = ! empty( $instance['widget_youtube'] )   ? $instance['widget_youtube'] : ( '#' );         
           $widget_dribble           = ! empty( $instance['widget_dribble'] )  ? $instance['widget_dribble'] : ( '#' );           
           $widget_linkedin          = ! empty( $instance['widget_linkedin'] )  ? $instance['widget_linkedin'] : ( '#' );
           $widget_copyright         = ! empty( $instance['widget_copyright'] ) ? $instance['widget_copyright'] : ( '#' );
           $widget_theThemeLab_link  = ! empty( $instance['widget_theThemeLab_link'] ) ? $instance['widget_theThemeLab_link'] : ( 'http://themeforest.net/user/thethemelab' );
           $widget_theThemeLab_name  = ! empty( $instance['widget_theThemeLab_name'] ) ? $instance['widget_theThemeLab_name'] : ( 'Thethemeab' );

          ?>  

     
         <p>
          <label for="<?php echo $this->get_field_id('widget_face'); ?>"><?php _e('Facebook'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('widget_face'); ?>" name="<?php echo $this->get_field_name('widget_face'); ?>" type="text" value="<?php echo $widget_face; ?>" />
        </p>
		
			<p>
          <label for="<?php echo $this->get_field_id('widget_astro'); ?>"><?php _e('Astro'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('widget_astro'); ?>" name="<?php echo $this->get_field_name('widget_astro'); ?>" type="text" value="<?php echo $widget_face; ?>" />
        </p>
        
          <p>
          <label for="<?php echo $this->get_field_id('widget_twitter'); ?>"><?php _e('Twitter'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('widget_twitter'); ?>" name="<?php echo $this->get_field_name('widget_twitter'); ?>" type="text" value="<?php echo $widget_twitter; ?>" />
        </p>
        
         <p>
          <label for="<?php echo $this->get_field_id('widget_gplus'); ?>"><?php _e('Google Plus'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('widget_gplus'); ?>" name="<?php echo $this->get_field_name('widget_gplus'); ?>" type="text" value="<?php echo $widget_gplus; ?>" />
        </p>
        
         <p>
          <label for="<?php echo $this->get_field_id('widget_instagram'); ?>"><?php _e('Instagram'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('widget_instagram'); ?>" name="<?php echo $this->get_field_name('widget_instagram'); ?>" type="text" value="<?php echo $widget_instagram; ?>" />
        </p>
        
         <p>
          <label for="<?php echo $this->get_field_id('widget_youtube'); ?>"><?php _e('Youtube'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('widget_youtube'); ?>" name="<?php echo $this->get_field_name('widget_youtube'); ?>" type="text" value="<?php echo $widget_youtube; ?>" />
        </p>
        
          <p>
          <label for="<?php echo $this->get_field_id('widget_dribble'); ?>"><?php _e('Dribble'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('widget_dribble'); ?>" name="<?php echo $this->get_field_name('widget_dribble'); ?>" type="text" value="<?php echo $widget_dribble; ?>" />
        </p>
              
        
         <p>
          <label for="<?php echo $this->get_field_id('widget_linkedin'); ?>"><?php _e('Linkedin'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('widget_linkedin'); ?>" name="<?php echo $this->get_field_name('widget_linkedin'); ?>" type="text" value="<?php echo $widget_linkedin; ?>" />
        </p>
        
         <p>
          <label for="<?php echo $this->get_field_id('widget_copyright'); ?>"><?php _e('Copyright'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('widget_copyright'); ?>" name="<?php echo $this->get_field_name('widget_copyright'); ?>" type="text" value="<?php echo $widget_copyright; ?>" />
        </p>
        
         <p>
          <label for="<?php echo $this->get_field_id('widget_theThemeLab_link'); ?>"><?php _e('TheThemeLad Link'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('widget_theThemeLab_link'); ?>" name="<?php echo $this->get_field_name('widget_theThemeLab_link'); ?>" type="text" value="<?php echo $widget_theThemeLab_link; ?>" />
        </p>
        
         <p>
          <label for="<?php echo $this->get_field_id('widget_theThemeLab_name'); ?>"><?php _e('ThemeLab Name'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('widget_theThemeLab_name'); ?>" name="<?php echo $this->get_field_name('widget_theThemeLab_name'); ?>" type="text" value="<?php echo $widget_theThemeLab_name; ?>" />
        </p>
        <?php
}
}

function myplugin_register_widgets() {
	register_widget( 'FooterWidget' );
}

add_action( 'widgets_init', 'myplugin_register_widgets' );