<?php
/**
 * The templete portfolio.
 *
 * @package cmsbluthemes
 */
 if($_GET['fiter_pofolio'] != 1) {
  get_header(); 
}
?>


	<div id="single-portfolio" class="container">
        <div class="row">
            
                <?php if($smof_data['show_page_title_blog'] || $smof_data['show_page_breadcrumb_blog']) { ?>
                <div class="header-site-wrap">
                    <div class="container container-md-height">
                        <div class="row row-md-height cs-titile-bar">
                            <div class="col-sx-12 col-sm-12 col-md-6 col-lg-6 col-md-height col-middle cs-page-title">
                                <h2 class="page-title">
                                    <?php if($smof_data['show_page_title_blog']) echo cshero_page_title(); ?>
                                </h2>
                            </div>
                            <div class="col-sx-12 col-sm-12 col-md-6 col-lg-6 col-md-height col-middle cs-breadcrumb">
                                <div id="breadcrumb" class="cs-breadcrumb">
                                    <?php if($smof_data['show_page_breadcrumb_blog']) echo cshero_page_breadcrumb($smof_data['delimiter_page_breadcrumb_blog']); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php
                  global $post;
                   $project_layout = (get_post_meta($post->ID, 'pr_layout_promsu', true) != "global") ? get_post_meta($post->ID, 'pr_layout_promsu', true):"layout1" ;
               ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'core/layouts/pages/portfolio/single', "layout1" ); ?>
                <?php endwhile; // end of the loop. ?>

           
        </div>
	</div><!-- #primary -->
<?php 
if($_GET['fiter_pofolio'] != 1) {
 get_footer();
}

 ?>