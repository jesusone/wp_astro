<?php
  /**
  * The default template for displaying content
  * Used for both single and index/archive/search.
 * @package Astro
 */
 
?>


<div class="entry-header">
<?php if (has_post_thumbnail()) {
    echo the_post_thumbnail('full',array('class'=>'img-responsive', 'alt'=>''));
} ?>
<?php if(is_single()){?>
    <h3><?php the_title(); ?></h3>
<?php }else{
    ?>
    <h3 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
<?php } ?>
</div>
<div class="entry-meta">
  <span><a href="#"><i class="fa fa-user"></i> Posted by <?php get_the_author(); ?></a></span>
  <span><a href="#"><i class="fa fa-tag"></i> 
   <?php
    // Tags from post
    foreach (wp_get_post_tags(get_the_ID()) as $tag){
      echo '<a class="tag-link-'.$tag->term_id.'" href="'.get_tag_link($tag->term_id).'">'.$tag->name.'</a>';
    }
    ?>
  </a></span>
  <span><a href="#"><i class="fa fa-comment"></i> <?php echo  wp_count_comments(get_the_ID())->total_comments; ?></a></span>
 </div>
 <div class="entry-post">
    <?php if (is_single()) { ?>
     <?php
        the_content();
        wp_link_pages(array(
            'before' => '<div class="page-links">' . __('Pages:', PR_THEME_NAME),
            'after' => '</div>',
        ));
        ?>
    <?php } else { ?>
    <?php echo substr(get_the_excerpt(), 0,300);  ?>
    <a class="pr-readmore" href="<?php echo esc_url(get_permalink()); ?>" class="readmore"><?php _e('Read More', PR_THEME_NAME); ?></a>
    <?php } ?>
 </div>
  <?php if (is_single()) { ?>
 <div class="social-share">
    <ul>
      <li><a href="#" class="twitter-share-button" data-dnt="true">Tweet</a></li>
      <li><a id="fb-root" href="#"><div class="fb-like" <!-- data-href="https://developers.facebook.com/docs/plugins/ -->" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div></a></li>
      <li><a class="g-plusone" data-size="medium" href="#"></a></li>
      <li><a href="#"><img class="img-responsive" src="<?php echo PR_THEME_URL ?>/images/blog/share4.jpg" alt="" /></a></li>
    </ul>
  </div><!--/social-share-->
  <div class="media author-details">
        <h2><?php echo 'About Author'; ?></h2>
        <a class="pull-left" href="#">
        
        <?php
        $author_bio_avatar_size = apply_filters( 'twentythirteen_author_bio_avatar_size', 74 );
        echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
         ?>
        </a>
        <div class="media-body">              
          <p><?php the_author_meta( 'description' ); ?></p>
          <div class="author-social">
            <span><a href="#"><i class="fa fa-facebook"></i></a></span>
            <span><a href="#"><i class="fa fa-twitter"></i></a></span>
            <span><a href="#"><i class="fa fa-pinterest"></i></a></span>
          </div>
        </div>
      </div><!--author-details-->
 <?php } ?>     
 