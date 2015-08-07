<?php
/**
 * @package 
 */
?>

<?php global $smof_data; ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php echo pr_title_render(); ?>
    <?php echo pr_info_bar_render(); ?>
    <?php if(!is_single()) the_content(); ?>
    <?php echo pr_content_render(); ?>
</article><!-- #post-## -->
