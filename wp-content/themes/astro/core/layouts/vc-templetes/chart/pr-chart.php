<?php
   global $chartPromSu, $head_small_title, $head_title, $pre_text;
   $count_item = 3; 
?>
      <div class="container">   
      <?php if($head_small_title!='' ||  $head_title!='' || $pre_text!=''):?>
        <div class="row section-title text-center">
            <div class="col-sm-8 col-sm-offset-2">
                <?php if($head_small_title!='' || $head_title!=''):?>
        <h2><small><?php echo $head_small_title;?></small><?php echo $head_title;?></h2>
                <?php endif; ?>
        <p><?php echo $pre_text;?></p>
      </div>
        </div>     
        <?php endif; ?>
        <div class="row funs text-center">
        <?php for($i=1;$i <= $count_item ; $i++) { ?>
          <div class="col-sm-4 col-xs-4">
            <div class="fun-box">
              <i class="<?php echo $chartPromSu['chartPromSu']['ch_icon'.$i]; ?>"></i> 
              <h2><?php echo $chartPromSu['chartPromSu']['ch_title'.$i]; ?></h2>
              <span class="timer" ><?php echo $chartPromSu['chartPromSu']['ch_value'.$i]; ?></span>
            </div>
          </div>
           <?php } ?>
        </div>
      </div>