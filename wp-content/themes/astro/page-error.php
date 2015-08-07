<?php
    /**
    * Template Name: Error
    * The template for displaying 404 pages (Not Found)
    *
    * @package WordPress
    * @subpackage promsu
    * @since promsu 1.0
    */

    get_header(); ?>

<!-- Blog Section -->
<section id="single" class="inner-page">
<div class="container">
    <div class="row">
        <!-- ============ START 404 =========== -->
        <div class="col-md-6 col-md-offset-3 text-center">
       <?php if (have_posts()): the_post(); ?>
            <?php the_content(); ?>
            <?php wp_link_pages(); ?>
       
        <?php endif; ?>
        </div>
    </div>
</div>
</section>

<?php get_footer(); ?>