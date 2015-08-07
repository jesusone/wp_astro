<?php  
    global $post, $wp_query, $port_option; 
    
?>
<div id="our-work"><!-- Start our work -->
    <div class="container padding-top">
      <div class="row section-title text-center">
        <div class="col-sm-8 col-sm-offset-2">
          <h2><small>Our Works</small>What We Done So Far</h2>
          <p>Curabitur non nulla sit amet nisl tempus convallis quis lectus. Praesent sapien massa, convallis a pellen tesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt ni dictum porta</p>
        </div>
      </div>      
    </div>
    <?php if($port_option['show_category']):   
         $cats = explode(',', $port_option['category']);
         
    ?>
    <div class="portfolio-menu text-center">
      <ul>
      
        <li class="active filter"  data-filter="all">All</li>
        <?php if($cats):
             foreach ((array) $cats as $cat): 
             $term_cats = get_term($cat, 'portfolio_category');  
         ?>
                <li class="filter"  data-filter="<?php echo $term_cats->slug; ?>"><?php echo $term_cats->name; ?></li>
        <?php 
            endforeach;
        endif; ?>
      </ul>
    </div>
    <?php endif; ?>
    <?php if($wp_query->have_posts()): ?>
    <div id="portfolio-details">
       <div id="single-portfolio">
            
        </div>
      </div><!-- /#portfolio-details-->

    <div class="portfolio-item padding-bottom portfolio_contents">
      <div id="portfolio_filter">
       <?php 
       while ($wp_query->have_posts()): 
             $wp_query->the_post();
             $terms = get_the_terms($wp_query->post->ID, "portfolio_category"); 
             if (!empty($terms)) {
                foreach ($terms as $term) {
                    $project_cats .= strtolower($term->slug) . ' ';
                    $project_names[] = $term->name;
                }
             }
             if ( has_post_thumbnail() ) {
                 $attachment_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full', false);
                 $link_image =  esc_attr($attachment_image[0]);
             }
       ?>
        <div class="col-sm-3 col-md-2 portfolio-content mix all <?php echo $project_cats; ?>">
          <img class="img-responsive" src="<?php echo $link_image; ?>" alt="" />          
          <div class="overlay">
            <h5><?php echo the_title() ;?></h5>
            <h6><?php echo strip_tags(get_the_term_list($post->ID, 'portfolio_category', '', ', ', '')); ?></h6>        
            <a href="javascript:void(0);" data-single_url="<?php echo  get_permalink($port_id)."?fiter_pofolio=1";?>"><i class="fa fa-external-link"></i></a>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div> 
    <?php endif; ?> 
  </div><!-- #/ our work -->
