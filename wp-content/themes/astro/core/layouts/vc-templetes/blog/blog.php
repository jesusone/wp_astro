<?php
while(have_posts()){
    the_post();
   ?>
   <div class="blog" style="<?php echo  get_permalink(); ?>">
     <?php 
         if ( has_post_thumbnail() ) {
             $attachment_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full', false);
             $link_image =  esc_attr($attachment_image[0]);
         }
     ?>
      <div class="post-one-bg" style="background-image:url('<?php echo $link_image;?>');"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-2">
            <div class="row">
              <div class="col-sm-8 text-center">
                <a class="day" href="<?php echo  get_permalink(); ?>"><?php the_time('j') ?></a>
              </div>
              <div class="col-sm-4">
                <a class="month" href="<?php echo  get_permalink(); ?>"><?php the_time('F'); ?> <span><?php the_time('Y'); ?> </span></a>
              </div>
            </div>
          </div>
          <div class="col-sm-10">
            <div class="post-info">
              <a href="<?php echo  get_permalink(); ?>"><h2><?php echo esc_html(the_title()); ?></h2></a>
              <div class="post-meta">
                <span><a href="#"><i class="fa fa-user"></i>Posted By: <?php  the_author(); ?></a></span>
                <span><a href="#"><i class="fa fa-comments"></i> <?php comments_number( '0', '1', '%' ); ;?></a></span>
              </div>              
            </div>
          </div>
        </div>
      </div>
    </div>
<?php    
}
?>
