<?php
$options = get_option('pr_options');
?>
<!--header-->
<header id="navigation">
    <div class="navbar main-nav" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="./">
                        <h1>
                        <?php
                         if(!empty($options['main_logo']['url'])&&is_url_exist($options['main_logo']['url'])) {?>
                            <img class="img-responsive" src="<?php echo $options['main_logo']['url'];?>"  alt="logo"/>
                        <?php }
                            else {
                        ?>
                            <?php echo bloginfo('name'); ?>
                        
                        <?php } ?>
                        </h1>
                    </a>                    
                </div>  
                 <!-- Navigation Menu -->
                <?php if (has_nav_menu('main_navigation')) {
                    $arr = array(
                        'container_class' => 'collapse navbar-collapse navbar-right',
                        'container' => 'nav',
                        'menu_class' => 'nav navbar-nav',
                        'walker' => new My_Walker_Nav_Menu(),
                        'theme_location' => 'main_navigation',
                        'menu' =>  'menu-main',
                         'container_id'=>'main-menu',
                        'depth' => 0
                    );
                    wp_nav_menu( $arr);
                }?>
                <!-- End Navigation Menu -->
                <div class="cart-section">
                    <div class="icons">
                        <a class="cart-contents-1" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart', BLUE_TEXTDOMAIN ); ?>">
                                    <i class="fa fa-shopping-cart"></i>
                        </a>            
                        <i class="fa fa-search"></i>
                    </div>          
                </div>
            </div>
            <div id="cmsblue-search" class="search">
              <form role="search" method="get" id="searchform"  action="<?php echo esc_url(home_url( '/' )); ?>">
                    <input type="text" class="search-form" autocomplete="off" value="" placeholder="<?php _e('Search something..', PR_THEME_NAME); ?>" name="s" id="s" />
                    <span class="search-close">&times;</span>
                    <input type="hidden" name="post_type" value="post">
                </form>
            </div>
        </div>
</header>
<!--End header-->

<!-- Home section ================================================== -->

<!-- End Header ================================================== -->
<!-- End Home section ================================================== -->

 
