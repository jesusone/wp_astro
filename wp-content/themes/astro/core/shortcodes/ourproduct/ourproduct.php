<?php
function ourProductShortCode($atts, $content = null) {
    global $outProduct, $product, $woocommerce_loop;
    extract(shortcode_atts(array(
        'head_small_title'       => "Our products",
        'head_title'             => "World Class Product",
        'pre_text'          => "Curabitur non nulla sit amet nisl tempus convallis quis lectus. Praesent sapien massa, convallis a pellen tesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt ni dictum porta",
        'category'          => "",
        'number_product'    => -1,
        'orderby'           => 'none',
        'order'             => 'none',
        'addtocart_text'    => 'Add to card',
        'show_head_small_title' => 1,
        'show_head_title'   => 1,
        'show_pre_text'     => 1,
        'show_title'        => 1,
        'show_rating'       => 1,
        'price_icon'        => 'fa fa-tag',
        'show_price'        => 1,
        'show_description'  => 1,
        'show_product_info' => 1,
        'show_addtocart_btn' => 1,
        'number_in_row'     => 4,
        'show_item_title_link' => 0,
        'show_item_price'   => 1,
      ), $atts));
      $outProduct = $atts;
      $args = array();
        if (isset($category) && $category != '') {
            $cats = explode(',', $category);
            $category = array();
            foreach ((array) $cats as $cat) :
            $category[] = trim($cat);
            endforeach;
            $args = array(
                'posts_per_page' => $number_product,
                'post_type' => 'product',
                'tax_query' => array(
                        array(
                                'taxonomy' => 'product_cat',
                                'field' => 'id',
                                'terms' => $category
                        )
                ),
                'order' => $order,
                'post_status' => 'publish'
            );
        }
        else{
            $args = array(
                    'posts_per_page' => $posts_per_page,
                    'post_type' => 'product',
                    'order' => $order,
                    'post_status' => 'publish'
            );
        }
        /* Orderby */
        if ($orderby == 'price') {
            $args['meta_key'] = '_price';
            $args['orderby']  = 'meta_value_num';
        }
        else if ($orderby == 'rand') {
            $args['orderby']  = 'rand';
        }
        else if ($orderby == 'sales') {
            $args['meta_key'] = 'total_sales';
            $args['orderby']  = 'meta_value_num';
        }
        else { 
            $args['orderby']  = $orderby;
        }

        $products = new WP_Query($args);
         
    ob_start();
    if ($products->have_posts()) {  
       
    ?>
        <div class="container padding-top padding-bottom">
        <?php if($show_head_small_title && $show_head_title && $show_pre_text): ?>
    	<div class="row section-title text-center">
    		<div class="col-sm-8 col-sm-offset-2">
                <?php if($show_head_small_title && $show_head_title): ?>
    			<h2>
                    <?php if($show_head_small_title) echo '<small>'.$head_small_title.'</small>'; ?>
                    <?php if($show_head_title) echo $head_title ; ?> 
                </h2>
                <?php endif; ?>
    			<p><?php if($show_pre_text) echo $pre_text ; ?></p>
    		</div>
    	</div>	
        <?php endif; ?>
    	<div class="products">				
    		<div class="tab-content">
            <?php
             $i=1;
             while ($products->have_posts()) : 
             $products->the_post();
             global $wpdb;
             global $product;  
             $post = $product->post; 
             ?>
               
    			<div class="tab-pane fade <?php echo $i==1?' in active':'';?>" id="product<?php echo $i;?>">						
    				<div class="row">
    					<div class="col-sm-6">
    						<?php  
                            $attachment_ids = $product->get_gallery_attachment_ids();
                            foreach( $attachment_ids as $attachment_id ) 
                            {
                                $original_image_url = wp_get_attachment_url( $attachment_id );
                                echo '<img class="img-responsive" alt="" src="'. $original_image_url .'" />';
                              
                            }
                            ?>
    					</div>
    					<div class="col-sm-6">
    						<div class="product-details">
                            <?php if($show_title):?>
    							<h3 class="product-name"><?php the_title();?></h3>
                            <?php endif;?>
                                <?php
                                 
                                //$rating_count = $product->get_rating_count();
                                //$review_count = $product->get_review_count();
                                //$average      = $product->get_average_rating();
                                $count = $wpdb->get_var("
                        			SELECT COUNT(meta_value) FROM $wpdb->commentmeta
                        			LEFT JOIN $wpdb->comments ON $wpdb->commentmeta.comment_id = $wpdb->comments.comment_ID
                        			WHERE meta_key = 'rating'
                        			AND comment_post_ID = $product->id
                        			AND comment_approved = '1'
                        			AND meta_value > 0
                        		");
                        
                        		$rating = $wpdb->get_var("
                        			SELECT SUM(meta_value) FROM $wpdb->commentmeta
                        			LEFT JOIN $wpdb->comments ON $wpdb->commentmeta.comment_id = $wpdb->comments.comment_ID
                        			WHERE meta_key = 'rating'
                        			AND comment_post_ID = $product->id
                        			AND comment_approved = '1'
                        		");
                                if ( $count > 0 ) {
                                    $average = round(number_format($rating / $count, 2));
                                    $str = "";
                                    for($t = 0; $t < (int)$average; $t++) {
                                        $str .= ' <span><i class="fa fa-star"></i></span>';
                                    }
                                    for($d = (int)$average; $d < 5; $d++) {
                                        $str .= ' <span><i class="fa fa-star-o"></i></span>';
                                    }
                                    if($show_rating)
                                        echo '<span class="ratings">'.$str.'</span>'; 
                                }else{
                                ?>
                                <span class="ratings">
									<span><i class="fa fa-star-o"></i></span>
									<span><i class="fa fa-star-o"></i></span>
									<span><i class="fa fa-star-o"></i></span>
									<span><i class="fa fa-star-o"></i></span>
									<span><i class="fa fa-star-o"></i></span>
								</span>
                                <?php }?> 
    							<div class="product-info">
                                    <?php if($show_price):?>
        								<h4 class="product-price">
                                        <?php if($price_icon!='') echo '<i class="'.$price_icon.'"></i>'; ?>
                                        <?php woocommerce_get_template( 'loop/price.php' );?></h4>
                                    <?php endif;?>
    								<?php if($show_description) echo $post->post_content; ?>
                                     
    								<?php if($post->post_excerpt):?>
                                        <?php if($show_product_info):?>
            								<h5>Product Info</h5>
            								<?php echo  $post->post_excerpt;?>
                                        <?php endif;?>
                                    <?php endif;?>
                                    <?php if($show_addtocart_btn):?>
    								<a rel="<?php echo $product->id; ?>" href="script:void(0);" class="op-add-to-cart btn btn-default has-spinner">
                                        <?php echo $addtocart_text;?>
                                        <span class="spinner"><i class="fa fa-spin fa fa-refresh"></i></span>
                                    </a>
                                    <?php endif;?>
                                     
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
                <?php 
                $i++;
                endwhile; 
                ?>
    		</div>
    		<ul id="product-list" class="row nav nav-tabs" role="tablist" data-item="<?php echo $number_in_row;?>">
            <?php
            $j=1;
            while ($products->have_posts()) : 
             $products->the_post();
             global $product; 
                $feat_image = wp_get_attachment_url( get_post_thumbnail_id($product->id) );
                $col=12/$number_in_row;
                ?>
    			<li class="col-sm-<?php echo $col;?>" style="<?php echo (($j-1)%$number_in_row)==0?'clear:both':'';?>">
    				<a class="product-image" href="#product<?php echo $j;?>" role="tab" data-toggle="tab">							
    					<?php echo '<img class="img-responsive" alt="" src="'. $feat_image .'" />';?>
    				</a>
    				<div class="product-name">
    					<p>
                        <?php if($show_item_title_link){?>
                        <a class="product-link-item" rel="" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><span><?php the_title(); ?></span></a>
                        <?php }else{ ?>
                        <?php the_title(); ?>
                        <?php }?>
                        <span>
                        <?php if($show_item_price) woocommerce_get_template( 'loop/price.php' );?>
                        </span>
                        </p>
    				</div>
    			</li>
    		      
                <?php 
                $j++;
                endwhile;   
                ?>					
    		</ul>
    		<div id="loadMore">
    			<span>Load more</span>
    		</div>
    	</div>
    </div>
    <script>
            (function () {  
                var size_li = $("#product-list li").size();
                var data_item = $('#product-list').attr('data-item'); 
                var x= parseInt(data_item);
                $('#product-list li:lt('+x+')').show();
                $('#loadMore span').on('click', function() {
                    x= (x+parseInt(data_item) <= size_li) ? x+parseInt(data_item) : size_li;
                    $('#product-list li:lt('+x+')').show(500);
                    if(x == size_li){
                        $('#loadMore span').hide();
                    }
                });
                $('#product-list li a').click(function(){
                     $('html,body').animate({
                        scrollTop: ($(".products").offset().top - 120)
                    }, 1000);
                });
                $('.op-add-to-cart').click(function(){
                    var product_id = jQuery(this).attr('rel');
                    var el = jQuery(this);
                    $(this).toggleClass('active');
                    var data = {
                        action: 'add_foobar',
                        product_id: product_id
                    };
                    
                    $.post('wp-admin/admin-ajax.php' , data, function(response) {
                        if(response != 0) {
                           $('.op-add-to-cart').removeClass('active');
                        } else {
                          // $('.op-add-to-cart').removeClass('active');
                        }
        
                    });
                //return false;
                });
                 
                 
            }());
    </script>
    <?php 
    } 
    return ob_get_clean();
}

add_shortcode('our-product', 'ourProductShortCode');

add_action( 'wp_ajax_add_foobar', 'prefix_ajax_add_foobar' );
add_action( 'wp_ajax_nopriv_add_foobar', 'prefix_ajax_add_foobar' );

function prefix_ajax_add_foobar() {
    ob_start();	
	$product_id = apply_filters( 'woocommerce_add_to_cart_product_id', absint( $_POST['product_id'] ) );
	$quantity = empty( $_POST['quantity'] ) ? 1 : apply_filters( 'woocommerce_stock_amount', $_POST['quantity'] );
	$variation_id = $_POST['variation_id'];
	$variation  = $_POST['variation'];
	$passed_validation = apply_filters( 'woocommerce_add_to_cart_validation', true, $product_id, $quantity );

	if ( $passed_validation && WC()->cart->add_to_cart( $product_id, $quantity, $variation_id, $variation  ) ) {
		do_action( 'woocommerce_ajax_added_to_cart', $product_id );
		if ( get_option( 'woocommerce_cart_redirect_after_add' ) == 'yes' ) {
			wc_add_to_cart_message( $product_id );
		}

		// Return fragments
		WC_AJAX::get_refreshed_fragments();
	} else {
		$this->json_headers();

		// If there was an error adding to the cart, redirect to the product page to show any errors
		$data = array(
			'error' => true,
			'product_url' => apply_filters( 'woocommerce_cart_redirect_after_error', get_permalink( $product_id ), $product_id )
			);
		echo json_encode( $data );
	}
	die();
}
?>
 