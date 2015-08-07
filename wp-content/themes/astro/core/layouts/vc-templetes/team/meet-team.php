<?php
global $team_option, $wp_query;
?>
<!-- Team Section ========================================================= -->

<div id="team"><!-- Start Team  -->
    <div class="container padding-bottom">
      <div class="row text-center">
        <div class="col-sm-8 col-sm-offset-2 section-title-two">
          <h2><?php echo  $team_option['about_title'] ?></h2>
          <p><?php echo  $team_option['about_desc'] ?></p>
        </div>  
        <?php if($wp_query->have_posts()) { 
            while ( $wp_query->have_posts() ) : $wp_query->the_post();
            ?>
            <!-- Team member 1-->
            <div class="col-sm-3">
                <div class="team-member">
                <?php $attachment_id = get_the_post_thumbnail($wp_query->ID,'full',array('class' => 'img-responsive')); ?>
                <?php echo $attachment_id ?>
                <div class="member-text">
                    <h5 class="title"><?php echo the_title(); ?></h5>
                    <h6><?php echo  get_post_meta(get_the_ID(), 'team_position', true)?></h6>
                        <div class="social-icons">
                            <a href="#"><span class="fa fa-facebook"></span></a>
                            <a href="#"><span class="fa fa-google-plus"></span></a>
                            <a href="#"><span class="fa fa-twitter"></span></a>
                            <a href="#"><span class="fa fa-envelope"></span></a>
                        </div>
                  </div>
                </div>
              
            </div>  
            <!--End team member 1-->
            <?php 
           endwhile;
           }
            else {
                echo "No member is teams.";
            }
             ?>
            </div>
          </div>
        </div>     
    
<!-- End Team Section ====================================================== -->
