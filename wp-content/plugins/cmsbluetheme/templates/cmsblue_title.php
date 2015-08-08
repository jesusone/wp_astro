<?php
 global $title_option;
?>
<div class="section-title text-center col-sm-8 col-sm-offset-2">
  <h2>
  <small style="<?php if(!empty($title_option['color'])){ echo "color:".$title_option['color'].";" ;}  ?>"><?php echo $title_option['pr_small_title']; ?></small>
  <?php  echo $title_option['pr_title'] ?></h2>
  <p><?php echo  $title_option['pr_description'];?></p>
</div>

