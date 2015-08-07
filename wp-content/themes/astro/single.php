<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
get_header(); ?>

	<section id="blog-details" class="content-area">
		<div class="container">
     <div class="row blog-item">    
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 blog-content">
		    <?php /* The loop */;?>
		    <?php while ( have_posts() ) : the_post(); ?>
            	<?php get_template_part('core/layouts/pages/single/content/content', get_post_format()); ?>

			    <?php 
			    	if(!get_post_format())
					    comments_template(); ?>
			<?php endwhile; ?>
         </div>
         <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <?php get_sidebar(); ?>
        </div>
       </div><!-- #blog-item -->
		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_footer(); ?>