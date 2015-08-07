<?php
    global $smof_data;
 
?>
<!-- Protfolio Single Section -->
<section id="project" class="project inner-page">
    <!-- inner-section : starts -->
    <section class="inner-wrap">
        <div class="row">
            <div class="col-md-12">
                <!-- project-image-carousel : starts -->
                <div class="project-carousel owl-carousel">
                    <div class="item">
                        <article class="project-block">
                            <div class="project-block-top">
                                <a rel="prettyPhoto[pp_gal]" href="images/projects/01.jpg">
                                    <img alt="" title="" class="img-responsive" src="images/projects/01.jpg"/>
                                </a>
                            </div>
                        </article>
                    </div>
                    <!-- carousel item : ends-->
                    <div class="item">
                        <article class="project-block">
                            <div class="project-block-top">
                                <a rel="prettyPhoto[pp_gal]" href="images/projects/02.jpg">
                                    <img alt="" title="" class="img-responsive" src="images/projects/02.jpg"/>
                                </a>
                            </div>
                        </article>
                    </div>
                    <!-- carousel item : ends-->
                    <div class="item">
                        <article class="project-block">
                            <div class="project-block-top">
                                <a rel="prettyPhoto[pp_gal]" href="images/projects/03.jpg">
                                    <img alt="" title="" class="img-responsive" src="images/projects/03.jpg"/>
                                </a>
                            </div>
                        </article>
                    </div>
                    <!-- carousel item : ends-->
                    <div class="item">
                        <article class="project-block">
                            <div class="project-block-top">
                                <a rel="prettyPhoto[pp_gal]" href="images/projects/01.jpg">
                                    <img alt="" title="" class="img-responsive" src="images/projects/04.jpg"/>
                                </a>
                            </div>
                        </article>
                    </div>
                    <!-- carousel item : ends-->
                    <div class="item">
                        <article class="project-block">
                            <div class="project-block-top">
                                <a rel="prettyPhoto[pp_gal]" href="images/projects/02.jpg">
                                    <img alt="" title="" class="img-responsive" src="images/projects/05.jpg"/>
                                </a>
                            </div>
                        </article>
                    </div>
                    <!-- carousel item : ends-->
                    <div class="item">
                        <article class="project-block">
                            <div class="project-block-top">
                                <a rel="prettyPhoto[pp_gal]" href="images/projects/03.jpg">
                                    <img alt="" title="" class="img-responsive" src="images/projects/06.jpg"/>
                                </a>
                            </div>
                        </article>
                    </div>
                    <!-- carousel item : ends-->
                </div>
            </div>
        </div>
    </section>
    <!-- inner-section : ends -->
    <section class="container">
        <div class="row new-line">
            <div class="col-md-2 col-sm-2">
                <div class="text-center">
                    <?php  
                        $grav_size = 165;
                        if (function_exists('get_avatar')) {
                              echo get_avatar(get_the_author_meta('email'), $grav_size);
                       }
                    ?>
                   <!-- <img alt="client" title="" class="img-responsive" src="images/team/5.jpg"/>-->
                </div>
                <?php 
                    $post_tmp = get_post(get_the_ID());
                    $user_id = $post_tmp->post_author;
                    $full_name = get_the_author_meta('display_name',$user_id);
                    $description = get_the_author_meta('description',$user_id);
                                       
                ?>   
                <h4><?php echo $full_name ?></h4>
                <h5><?php echo $description ?></h5>
            </div>
            <div class="col-md-6 col-sm-6">
                <p class="heroline">
                    A great project and a perfect delivery. We are actually stunned by the commitment and dedication contributed by team Promsu in this project. This is a great experience as a client, we highly recommend their service to each and every media houses across the globe.
                </p>
            </div>
            <div class="col-md-4 col-sm-4">
                <h5>At a Glance</h5>
                <ul class="list-items">
                    <li>
                        <div class="list-label">
                            Category
                        </div>
                        <div class="list-des">
                            <?php echo strip_tags (get_the_term_list($post->ID, 'portfolio_category', '', ', ', '')); ?>
                        </div>
                    </li>
                    <li>
                        <div class="list-label">
                            Date
                        </div>
                        <div class="list-des">
                        <?php the_time('F , Y'); ?>
                        </div>
                    </li>
                    <li>
                        <div class="list-label">
                            Tools
                        </div>
                        <div class="list-des">
                            Photoshop, illustrator, Notepad
                        </div>
                    </li>
                    <li>
                        <div class="list-label">
                            Client
                        </div>
                        <div class="list-des">
                            TheThemelab
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row new-line">
            <article class="col-md-12 col-sm-12 project-desc">
                <h3 class="sub-heading">Project History</h3>
                <p>
                   <?php echo do_shortcode(get_the_content()); ?> 
                </p>
                <a class="btn btn-promsu" href="#">Visit Website</a>
            </article>
        </div>
    </section>
</section>
<!-- End Portfolio Single Section -->


<article id="cs_post_<?php the_ID(); ?>" <?php post_class(); ?>>
 
    <?php //echo do_shortcode(get_the_content()); ?>
</article>