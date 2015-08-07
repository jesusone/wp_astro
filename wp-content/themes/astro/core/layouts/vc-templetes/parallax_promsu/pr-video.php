<?php global $pallaxPromSu;?>
<!-- End Portfolio Section ========================================================= -->
<!-- Video Section ========================================================= -->
<div class="video-section <?php echo $pallaxPromSu['pa_el_class']?>">
       <?php $image_attributes = wp_get_attachment_image_src($pallaxPromSu['pr_video_images'], 'full'); ?>
              <img class="img-responsive" src="<?php echo $image_attributes[0]; ?>" alt="" />
              <div class="video-caption">
                <a class="pull-left" href="<?php echo $pallaxPromSu['pr_video_url']; ?>" data-gallery="prettyPhoto"><i class="fa <?php echo  $pallaxPromSu['pr_video_icon'];?>"></i></a>
                <div class="pull-left video-text">
                  <h5><?php echo $pallaxPromSu['pr_video_title']; ?></h5>
                  <p><?php echo $pallaxPromSu['pr_video_description'] ?></p>
                </div>
              </div>
</div>
<!-- End Video Section ========================================================= -->