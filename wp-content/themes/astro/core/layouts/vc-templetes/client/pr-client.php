<?php
 global $clientPromSu;
 if($clientPromSu['clientPromSu']['client_logo']){
     $explo_img = explode(',',$clientPromSu['clientPromSu']['client_logo']);
 }
?>

<div class="row">
 <?php if($explo_img):?>
 <?php foreach($explo_img as $image):?>
        <div class="col-sm-3 col-xs-6">
        <?php 
                 $attachment_image = wp_get_attachment_image_src($image, 'full', false);
                 $link_image =  esc_attr($attachment_image[0]);
        ?>
          <img class="img-responsive" src="<?php echo $link_image; ?>" alt="" />
        </div>
   <?php endforeach; ?>     
   <?php endif; ?>     
 </div>