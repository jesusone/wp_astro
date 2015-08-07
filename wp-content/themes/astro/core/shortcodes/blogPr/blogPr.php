<?php

function pr_cmsblue_blog($atts, $content = null) {
   
      $data = shortcode_atts(
                array(
                    'blog_style' => '',
                    'number_posts' => '',
                    'post_per_row' => '',
                    'blog_category' => '',
                    'orderby' => 'ID',
                    'order' => 'DESC',
                    'loadmore' => '',
                ), $attr, 'blue_blog' );
            extract($data);
     // code findter
        if($blog_category == '')
            $blog_category = 'all';
        
        $list_cat = $blog_category; 
        $check = (explode(",",$blog_category));
        foreach($check as $key){
            if($key == "all"){
              $list_cat = "all";
            }
        }
        // code query
        global $wp_query;
        
        $paged = $wp_query->query_vars['paged']?$wp_query->query_vars['paged']:1;
        if($blog_style == '1' && $post_per_row == $number_posts){
          $paged = 1; 
        }
		print_r($number_posts);
		if (is_numeric($number_posts)) {
			$query=array(
                'posts_per_page'=>  $number_posts,
                'paged'         =>  $paged,
                'post_type'     =>  'post',
                'orderby'       =>  $orderby,
                'order'         =>  $order,
                'ignore_sticky_posts'=>true
			);
		}else{
			$query=array(
                'posts_per_page'=>  5,
                'paged'         =>  $paged,
                'post_type'     =>  'post',
                'orderby'       =>  $orderby,
                'order'         =>  $order,
                'ignore_sticky_posts'=>true
			);			
		}
        if($list_cat != "all")
        { 
        
            $query['tax_query'][]=array(
                    'taxonomy'=>'category',
                    'field'=>'slug',
                    'terms'=>explode(",",$blog_category)
            );
        }
         query_posts($query);
         $data['list_cat'] = $list_cat;
        $data['paged'] = $paged;
         
    ob_start();
     
    get_template_part('core/layouts/vc-templetes/blog/blog', false,$data);
    return ob_get_clean();
}

add_shortcode('cmsblue_blog', 'pr_cmsblue_blog');
?>
