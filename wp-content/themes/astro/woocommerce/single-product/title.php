<?php
/**
 * Single Product title
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     9.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 prd-title">
	<h3 itemprop="name" class="product_title entry-title"><?php the_title(); ?></h3>
</div>
