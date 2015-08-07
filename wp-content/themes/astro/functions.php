<?php
    ob_start();

    #-----------------------------------------------------------------#
    # Get define directory core                                       #
    #-----------------------------------------------------------------#
    define('PR_CORE_PATH', get_template_directory() . '/core/');      
    include_once (PR_CORE_PATH."pr_init_load.php");
    include_once (PR_CORE_PATH."templetes.function.php");  
    #-----------------------------------------------------------------#
    # Add Theme Option                                                #
    #-----------------------------------------------------------------#
    if(!class_exists('ReduxFramework')){
        require( get_template_directory() . '/inc/ReduxCore/framework.php' );
        require( get_template_directory() . '/inc/themeoption/option-init.php' ); 
    } 
    /* Add base functions */
    require( get_template_directory() . '/inc/core.class.php' );

    if(class_exists("CMSblueCore")){
        $cms_base = new  CMSblueCore();
    }
    #-----------------------------------------------------------------#
    # Build SCSS                                              #
    #-----------------------------------------------------------------# 
    if(!class_exists('scssc')){
        require( get_template_directory() . '/inc/scss/scss.inc.php' );
    } 
    if(!class_exists('cmsblueScssInit')){
        require( get_template_directory() . '/inc/scss/scss-init.php' );
    }


    #-----------------------------------------------------------------#
    # TGM_Plugin_Activation                                           #
    #-----------------------------------------------------------------#

    require_once(PR_ADMIN_PATH . 'plugin-activation/class-tgm-plugin-activation.php');
    require_once(PR_ADMIN_PATH . 'plugin-activation/pr-plugin-load.php');

    #-----------------------------------------------------------------#
    # Post Types in core                                              #
    #-----------------------------------------------------------------#
    $options = get_option(OPTIONS);
    //if (isset($options['show_portfolio_option']) && $options['show_portfolio_option']) {
    include_once(get_template_directory() . '/core/pr_postype/portfolio.php');
    //}
    include_once(get_template_directory() . '/core/pr_postype/team.php');
    #-----------------------------------------------------------------#
    # Register Menu                                                   #
    #-----------------------------------------------------------------#
    register_nav_menu('main_navigation', __('Main Navigation', PR_THEME_NAME));
    #-----------------------------------------------------------------#
    # Add Metaboxes                                                   #
    #-----------------------------------------------------------------#
    include_once(get_template_directory().'/core/metaboxes.php');

    #-----------------------------------------------------------------#
    # Load Header Themes                                              #
    #-----------------------------------------------------------------#
    function pr_load_hearder() {
        global $post,$pr_options;
        $pr_header = get_post_meta($post->ID, 'pr_header', true)?get_post_meta($post->ID, 'pr_header', true): $pr_options['header_layout'];
        switch ($pr_header) { 
            case 'none-cart':
                get_template_part('core/layouts/headers/header', 'none-cart');
                break;
            case 'default':
                get_template_part('core/layouts/headers/header', 'default');  
                break;  
        }

    }
    #-----------------------------------------------------------------#
    # register widget footer                                          #
    #-----------------------------------------------------------------#
    function prosum_sidebar_footer() {
        if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Bottom Widget $i")):
            dynamic_sidebar('pro-footer-sidebar') ;
            endif;
    }
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Footer sidebar', PR_THEME_NAME),
            'id' => 'pro-footer-sidebar',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<div class="heading"><h2 class="wg-title"><span>',
            'after_title' => '<span></h2></div>',
        ));
        register_sidebar( array(
            'name' => __( 'Main Sidebar', PR_THEME_NAME ),
            'id' => 'sidebar-1',
            'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', PR_THEME_NAME ),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3 class="wg-title"><span>',
            'after_title' => '</span></h3>',
        ) );
    }
     /**
    * Astro setup.
    *
    * Sets up theme defaults and registers the various WordPress features that
    * Astro supports.
    *
    * @uses load_theme_textdomain() For translation/localization support.
    * @uses add_editor_style() To add Visual Editor stylesheets.
    * @uses add_theme_support() To add support for automatic feed links, post
    * formats, and post thumbnails.
    * @uses register_nav_menu() To add support for a navigation menu.
    * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
    *
    * @since Astro 1.0
    */
    function astro_setup() {
        /*
        * Makes Twenty Thirteen available for translation.
        *
        * Translations can be added to the /languages/ directory.
        * If you're building a theme based on Twenty Thirteen, use a find and
        * replace to change 'twentythirteen' to the name of your theme in all
        * template files.
        */
        load_theme_textdomain( 'PR_THEME_NAME', get_template_directory() . '/languages' );

        /*
        * This theme styles the visual editor to resemble the theme style,
        * specifically font, colors, icons, and column width.
        */
        add_editor_style( array( 'css/editor-style.css', 'genericons/genericons.css', twentythirteen_fonts_url() ) );

        // Adds RSS feed links to <head> for posts and comments.
        add_theme_support( 'automatic-feed-links' );

        /*
        * Switches default core markup for search form, comment form,
        * and comments to output valid HTML5.
        */
        add_theme_support( 'html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ) );

        /*
        * This theme supports all available post formats by default.
        * See http://codex.wordpress.org/Post_Formats
        */
        add_theme_support( 'post-formats', array(
           'video', 'audio' , 'gallery', 'link', 'quote'
        ) );



        /*
        * This theme uses a custom image size for featured images, displayed on
        * "standard" posts and pages.
        */
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 604, 270, true );

        // This theme uses its own gallery styles.
        add_filter( 'use_default_gallery_style', '__return_false' );
    }
    add_action( 'after_setup_theme', 'astro_setup' );

    //File old
    /*
    * Set up the content width value based on the theme's design.
    *
    * @see twentythirteen_content_width() for template-specific adjustments.
    */
    if ( ! isset( $content_width ) )
        $content_width = 604;

    /**
    * Add support for a custom header image.
    */
    require get_template_directory() . '/inc/custom-header.php';

    /**
    * Twenty Thirteen only works in WordPress 3.6 or later.
    */
    if ( version_compare( $GLOBALS['wp_version'], '3.6-alpha', '<' ) )
        require get_template_directory() . '/inc/back-compat.php';

   

    /**
    * Return the Google font stylesheet URL, if available.
    *
    * The use of Source Sans Pro and Bitter by default is localized. For languages
    * that use characters not supported by the font, the font can be disabled.
    *
    * @since Twenty Thirteen 1.0
    *
    * @return string Font stylesheet or empty string if disabled.
    */
    function twentythirteen_fonts_url() {
        $fonts_url = '';

        /* Translators: If there are characters in your language that are not
        * supported by Source Sans Pro, translate this to 'off'. Do not translate
        * into your own language.
        */
        $source_sans_pro = _x( 'on', 'Source Sans Pro font: on or off', 'twentythirteen' );

        /* Translators: If there are characters in your language that are not
        * supported by Bitter, translate this to 'off'. Do not translate into your
        * own language.
        */
        $bitter = _x( 'on', 'Bitter font: on or off', 'twentythirteen' );

        if ( 'off' !== $source_sans_pro || 'off' !== $bitter ) {
            $font_families = array();

            if ( 'off' !== $source_sans_pro )
                $font_families[] = 'Source Sans Pro:300,400,700,300italic,400italic,700italic';

            if ( 'off' !== $bitter )
                $font_families[] = 'Bitter:400,700';

            $query_args = array(
                'family' => urlencode( implode( '|', $font_families ) ),
                'subset' => urlencode( 'latin,latin-ext' ),
            );
            $fonts_url = add_query_arg( $query_args, "//fonts.googleapis.com/css" );
        }

        return $fonts_url;
    }

    /**
    * Enqueue scripts and styles for the front end.
    *
    * @since Twenty Thirteen 1.0
    */
    function twentythirteen_scripts_styles() {
        /*
        * Adds JavaScript to pages with the comment form to support
        * sites with threaded comments (when in use).
        */
        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
            wp_enqueue_script( 'comment-reply' );

        // Adds Masonry to handle vertical alignment of footer widgets.
        if ( is_active_sidebar( 'sidebar-1' ) )
            wp_enqueue_script( 'jquery-masonry' );

        // Loads JavaScript file with functionality specific to Twenty Thirteen.
        //wp_enqueue_script( 'twentythirteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '2014-06-08', true );

        // Add Source Sans Pro and Bitter fonts, used in the main stylesheet.
        wp_enqueue_style( 'twentythirteen-fonts', twentythirteen_fonts_url(), array(), null );

        

        // Loads the Internet Explorer specific stylesheet.
        wp_enqueue_style( 'twentythirteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentythirteen-style' ), '2013-07-18' );
        wp_style_add_data( 'twentythirteen-ie', 'conditional', 'lt IE 9' );
    }
    add_action( 'wp_enqueue_scripts', 'twentythirteen_scripts_styles' );

    /**
    * Filter the page title.
    *
    * Creates a nicely formatted and more specific title element text for output
    * in head of document, based on current view.
    *
    * @since Twenty Thirteen 1.0
    *
    * @param string $title Default title text for current view.
    * @param string $sep   Optional separator.
    * @return string The filtered title.
    */
    function twentythirteen_wp_title( $title, $sep ) {
        global $paged, $page;

        if ( is_feed() )
            return $title;

        // Add the site name.
        $title .= get_bloginfo( 'name', 'display' );

        // Add the site description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
            $title = "$title $sep $site_description";

        // Add a page number if necessary.
        if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
            $title = "$title $sep " . sprintf( __( 'Page %s', 'twentythirteen' ), max( $paged, $page ) );

        return $title;
    }
    add_filter( 'wp_title', 'twentythirteen_wp_title', 10, 2 );



    if ( ! function_exists( 'twentythirteen_entry_meta' ) ) :
        /**
        * Print HTML with meta information for current post: categories, tags, permalink, author, and date.
        *
        * Create your own twentythirteen_entry_meta() to override in a child theme.
        *
        * @since Twenty Thirteen 1.0
        */
        function twentythirteen_entry_meta() {
            if ( is_sticky() && is_home() && ! is_paged() )
                echo '<span class="featured-post">' . __( 'Sticky', 'twentythirteen' ) . '</span>';

            if ( ! has_post_format( 'link' ) && 'post' == get_post_type() )
                twentythirteen_entry_date();

            // Translators: used between list items, there is a space after the comma.
            $categories_list = get_the_category_list( __( ', ', 'twentythirteen' ) );
            if ( $categories_list ) {
                echo '<span class="categories-links">' . $categories_list . '</span>';
            }

            // Translators: used between list items, there is a space after the comma.
            $tag_list = get_the_tag_list( '', __( ', ', 'twentythirteen' ) );
            if ( $tag_list ) {
                echo '<span class="tags-links">' . $tag_list . '</span>';
            }

            // Post author
            if ( 'post' == get_post_type() ) {
                printf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
                    esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
                    esc_attr( sprintf( __( 'View all posts by %s', 'twentythirteen' ), get_the_author() ) ),
                    get_the_author()
                );
            }
        }
        endif;

    if ( ! function_exists( 'twentythirteen_entry_date' ) ) :
        /**
        * Print HTML with date information for current post.
        *
        * Create your own twentythirteen_entry_date() to override in a child theme.
        *
        * @since Twenty Thirteen 1.0
        *
        * @param boolean $echo (optional) Whether to echo the date. Default true.
        * @return string The HTML-formatted post date.
        */
        function twentythirteen_entry_date( $echo = true ) {
            if ( has_post_format( array( 'chat', 'status' ) ) )
                $format_prefix = _x( '%1$s on %2$s', '1: post format name. 2: date', 'twentythirteen' );
            else
                $format_prefix = '%2$s';

            $date = sprintf( '<span class="date"><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a></span>',
                esc_url( get_permalink() ),
                esc_attr( sprintf( __( 'Permalink to %s', 'twentythirteen' ), the_title_attribute( 'echo=0' ) ) ),
                esc_attr( get_the_date( 'c' ) ),
                esc_html( sprintf( $format_prefix, get_post_format_string( get_post_format() ), get_the_date() ) )
            );

            if ( $echo )
                echo $date;

            return $date;
        }
        endif;

    if ( ! function_exists( 'twentythirteen_the_attached_image' ) ) :
        /**
        * Print the attached image with a link to the next attached image.
        *
        * @since Twenty Thirteen 1.0
        */
        function twentythirteen_the_attached_image() {
            /**
            * Filter the image attachment size to use.
            *
            * @since Twenty thirteen 1.0
            *
            * @param array $size {
            *     @type int The attachment height in pixels.
            *     @type int The attachment width in pixels.
            * }
            */
            $attachment_size     = apply_filters( 'twentythirteen_attachment_size', array( 724, 724 ) );
            $next_attachment_url = wp_get_attachment_url();
            $post                = get_post();

            /*
            * Grab the IDs of all the image attachments in a gallery so we can get the URL
            * of the next adjacent image in a gallery, or the first image (if we're
            * looking at the last image in a gallery), or, in a gallery of one, just the
            * link to that image file.
            */
            $attachment_ids = get_posts( array(
                'post_parent'    => $post->post_parent,
                'fields'         => 'ids',
                'numberposts'    => -1,
                'post_status'    => 'inherit',
                'post_type'      => 'attachment',
                'post_mime_type' => 'image',
                'order'          => 'ASC',
                'orderby'        => 'menu_order ID'
            ) );

            // If there is more than 1 attachment in a gallery...
            if ( count( $attachment_ids ) > 1 ) {
                foreach ( $attachment_ids as $attachment_id ) {
                    if ( $attachment_id == $post->ID ) {
                        $next_id = current( $attachment_ids );
                        break;
                    }
                }

                // get the URL of the next image attachment...
                if ( $next_id )
                    $next_attachment_url = get_attachment_link( $next_id );

                // or get the URL of the first image attachment.
                else
                    $next_attachment_url = get_attachment_link( array_shift( $attachment_ids ) );
            }

            printf( '<a href="%1$s" title="%2$s" rel="attachment">%3$s</a>',
                esc_url( $next_attachment_url ),
                the_title_attribute( array( 'echo' => false ) ),
                wp_get_attachment_image( $post->ID, $attachment_size )
            );
        }
        endif;

    /**
    * Return the post URL.
    *
    * @uses get_url_in_content() to get the URL in the post meta (if it exists) or
    * the first link found in the post content.
    *
    * Falls back to the post permalink if no URL is found in the post.
    *
    * @since Twenty Thirteen 1.0
    *
    * @return string The Link format URL.
    */
    function twentythirteen_get_link_url() {
        $content = get_the_content();
        $has_url = get_url_in_content( $content );

        return ( $has_url ) ? $has_url : apply_filters( 'the_permalink', get_permalink() );
    }

    if ( ! function_exists( 'twentythirteen_excerpt_more' ) && ! is_admin() ) :
        /**
        * Replaces "[...]" (appended to automatically generated excerpts) with ...
        * and a Continue reading link.
        *
        * @since Twenty Thirteen 1.4
        *
        * @param string $more Default Read More excerpt link.
        * @return string Filtered Read More excerpt link.
        */
        function twentythirteen_excerpt_more( $more ) {
            $link = sprintf( '<a href="%1$s" class="more-link">%2$s</a>',
                esc_url( get_permalink( get_the_ID() ) ),
                /* translators: %s: Name of current post */
                sprintf( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'twentythirteen' ), '<span class="screen-reader-text">' . get_the_title( get_the_ID() ) . '</span>' )
            );
            return ' &hellip; ' . $link;
        }
        add_filter( 'excerpt_more', 'twentythirteen_excerpt_more' );
        endif;

    /**
    * Extend the default WordPress body classes.
    *
    * Adds body classes to denote:
    * 1. Single or multiple authors.
    * 2. Active widgets in the sidebar to change the layout and spacing.
    * 3. When avatars are disabled in discussion settings.
    *
    * @since Twenty Thirteen 1.0
    *
    * @param array $classes A list of existing body class values.
    * @return array The filtered body class list.
    */
    function twentythirteen_body_class( $classes ) {
        if ( ! is_multi_author() )
            $classes[] = 'single-author';

        if ( is_active_sidebar( 'sidebar-2' ) && ! is_attachment() && ! is_404() )
            $classes[] = 'sidebar';

        if ( ! get_option( 'show_avatars' ) )
            $classes[] = 'no-avatars';

        return $classes;
    }
    add_filter( 'body_class', 'twentythirteen_body_class' );

    /**
    * Adjust content_width value for video post formats and attachment templates.
    *
    * @since Twenty Thirteen 1.0
    */
    function twentythirteen_content_width() {
        global $content_width;

        if ( is_attachment() )
            $content_width = 724;
        elseif ( has_post_format( 'audio' ) )
            $content_width = 484;
    }
    add_action( 'template_redirect', 'twentythirteen_content_width' );

    /**
    * Add postMessage support for site title and description for the Customizer.
    *
    * @since Twenty Thirteen 1.0
    *
    * @param WP_Customize_Manager $wp_customize Customizer object.
    */
    function twentythirteen_customize_register( $wp_customize ) {
        $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
        $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
        $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
    }
    add_action( 'customize_register', 'twentythirteen_customize_register' );

    /**
    * Enqueue Javascript postMessage handlers for the Customizer.
    *
    * Binds JavaScript handlers to make the Customizer preview
    * reload changes asynchronously.
    *
    * @since Twenty Thirteen 1.0
    */
    function twentythirteen_customize_preview_js() {
        wp_enqueue_script( 'twentythirteen-customizer', get_template_directory_uri() . '/js/theme-customizer.js', array( 'customize-preview' ), '20141120', true );
    }
    add_action( 'customize_preview_init', 'twentythirteen_customize_preview_js' );
