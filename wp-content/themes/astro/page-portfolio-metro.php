<?php
/*
Template Name: Page Portfolio metro
*/
?>
<?php get_header(); ?> 
<!-- Portfolio -->
<section id="portfolio" class="inner-page">
<div class="portfolio-top">
</div>
<section id="options" class="light-bg">
<ul id="filters" data-option-key="filter">
    <li><a href="#" data-filter="*" class="selected active">View All</a></li>
    <li><a href="#" data-filter=".marketing">Marketing</a></li>
    <li><a href="#" data-filter=".photography">Photography</a></li>
    <li><a href="#" data-filter=".01">Media</a></li>
    <li><a href="#" data-filter=".print">Print</a></li>
    <li><a href="#" data-filter=".webdesign">Web Design</a></li>
</ul>
</section>
<section id="portfolio-wrapper">
<ul class="portfolio grid box">
    <!-- Item 1 -->
    <li class="grid-item 01 item-high">
    <div class="project-link">
        <a href="http://vimeo.com/22439234" title="Project Title" rel="prettyPhoto">
        <div class="grid-item-on-hover">
            <div class="grid-text">
                <h1>Project Title</h1>
            </div>
            <span>retail, marketing</span>
        </div>
        <img src="images/portfolio/portfolio-sm-4.jpg" alt=" "/>
        </a>
    </div>
    </li>  
    <!-- ./Item 1 -->
    <!-- Item 2 -->
    <li class="grid-item item-small">
    <div class="project-link">
        <a href="project_01.html">
        <div class="grid-item-on-hover">
            <div class="grid-text">
                <h1>Project Title</h1>
            </div>
            <span>photography, media</span>
        </div>
        <img src="images/portfolio/portfolio-sm-2.jpg" alt=" "/>
        </a>
    </div>
    </li>
    <!-- ./Item 2 -->
    <!-- Item 3 -->
    <li class="grid-item item-small print photography">
    <div class="expand-link project-link">
        <a class="open-project" href="project-image-expander.html" title="Open Project">
        <div class="grid-item-on-hover">
            <div class="grid-text">
                <h1>Project Title</h1>
            </div>
            <span>photography, printing identity</span>
        </div>
        <img src="images/portfolio/portfolio-sm-1.jpg" alt=" "/>
        </a>
    </div>
    </li>
    <!-- ./Item 3 -->
    <!-- Item 4 -->
  <li class="grid-item item-big marketing webdesign">
    <div class="project-link">
        <a href="project_02.html">
        <div class="grid-item-on-hover">
            <div class="grid-text">
                <h1>A Long Project Title will fit here</h1>
            </div>
            <span>web design, tech</span>
        </div>
        <img src="images/portfolio/portfolio-sm-3.jpg" alt=" "/>
        </a>
    </div>
    </li>
    <!-- ./Item 4 -->
    <!-- Item 5 -->
    <li class="grid-item photography item-wide">
    <div class="expand-link project-link">
        <a class="open-project" href="project-video-expander.html" title="Open Project">
        <div class="grid-item-on-hover">
            <div class="grid-text">
                <h1>Semi long Project Title</h1>
            </div>
            <span>photography</span>
        </div>
        <img src="images/portfolio/portfolio-sm-6.jpg" alt=""/>
        </a>
    </div>
    </li>
    <!-- ./Item 5 -->
    <!-- Item 6 -->
    <li class="grid-item item-big webdesign marketing photography print">
    <div class="project-link">
        <a href="images/portfolio/portfolio-sm-5.jpg" title="Project Title" rel="prettyPhoto[pp_gal]">
        <div class="grid-item-on-hover">
            <div class="grid-text">
                <h1>Project Title</h1>
            </div>
            <span>media, print</span>
        </div>
        <img src="images/portfolio/portfolio-sm-5.jpg" alt=""/>
        </a>
    </div>
    </li>
    <!-- ./Item 6 -->
    <!-- Item 7 -->
    <li class="grid-item item-small">
    <div class="project-link">
        <a href="project_03.html">
        <div class="grid-item-on-hover">
            <div class="grid-text">
                <h1>Project Title</h1>
            </div>
            <span>photography, branding</span>
        </div>
        <img src="images/portfolio/portfolio-sm-7.jpg" alt=""/>
        </a>
    </div>
    </li>
    <!-- ./Item 7 -->
    <!-- Item 8 -->
    <li class="grid-item 01 marketing print item-wide">
    <div class="project-link">
        <a href="images/portfolio/portfolio-sm-8.jpg" title="Project Title" rel="prettyPhoto[pp_gal]">
        <div class="grid-item-on-hover">
            <div class="grid-text">
                <h1>Project Title</h1>
            </div>
            <span>Marketing, Print</span>
        </div>
        <img src="images/portfolio/portfolio-sm-8.jpg" alt=""/>
        </a>
    </div>
    </li>
    <!-- ./Item 8 -->
    <!-- Item 9 -->
    <li class="grid-item webdesign marketing print item-small">
    <div class="project-link">
        <a href="images/portfolio/portfolio-sm-9.jpg" title="Project Title" rel="prettyPhoto[pp_gal]">
        <div class="grid-item-on-hover">
            <div class="grid-text">
                <h1>Project Title</h1>
            </div>
            <span>photography</span>
        </div>
        <img src="images/portfolio/portfolio-sm-9.jpg" alt=""/>
        </a>
    </div>
    </li>
    <!-- ./Item 9 -->
    <!-- Item 10 -->
    <li class="grid-item 01 item-wide">
    <div class="project-link">
        <a href="portfolio-item-4.html">
        <div class="grid-item-on-hover">
            <div class="grid-text">
                <h1>Project Title</h1>
            </div>
            <span>branding, business cards</span>
        </div>
        <img src="images/portfolio/portfolio-sm-10.jpg" alt=""/>
        </a>
    </div>
    </li>
    <!-- ./Item 10 -->
</ul>
</section>
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