<?php
    /*
    Template Name: Portfolio
    */
?>
<?php get_header(); ?> 
<!-- Portfolio -->
<section id="portfolio" class="inner-page">
    <div class="portfolio-top">
    </div>
    <!-- Portfolio Plus Filters -->
    <div class="portfolioGrid">
        <!-- Portfolio Filters -->
        <div class="text-center">
            <ul id="filters2" class="filters clearfix">
                <li><a href="#" data-filter="*" class="active">All</a></li>
                <li><a href="#" data-filter=".branding">Branding</a></li>
                <li><a href="#" data-filter=".design">Design</a></li>
                <li><a href="#" data-filter=".photography">Photography</a></li>
                <li><a href="#" data-filter=".videography">Videography</a></li>
                <li><a href="#" data-filter=".web">Web</a></li>
            </ul>
        </div>
        <!--/Portfolio Filters -->
        <!-- Portfolio Wrapper -->
        <div id="portfolio-wrapper" class="grid-wrapper">
            <!-- Portfolio Item With PrettyPhoto  -->
            <div class="portfolio-item branding web">
                <div class="portfolio-image">
                    <img src="images/portfolio/portfolio2.jpg" alt="Portfolio 1"/>
                </div>
                <a title="Project Title" rel="prettyPhoto[galname]" href="images/portfolio/portfolio2.jpg">
                    <div class="project-overlay">
                        <div class="project-info">
                            <div class="cat-icon">
                                <i class="fa fa-photo"></i>
                            </div>
                            <h4>Project Title</h4>
                            <p class="project-categories">
                                Image Popup
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <!--/Portfolio Item With PrettyPhoto  -->
            <!-- Portfolio Item Video Expander  -->
            <div class="portfolio-item design photography web">
                <div class="portfolio-image">
                    <img src="images/portfolio/portfolio3.jpg" alt="Portfolio 1"/>
                </div>
                <div class="project-overlay">
                    <div class="expand-link">
                        <a class="open-project" href="project-video-expander.html" title="Open Project"></a>
                    </div>
                    <div class="project-info">
                        <div class="cat-icon">
                            <i class="fa fa-film"></i>
                        </div>
                        <h4>Project Title</h4>
                        <p class="project-categories">
                            Video Expander
                        </p>
                    </div>
                </div>
            </div>
            <!--/Portfolio Item Video Expander  -->
            <!-- Portfolio Item External Project -->
            <div class="portfolio-item design videography ">
                <div class="portfolio-image">
                    <img src="images/portfolio/portfolio1.jpg" alt="Portfolio 1"/>
                </div>
                <a class="open-project" href="project_01.html" title="Open Project">
                    <div class="project-overlay">
                        <div class="project-info">
                            <div class="cat-icon">
                                <i class="fa fa-plus-circle"></i>
                            </div>
                            <h4>Project Title</h4>
                            <p class="project-categories">
                                External Project
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <!--/Portfolio Item External Project -->
            <!-- Portfolio Item video popup -->
            <div class="portfolio-item photography branding web">
                <div class="portfolio-image">
                    <img src="images/portfolio/portfolio4.jpg" alt="Portfolio 1"/>
                </div>
                <a title="Project Title" rel="prettyPhoto[galname]" href="http://vimeo.com/22439234">
                    <div class="project-overlay">
                        <div class="project-info">
                            <div class="cat-icon">
                                <i class="fa fa-film"></i>
                            </div>
                            <h4>Project Title</h4>
                            <p class="project-categories">
                                Video Popup
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Portfolio Item Video popup -->
            <!-- Portfolio Item External Page -->
            <div class="portfolio-item design photography branding web">
                <div class="portfolio-image">
                    <img src="images/portfolio/portfolio5.jpg" alt="Portfolio 1"/>
                </div>
                <a class="open-project" href="project_02.html" title="Open Project">
                    <div class="project-overlay">
                        <div class="project-info">
                            <div class="cat-icon">
                                <i class="fa fa-plus-circle"></i>
                            </div>
                            <h4>Project Title</h4>
                            <p class="project-categories">
                                External Project
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <!--/Portfolio Item External Page -->
            <!-- Portfolio Item Normal Expander -->
            <div class="portfolio-item design branding videography ">
                <div class="portfolio-image">
                    <img src="images/portfolio/portfolio6.jpg" alt="Portfolio 1"/>
                </div>
                <div class="project-overlay">
                    <div class="expand-link">
                        <a class="open-project" href="project-image-expander.html" title="Open Project"></a>
                    </div>
                    <div class="project-info">
                        <div class="cat-icon">
                            <i class="fa fa-plus-circle"></i>
                        </div>
                        <h4>Project Title</h4>
                        <p class="project-categories">
                            Normal Expander
                        </p>
                    </div>
                </div>
            </div>
            <!--/Portfolio Item Normal Expander -->
            <!-- Portfolio Item External Page  -->
            <div class="portfolio-item design videography web">
                <div class="portfolio-image">
                    <img src="images/portfolio/portfolio7.jpg" alt="Portfolio 1"/>
                </div>
                <a href="project_03.html" class="external">
                    <div class="project-overlay">
                        <div class="project-info">
                            <div class="cat-icon">
                                <i class="fa fa-plus-circle"></i>
                            </div>
                            <h4>Project Title</h4>
                            <p class="project-categories">
                                External Project
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <!--/Portfolio Item External Page  -->
            <!-- Portfolio Item With PrettyPhoto  -->
            <div class="portfolio-item photography design web">
                <div class="portfolio-image">
                    <img src="images/portfolio/portfolio8.jpg" alt="Portfolio 1"/>
                </div>
                <a title="Project Title" rel="prettyPhoto[galname]" href="images/portfolio/portfolio8.jpg">
                    <div class="project-overlay">
                        <div class="project-info">
                            <div class="cat-icon">
                                <i class="fa fa-photo"></i>
                            </div>
                            <h4>Project Title</h4>
                            <p class="project-categories">
                                Image Popup
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <!--/Portfolio Item With PrettyPhoto  -->
        </div>
        <!--/Portfolio Wrap -->
    </div>
    <!--/Portfolio Plus Filters -->
    <div class="portfolio-bottom">
    </div>
    <!-- Project Page Holder-->
    <div id="project-page-holder">
        <div class="clear">
        </div>
        <div id="project-page-data">
        </div>
    </div>
    <!--/Project Page Holder-->
</section>
<!--/Portfolio -->
<?php get_footer(); ?>