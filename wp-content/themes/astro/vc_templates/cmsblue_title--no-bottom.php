<?php
 global $title_option;
?>
  <h2 style="<?php if(!empty($title_option['color'])){ echo "color:".$title_option['color'].";" ;}?>"><?php  echo $title_option['pr_title'] ?></h2>
  <p><?php  echo  $title_option['pr_description'];?></p>