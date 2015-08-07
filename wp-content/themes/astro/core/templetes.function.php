<?php
/*
 * Title
 */
 
    #-----------------------------------------------------------------#
    # Add Style                                                #
    #-----------------------------------------------------------------#  
      
function pr_title_render(){
    global $smof_data, $post;
        
        ob_start();
        ?>
        <?php if(is_single()){ ?>
            <?php if($smof_data['show_title_post']){ ?>
                <h2 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php } ?>
        <?php }else{ ?>
            <h2 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php } ?>
        <?php
        return  ob_get_clean();
}
/*
 * Info Bar
 */
function pr_info_bar_render() {
    global $smof_data, $post;
        
        $show_info = 1;
        if(is_single()){
            $show_info = $smof_data['show_info_post']? $show_info: 0;
        }else{
           $show_info = $smof_data['show_info_blog']? $show_info: 0;
        }
    ob_start();
        
        ?>
        <?php if($show_info){ ?>
        <div class="blog-info">
            <time class="publish-date" datetime="<?php echo get_the_date('Y-m-j') . ' ' . get_the_time('H:i:s'); ?>" pubdate="pubdate">
                <?php _e('Published on', THEMENAME); ?> <?php echo get_the_date('l, j F Y') . ' ' . get_the_time('H:i'); ?>
            </time>
            <span class="category-name"><?php the_terms(get_the_ID(), 'category', __('Category: ', THEMENAME) , ', ' ); ?></span>
        </div>
        <?php } ?>
        <?php
        return  ob_get_clean();
}
/*
 * Media for blog
 */
/* Post gallery */
if (!function_exists('pr_grab_ids_from_gallery')) {

    function pr_grab_ids_from_gallery() {
        global $post;
        $gallery = pr_get_shortcode_from_content('gallery');
        $object = new stdClass();
        $object->columns = '3';
        $object->link = 'post';
        $object->ids = array();
        if ($gallery) {
            $object = pr_extra_shortcode('gallery', $gallery, $object);
        }
        return $object;
    }

}
/* Extra shortcode */
if (!function_exists('pr_extra_shortcode')) {

    function pr_extra_shortcode($name, $shortcode, $object) {
        if ($shortcode && is_object($object)) {
            $attrs = str_replace(array('[', ']', '"', $name), null, $shortcode);
            $attrs = explode(' ', $attrs);
            if (is_array($attrs)) {
                foreach ($attrs as $attr) {
                    $_attr = explode('=', $attr);
                    if (count($_attr) == 2) {
                        if ($_attr[0] == 'ids') {
                            $object->$_attr[0] = explode(',', $_attr[1]);
                        } else {
                            $object->$_attr[0] = $_attr[1];
                        }
                    }
                }
            }
        }
        return $object;
    }

}
/* Get Shortcode From Content */
if (!function_exists('pr_get_shortcode_from_content')) {

    function pr_get_shortcode_from_content($param) {
        global $post;
        $pattern = get_shortcode_regex();
        $content = $post->post_content;
        if (preg_match_all('/' . $pattern . '/s', $content, $matches) && array_key_exists(2, $matches) && in_array($param, $matches[2])) {
            $key = array_search($param, $matches[2]);
            return $matches[0][$key];
        }
    }

}
/*
 * Content for blog
 */
 function pr_content_render(){
    global $smof_data;
    ob_start();
    ?>
    <?php if (is_single()) { ?>
            <div class="blog-description">
                <?php
                the_content();
                wp_link_pages(array(
                    'before' => '<div class="page-links">' . __('Pages:', THEMENAME),
                    'after' => '</div>',
                ));
                ?>
            </div>
        <?php } else { ?>
            <div class="blog-description">
                <?php echo custom_excerpt($smof_data['blog_excerpt_length_blog'], $smof_data['blog_excerpt_more_blog']); ?>
            </div>
            <a href="<?php echo esc_url(get_permalink()); ?>" class="readmore"><?php _e('Read More: ', THEMENAME);
            the_title(); ?></a>
        <?php } ?>
    <?php
    return  ob_get_clean();
}
/*CMS Blue Paging*/
function cmsblue_paging_nav() {
    // Don't print empty markup if there's only one page.
  if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
    return;
  }

  $paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
  $pagenum_link = html_entity_decode( get_pagenum_link() );
  $query_args   = array();
  $url_parts    = explode( '?', $pagenum_link );

  if ( isset( $url_parts[1] ) ) {
    wp_parse_str( $url_parts[1], $query_args );
  }

  $pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
  $pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

  $format  = $GLOBALS['wp_rewrite']->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
  $format .= $GLOBALS['wp_rewrite']->using_permalinks() ? user_trailingslashit( 'page/%#%', 'paged' ) : '?paged=%#%';

  // Set up paginated links.
  $links = paginate_links( array(
      'base'     => $pagenum_link,
      'format'   => $format,
      'total'    => $GLOBALS['wp_query']->max_num_pages,
      'current'  => $paged,
      'mid_size' => 1,
      'add_args' => array_map( 'urlencode', $query_args ),
      'prev_text' => __( '<i class="fa fa-angle-left"></i>', THEMENAME ),
      'next_text' => __( '<i class="fa fa-angle-right"></i>', THEMENAME ),
  ) );

  if ( $links ) :

  ?>
  <nav class="navigation paging-navigation clearfix" role="navigation">
      <div class="pagination loop-pagination">
        <?php echo ''.$links; ?>
      </div><!-- .pagination -->
  </nav><!-- .navigation -->
  <?php
  endif;
}
