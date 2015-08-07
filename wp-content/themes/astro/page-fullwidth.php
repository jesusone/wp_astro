<?php
    /*
    Template Name: Full Width
    */
    get_header(); ?>
<div id="home-full" class="full-width">
    <?php if (have_posts()): the_post(); ?>
            <?php the_content(); ?>
            <?php wp_link_pages(); ?>
       
        <?php endif; ?> 
</div>
<?php get_footer(); ?>